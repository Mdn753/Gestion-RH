<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New employe</title>
</head>
<body>
    <form name="newEmploye" method="post" action="ctrl.class.php?action=addNewEmploye">
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
        <label for="numerv">Numserv:</label><br>
        <input type="text" id="numserv" name="numserv"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>