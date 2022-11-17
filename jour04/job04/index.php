<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
<form action="" method="post" class="formulaire">
        <label for="nom">Quel est votre nom: </label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Quel est votre prénom: </label>
        <input type="text" name="prenom" id="prenom">

        <input type="submit" value="Envoyer!">
</form> 

<table border=3>

<?php

var_dump($_POST);

echo "

            <tr>
                <th>argument</th>
                <th>valeur</th>
            </tr> ";

foreach ($_POST as $key => $value) {
    echo"
        <tr>
            <td>$key</td><td>$value</td>
        </tr>
";
}


?>
</table>
</body>
</html>