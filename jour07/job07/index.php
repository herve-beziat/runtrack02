<!-- Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
</head>
<body>
    <form action="http://localhost/runtrack02/jour07/job07/" method="post" class="formulaire">
        <label for="nom">Quel est votre texte: </label>
        <input type="text" name="str" id="texte">
        <select name="fonction">
            <option value="gras" <?php if(isset($_POST['fonction']) && $_POST['fonction'] == "gras") echo"selected" ?> >gras</option>
            <option value="cesar" <?php if(isset($_POST['fonction']) && $_POST['fonction'] == "cesar") echo"selected" ?> >cesar</option>
            <option value="plateforme" <?php if(isset($_POST['fonction']) && $_POST['fonction'] == "plateforme") echo"selected" ?> >plateforme</option>
        </select>
        <input type="submit" value="Submit !">
    </form>


<?php




?>

    
</body>
</html>