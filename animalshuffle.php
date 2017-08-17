<?php
$animals = Array(
            'Australia' => ['Inaria'],            
            'North America' => ['Conuropsis carolinensis'],
            'South America' => ['Smilisca'],
            'Antarctica' => ['Aptenodytes forsteri'],
            'Eurasia' => ['Fulica atra'],
            'Africa' => ['Hydrochoerus hydrochaeris','Actinopterygii','Agalychnis callidryas','Ailuropoda melanoleuca','Dendropithecus','Amphibia','Animalia','Anser indicus','Anseriformes','Panthera leo'],
            );

$namefromtwowords = array();
foreach($animals as $animallocation){
    foreach ($animallocation as $continent => $animal)
    {
        if (strpos( $animal, ' ') !== false )
            array_push($namefromtwowords, $animal);
 
    }
}
 
foreach ($namefromtwowords as $animalname) {
    $animalnewname = explode(' ',$animalname);
    $firtsname[] = $animalnewname[0];
    $lastname[] = $animalnewname[1];
}
shuffle($lastname);
$shuffleanimal = array();
for ($i=0; $i < count($lastname); $i++){
    $k = $firtsname[$i] .' '. $lastname[$i];
    array_push($shuffleanimal, $k);
}
var_dump($shuffleanimal);
?>
