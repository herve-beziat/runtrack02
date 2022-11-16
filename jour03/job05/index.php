<?php
// Créez une variable de type string nommée $str et affectez y le texte :
// “On n’est pas le meilleur quand on le croit mais quand on le sait”.
// Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
// “consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
// nombre d'occurrences de consonnes et de voyelles de $str.
// Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
// “Consonnes”..

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "consonnes" => "BbCcDdFfGgHhJjKkLlMmNnPpQqRrSsTtVvXxZz",
    "voyelles" => "AaEeIiOoUuYy"
];



$voy = 0;
$con = 0;

for($a = 0; isset($str[$a]); $a++){
    for($i = 0; isset($dic["voyelles"][$i]); $i++){
        if($str[$a] == $dic["voyelles"][$i]){
            $voy++;
        }
    }
    for($i = 0; isset($dic["consonnes"][$i]); $i++){
        if($str[$a] == $dic["consonnes"][$i]){
            $con++;
        }
    }
}





echo "
    <table border=5>
        <tr>
            <th>consonnes</th>
            <th>voyelles</th>
        </tr>
        <tr>
            <td>$con</td>
            <td>$voy</td>
        </tr>
    
    "

?>