<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

<!-- 1ere methode avec des if et elseif -->
<!-- <?php
    if(isset($_POST["CSSstyle"])=="Style1") {
        echo '<link rel="stylesheet" href="./style1.css">';
        echo "style1";
        }
    elseif(isset($_POST["CSSstyle"])=="Style2") {
        echo '<link rel="stylesheet" href="./style2.css">';
        }
    elseif(isset($_POST["CSSstyle"])=="Style3") {
        echo '<link rel="stylesheet" href="./style3.css">';
        }
?> -->

<!-- 2eme méthode avec switch case -->
<?php
if (isset($_POST["CSSstyle"])){
    switch($_POST["CSSstyle"]) {
        case "Style1";
            echo '<link rel="stylesheet" href="./style1.css">';
            echo "style1";
            break;
        case "Style2";
            echo '<link rel="stylesheet" href="./style2.css">';
            echo "style2";
            break;
        case "Style3";
            echo '<link rel="stylesheet" href="./style3.css">';
            echo "style3";
            break;
        }
    }
?>



    <title>Style</title>
</head>
<body>

    <form action="http://localhost/runtrack02/jour06/job05/" method="post" class="formulaire">
        <select name="CSSstyle">
            <option value="Style1" <?php if(isset($_POST['CSSstyle']) && $_POST['CSSstyle'] == "Style1") echo"selected" ?> >Style1</option>
            <option value="Style2" <?php if(isset($_POST['CSSstyle']) && $_POST['CSSstyle'] == "Style2") echo"selected" ?> >Style2</option>
            <option value="Style3" <?php if(isset($_POST['CSSstyle']) && $_POST['CSSstyle'] == "Style3") echo"selected" ?> >Style3</option>
        </select>
        <input type="submit" value="Valider !">
    </form>
    
</body>
</html>