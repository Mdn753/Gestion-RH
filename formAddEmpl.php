<?php
    require 'connexion.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['adresse'], $_POST['dateNaissance'], $_POST['numserv'])) {
            
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $sexe = $_POST['sexe'];
            $adresse = $_POST['adresse'];
            $dateNaissance = $_POST['dateNaissance'];
            $numServ = $_POST['numserv'];

            $sql = "INSERT INTO `employes` (`nom`, `prenom`, `sexe`, `adresse`, `dateNaissance`, `numServ`) VALUES('$nom','$prenom','$sexe','$adresse','$dateNaissance','$numServ')";
            $rs= mysqli_query($connect,$sql);
            if($rs){
                echo "Contact Records Inserted";
            }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddEmpl</title>
</head>
<body>
    <form name="addempl" method="post" action="formAddEmpl.php">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prenom:</label><br>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="sexe">Sexe:</label><br>
        <input type="text" id="sexe" name="sexe"><br>
        <label for="adresse">Adresse:</label><br>
        <input type="text" id="adresse" name="adresse"><br>
        <label for="dateNaissance">DateNaissance:</label><br>
        <input type="text" id="dateNaissance" name="dateNaissance"><br>
        <label for="numserv">Numserv:</label><br>
        <input type="text" id="numserv" name="numserv"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>