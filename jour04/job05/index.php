<!-- Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”. -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05</title>
</head>
<body>
    <form action="" method="post" class="formulaire">
        <label for="username">Quel est votre username: </label>
        <input type="text" name="username" id="username">

        <label for="password">Quel est votre password: </label>
        <input type="text" name="password" id="password">

        <input type="submit" value="Envoyer!">
    </form> 
<?php

// Nous utilisons un POST ici car nous faisons un formulaire demandant un mot de passer alors nous ne voulons pas que celui ci soit visible dans la barre de navigation

echo "<br />";
var_dump($_POST);


if ($_POST["username"] === "John" and $_POST["password"] === "Rambo"){
    echo "C'est pas ma guerre";
}
    else { echo "Votre pire cauchemar"; }


?>



</body>
</html>