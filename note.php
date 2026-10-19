<?php
// 1 :
$notes = ["Mohamed"=>14, "Sami"=>9, "Amel"=>17, "Yassine"=>8, "Ines"=>12];

foreach ($notes as $nom => $note) {
    echo "Nom : " . $nom . " Note : " . $note . "<br>";
}

// 2 :
$moyenne = array_sum($notes) / count($notes);
echo "Moyenne : " . $moyenne . "<br>";

// 3 :
$admis = array_filter($notes, fn($note) => $note >= 10);
echo "Admis : <br>";
print_r($admis);
echo "<br>";
echo " admis : <br>";

// 4 :

sort($notes);
foreach ($notes as $nom => $note) {
    echo "Nom : " . $nom . " Note : " . $note . "<br>";
}
echo "+1<br>";
// 5 :
$Bonus = array_map(fn($n) => $n + 1, $notes);
print_r($Bonus);
?>
```