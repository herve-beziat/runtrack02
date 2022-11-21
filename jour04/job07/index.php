<!-- Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :

Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci : -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
</head>
<body>
    <form action="" method="get" class="formulaire">
        <label for="largeur">Largeur ? : </label>
        <input type="text" name="largeur" id="largeur">

        <label for="hauteur">Hauteur ? :</label>
        <input type="text" name="hauteur" id="hauteur">

        <input type="submit" value="Envoyer!">
    </form> 

<?php
// var_dump($_GET);
$largeur=(int)$_GET["largeur"];
$hauteur=(int)$_GET["hauteur"];

echo "$largeur $hauteur <br>";





?>
</body>
</html>