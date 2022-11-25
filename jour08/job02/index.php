<!-- Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

if (isset($_COOKIE['nbvisites'])) {
    setCookie('nbvisites', $_COOKIE['nbvisites'] + 1);
    } 
    else {
    setCookie('nbvisites', 1);
     }

     if(isset($_POST["reset"])){
        setcookie('nbvisites',0);
        $_COOKIE['nbvisites'] = 0;
        // session_destroy();
        // header("location:"."index.php");
     }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>Le site a été visité <?php if (isset($_COOKIE['nbvisites'])){echo $_COOKIE['nbvisites']; }else{echo "0";}?> fois</p>
    <form  method='POST'>
        <input type="submit" value="reset" name="reset">
    </form>
</body>
</html>
