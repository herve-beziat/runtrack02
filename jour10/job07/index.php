<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez la superficie totale des étages dans une colonne nommée
“superficie_totale”. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données. -->

<?php

// On établit la connexion à notre base de donnée jour09

$mySqli = new mysqli('localhost', 'root', '', 'jour09');

$request = $mySqli->query("SELECT SUM(superficie) FROM `etages`");

$result = $request->fetch_array(MYSQLI_ASSOC);

var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Base de donnée</h1>
    
    <table border=3>
        <thead>
            <tr>
                <?php 
                echo "<th>Superficie totale</th>";
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                do {
                    echo '<tr>';
                foreach($result as $key => $value){
                    echo '<td>' . $value . "</td>";
            } 
                    $result =$request->fetch_array(MYSQLI_ASSOC);
                    echo '</tr>';}
                while ($result !== NULL) ?>
        </tbody>
    </table>
    
</body>
</html>