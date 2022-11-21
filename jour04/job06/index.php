<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job06</title>
</head>
<body>
    <form action="" method="get" class="formulaire">
        <label for="nombre">Rentrez un nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <input type="submit" value="Envoyer!">
    </form> 

<?php


foreach($_GET as $value){
    if ($value%2===0){
        echo "$value est un nombre Pair";
    }
    else {echo "$value est un nombre impair";}
}




?>


</body>
</html>