<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form  method='post'>
        <input type="text" name="prenom" id="prenom">
        <input type="submit" value="submit" name="submit">
        <br></br>
        <br></br>

        <input type="submit" value="reset" name="reset">
    </form>
</body>


<?php
session_start();

if (isset($_POST["submit"])){
    $_SESSION["users"][] = $_POST["prenom"];   
    foreach($_SESSION["users"] as $key => $value){
    echo "<ul>";
    echo "<li>" .$value. "</li>";
    echo "</ul>";
    }
}

if(isset($_POST["reset"])){
    session_destroy();
    header("location:"."index.php");
}

?>


</html>




