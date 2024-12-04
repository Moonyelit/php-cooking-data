<?php
// EXERCICE 1
echo "Exercice 1";
echo "<br>";
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);


echo "Ce dico contient un total de " . (count($dico)) . " mots.";


// EXERCICE 2
echo "<br>";
echo "<br>";
echo "Exercice 2";
echo "<br>";

$quinzecharaTABLE = [];

for ($i =0; $i < count($dico) ; $i +=1){
    $word = trim($dico[$i]); 
if (strlen($word) === 15) { 
    $quinzecharaTABLE[] = $word;    }
}

echo "Ce dico contient un total de " . (count($quinzecharaTABLE)) . " mots faisant exactment 15 catactères.";


// EXERCICE 3
echo "<br>";
echo "<br>";
echo "Exercice 2";
echo "<br>";

$WcharaTABLE = [];

foreach ($dico as &$value) {
    $Wchara = str_contains(string $dico, string "w");
    if (strlen($dico) === $Wchara ){

    }
    echo $value;
    echo "<br>";
};