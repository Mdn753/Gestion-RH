<?php
    require 'connexion.php';
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['nom'],$_POST['prenom'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];

            $sql = "DELETE FROM `employes` WHERE `nom`='$nom' AND `prenom`='$prenom'";
            $result = mysqli_query($connect,$sql);
            if ($result){
                echo "Contact removed";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete employe</title>
</head>
<body>
    <form name="delempl" method="post" action="delEmpl.php">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom"></input><br>
        <label for="prenom">Prenom:</label><br>
        <input type ="text" id="prenom" name="prenom"></input><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>