<?php
require_once "config.php";
require_once "fonctions.php";
$notes = ["Mohamed"=>14, "Sami"=>9, "Amel"=>17, "Yassine"=>8, "Ines"=>12];

function afficherNotes($notes) {
    foreach ($notes as $nom => $note) {
        echo "Nom : $nom Note : $note<br>";
    }
}

function moyenne($notes) {
    return array_sum($notes) / count($notes);
}

function afficherAdmis($notes) {
    $admis = array_filter($notes, fn($note) => $note >= 10);
    print_r($admis);
}

function trierNotes($notes) {
    asort($notes);
    print_r($notes);
}

function ajouterBonus($notes) {
    return array_map(fn($n) => $n + 1, $notes);
}


?>
