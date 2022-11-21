<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

<!-- 1ere methode avec des if et elseif -->
    <!-- <?php
        if($_POST["CSSstyle"]=="Style1") {
    echo '<link rel="stylesheet" href="./style1.css">';
        }
        elseif($_POST["CSSstyle"]=="Style2") {
    echo '<link rel="stylesheet" href="./style2.css">';
        }
        elseif($_POST["CSSstyle"]=="Style3") {
    echo '<link rel="stylesheet" href="./style3.css">';
        }
    ?> -->

<!-- 2eme méthode avec switch case -->
    <?php
        switch($_POST["CSSstyle"]) {
            case "Style1";
                echo '<link rel="stylesheet" href="./style1.css">';
                break;
            case "Style2";
                echo '<link rel="stylesheet" href="./style2.css">';
                break;
            case "Style3";
                echo '<link rel="stylesheet" href="./style3.css">';
                break;
            }
    ?>



    <title>Style</title>
</head>
<body>

    <form action="http://localhost/runtrack02/jour06/" method="post" class="formulaire">
        <select name="CSSstyle">
            <option value="Style1">Style1</option>
            <option value="Style2">Style2</option>
            <option value="Style3">Style3</option>
        </select>
        <input type="submit" value="Valider !">
    </form>
    
</body>
</html>