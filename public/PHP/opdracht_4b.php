<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$leerling=array('nr' => 123456, 'voornaam' => 'dianne', 'achternaam' => 'de jong');
$leerling['geboortejaar']=2002;
echo $leerling['voornaam']." ".$leerling['achternaam']." werd geboren in ".$leerling['geboortejaar'].".<br>";

array_reverse($leerling);
echo "<s>";
print_r($leerling);
echo "</pre>";
sort($leerling);
echo "<pre>";
print_r($leerling);
echo "</pre>";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>