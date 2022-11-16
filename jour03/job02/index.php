<?php
// Créez une variable de type string nommée $str et affectez y le texte :
// “Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
// Parcourir cette chaîne en affichant seulement un caractère sur deux.
// Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";


for ($i=0; isset($str[$i]); $i+=2){
    echo $str[$i];
}


// 2eme méthode

// $i = 0;
// $a = 0;

// while (isset($str[$i])==true){
//     $a=$a+1;
//     $i=$i+1;
// }

// for ($i=0; $i<$a; $i++){
//     if ($i%2==0){
//         echo $str[$i];
//     }
// }



?>