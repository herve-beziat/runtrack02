<?php
// Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
// à la ligne entre chaque nombre (“<br />”).


for ($i=2; $i<=1000; $i++){
    $count = 0;
    for ($x=2; $x<$i; $x++) {
        if ($i%$x == 0){
            $count++;
        }
    }
    if ($count == 0) {
        echo "$i<br />";
    }
    $count = 0;


}




?>