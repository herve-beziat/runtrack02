<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération. -->


<?php

function calcule($a, $b, $c) {
    if($b == "+"){
        $resultat=$a+$c;
        return $resultat;
    }
    elseif($b == "*"){
        $resultat=$a*$c;
        return $resultat;
    }
    elseif($b == "/"){
        $resultat=$a/$c;
        return $resultat;
    }
    elseif($b == "-"){
        $resultat=$a-$c;
        return $resultat;
    }
}




echo calcule(10, "/", 4);

?>