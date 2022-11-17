<!-- Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument POST envoyé est : “ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="formulaire">
        <label for="nom">Quel est votre nom: </label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Quel est votre prénom: </label>
        <input type="text" name="prenom" id="prenom">

        <label for="age">Quel est votre age: </label>
        <input type="text" name="age" id="age">

        <input type="submit" value="Envoyer!">

    <?php
    echo "<br>";
    echo $_POST["nom"];
    echo "<br />";
    echo $_POST["prenom"];
    echo "<br />";
    echo $_POST["age"];
    var_dump($_POST);

$a=0;

foreach ($_POST as $key => $value) {
    $a=$a+1;
}

echo "Le nombre d'argumments GET envoyé est : $a";

    
    ?>
    </form>



</body>
</html>