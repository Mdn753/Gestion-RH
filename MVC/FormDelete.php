<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete employe</title>
</head>
<body>
    <form name="delempl" method="post" action="ctrl.class.php?action=deleteEmploye">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom"></input><br>
        <label for="prenom">Prenom:</label><br>
        <input type ="text" id="prenom" name="prenom"></input><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>