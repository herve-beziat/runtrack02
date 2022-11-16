<?php
// Créez une variable de type string nommée $str et affectez y le texte :
// “Certaines choses changent, et d'autres ne changeront jamais.”
// Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
// deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
// Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// On crée une fonction qui va remplacer le 1er caractère par une majuscule.
function maj($string){
    $MINS = "abcdefghijklmnopqrstuvwxyz";
    $MAJS = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($b = 0; isset($MINS[$b]); $b++){
        if($MINS[$b] == $string[0]){
            $string[0] = $MAJS[$b];
        }
    }
    return $string;
}

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$a = 1; 
// La variable a va nous permettre de définir de combien de caractères nous souhaitons décaler la chaîne de caractère.
for($x = 0; isset($str[$x]); $x++){
    $var1 = $var1 . $str[$x+$a];      
}
for($y = 0; $y < $a; $y++){
    $var2 = $var2 . $str[$y];
}

$str2 = $var1 . $var2;

$str3 = maj($str2);

echo $str3;





?>