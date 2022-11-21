<!-- Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “ -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    <form action="" method="get" class="formulaire">
        <label for="nom">Quel est votre nom: </label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Quel est votre prénom: </label>
        <input type="text" name="prenom" id="prenom">

        <label for="age">Quel est votre age: </label>
        <input type="text" name="age" id="age">

        <input type="submit" value="Envoyer!">

    <?php
    echo "<br>";
    echo $_GET["nom"];
    echo "<br />";
    echo $_GET["prenom"];
    echo "<br />";
    echo $_GET["age"];
    var_dump($_GET);

$a=0;

foreach ($_GET as $key => $value) {
    $a=$a+1;
}

echo "Le nombre d'argumments GET envoyé est : $a";

    
    ?>
    </form>



</body>
</html>