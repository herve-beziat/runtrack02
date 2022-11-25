<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php
    
    //On démarre une nouvelle session
    session_start();
    echo "<br />salut <br /><br />";

    (isset($_SESSION['nbvisites'])) ? $_SESSION['nbvisites']++ : $_SESSION['nbvisites'] = 1;

    if(isset($_GET["reset"])){
        $_SESSION['nbvisites'] = 0;
        session_destroy();
        header("location:"."index.php");
    }


    var_dump($_SESSION);
    
    

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
    <p>Le site a été visité <?php echo $_SESSION['nbvisites']; ?> fois</p>
    <form  method='get'>
        <input type="submit" value="reset" name="reset">
    </form>
</body>
</html>
