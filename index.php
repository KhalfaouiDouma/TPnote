<?php
require_once "config.php";
require_once "fonctions.php";
$notes = ["Mohamed"=>14, "Sami"=>9, "Amel"=>17, "Yassine"=>8, "Ines"=>12];

afficherNotes($notes);
echo "Moyenne : " . moyenne($notes) . "<br>";
afficherAdmis($notes);
trierNotes($notes);
echo "Notes avec bonus : <br>";
ajouterBonus($notes);

?>
