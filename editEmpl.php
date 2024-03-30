<?php
    require 'connexion.php';
    
        //if (isset($_POST['nom ancien'],$_POST['nouveau nom'],$_POST['prenom ancien'],$_POST['nouveau prenom']))
        {
            $ancien_nom=$_POST['nom_ancien'];
            $nouveau_nom=$_POST['nouveau_nom'];
            $ancien_prenom=$_POST['prenom_ancien'];
            $nouveau_prenom=$_POST['nouveau_prenom'];
            $sql= "UPDATE employes SET nom = '$nouveau_nom', prenom = '$nouveau_prenom' WHERE nom = '$ancien_nom' AND prenom = '$ancien_prenom'";
            $rs=mysqli_query($connect,$sql);

            if ($rs){
                echo "update reussi";
            }else{
                echo "failed";
            }
        }
    
?>