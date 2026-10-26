
<?php

function afficherNotes($notes) {
    foreach ($notes as $nom => $note) {
        echo "Nom : " . $nom . " Note : " . $note . "<br>";
    }
}

function moyenne($notes) {
    return array_sum($notes) / count($notes);
}

function afficherAdmis($notes) {
    $admis = array_filter($notes, fn($note) => $note >= 10);

    echo "Admis : <br>";
    print_r($admis);
    echo "<br>";
}

function trierNotes($notes) {
    sort($notes);

    foreach ($notes as $nom => $note) {
        echo "Note : " . $note . "<br>";
    }
}

function ajouterBonus($notes) {
    $bonus = array_map(fn($n) => $n + 1, $notes);

    print_r($bonus);
    echo "<br>";
}
