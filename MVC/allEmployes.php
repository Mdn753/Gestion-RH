<?php
foreach ($employes as $empl) {
    echo "Nom: " . $empl['nom'] . "<br>";
    echo "Prenom: " . $empl['prenom'] . "<br>";
    echo "Sexe: " . $empl['sexe'] . "<br>";
    echo "Adresse: " . $empl['adresse'] . "<br>";
    echo "Date de Naissance: " . $empl['dateNaissance'] . "<br>";
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employes</title>
</head>
<body>
    <a href="FormNewEmploye.php"><img src="add.png" alt="Ajouter un employe"></a>
    <a href="FormDelete.php"><img src="delete.jpeg" alt="Supprimer un employe"></a>
    <a href="FormUpdateEmploye.php"><img src="edit.png" alt="Modifier un employe"></a>
</body>
</html>