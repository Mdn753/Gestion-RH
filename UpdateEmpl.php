<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modidier un employe</title>
</head>
<body>
    <form name="UpdateEmpl" method="POST" action="editEmpl.php">
        <label for="nom_ancien">Nom a changer:</label><br>
        <input type="text" id="nom_ancien" name="nom_ancien"><br>
        <label for="nouveau_nom">Nouveau nom:</label><br>
        <input type="text" id="nouveau_nom" name="nouveau_nom"><br>
        <label for="prenom_ancien">Prenom a changer:</label><br>
        <input type="text" id="prenom_ancien" name="prenom_ancien"><br>
        <label for="nouveau_prenom">Nouveau prenom:</label><br>
        <input type="text" id="nouveau_prenom" name="nouveau_prenom"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>