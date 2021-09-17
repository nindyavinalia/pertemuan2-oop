<!DOCTYPE html>
<html>
<body bgcolor="pink">
  <h1>Massage and Spa beauty house</h1>
  <h2>Pricelist Treatment Massage</h2>

<?php
  class PricelistTreatment{
  public $name;
  protected $harga;
  private $ukuran;
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
    function set_harga($harga) {
    $this->harga = $harga;
  }
  function get_harga() {
    return $this->harga;
  }

}



$BodyMassage = new PricelistTreatment();
$BackMassage = new PricelistTreatment();
$StoneMassage = new PricelistTreatment();
$BodyMassage->set_name('BodyMassage : '); $BodyMassage->set_harga('Rp.250.000.,');
$BackMassage->set_name('BackMassage : '); $BackMassage->set_harga('Rp.100.000.,');
$StoneMassage->set_name('StoneMassage : '); $StoneMassage->set_harga('Rp.150.000.,');

echo $BodyMassage->get_name();
echo $BodyMassage->get_harga();
echo "<br>";
echo $BackMassage->get_name();
echo $BackMassage->get_harga();
echo "<br>";
echo $StoneMassage->get_name();
echo $StoneMassage->get_harga();
echo "<br>";


class Spa extends PricelistTreatment{
  public function message(){
  }
}
$treatment = new Spa("Treatment", "Affordable");  // OK. __construct() is public
$treatment->message(); // OK. message() is public
?>

<h3>Pricelist Treatment Spa</h3>
<?php
interface Pricelist{
public function __construct($name, $harga);

}
class PricelistTreatmentSpa implements Pricelist {
  public $name;
  public $harga;
  public static function Order(){}
  public static $value = "Text via instagram";
  function __construct($name, $harga) {
    $this->name = $name;
    $this->harga = $harga;
  }
  function __destruct() {
    echo "{$this->name} = {$this->harga}.";
  }
}
echo $SpaBath = "SpaBath = Rp.100.000.,"; echo "<br>";
echo $BodySpa = "BodySpa = Rp.150.000.,"; echo "<br>";
echo $Reflexology = "Reflexology = Rp.100.000.,"; echo "<br>";


echo "ENJOY FOR TREATMENT"; echo "<br>";
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

?>
</body>
</html>