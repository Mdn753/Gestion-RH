<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employes</title>
</head>
<body>
    <h1>Liste des employes</h1>
    <?php
        require 'connexion.php';

        $sql = "SELECT * FROM employes";
        $result = mysqli_query($connect,$sql);

        if (mysqli_num_rows($result)>0){
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)){
                echo "<li>{$row['nom']} {$row['prenom']}</li>";
            }
            echo "</ul>";
        }else{
            echo "aucun employe trouve";
        }
        echo "<a href='formAddEmpl.php'><img src='telecharge.png' alt='Ajouter un employe'></a>";
        echo "<a href='delEmpl.php'><img src='delete.jpeg' alt='Supprimer un employe'></a>";
        echo "<a href='UpdateEmpl.php'><img src='edit.png' alt='Modifier un employe'></a>";
    ?>
</body>
</html>