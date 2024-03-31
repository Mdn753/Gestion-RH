<?php
require 'model.class.php';

class ctrl {
    private $m;

    public function __construct() {
        $this->m = new Model();
    }

    // public function addNewEmployeAction() {
    //     if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['sexe']) && isset($_GET['adresse']) && isset($_GET['dateNaissance']) && isset($_GET['numserv'])) {
    //         $empl = array($_GET['nom'], $_GET['prenom'], $_GET['sexe'], $_GET['adresse'], $_GET['dateNaissance'], $_GET['numserv']);
    //         $this->m->addNewEmploye($empl);
    //         header("Location: ctrl.class.php?action=allEmployes");
    //    }
    // }

    public function addNewEmployeAction() {        
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $empl = array(
               $_POST['nom'],
               $_POST['prenom'],
               $_POST['sexe'],
               $_POST['adresse'],
               $_POST['dateNaissance'],
               $_POST['numserv']
           );
           $this->m->addNewEmploye($empl);
    
           header("Location: ctrl.class.php?action=allEmployes");
           exit();
       }
    }
    
    

    public function allEmployesAction() {
        $employes = $this->m->allEmployes();
        require 'allEmployes.php';
    }

    public function deleteEmployeAction(){
        $empl=array(
            $_POST['nom'],
            $_POST['prenom']
        );
        $this->m->deleteEmploye($empl);
        header("Location: ctrl.class.php?action=allEmployes");
        exit();
        
    }

    public function UpdateEmployeAction(){
        //if(isset($_GET['nom_ancien'],$_GET['nouveau_nom'],$_GET['prenom_ancien'],$_GET['nouveau_prenom'])){
            $empl1=array($_POST['nom_ancien'], $_POST['prenom_ancien']);
            $empl2=array($_POST['nouveau_nom'], $_POST['nouveau_prenom']);
            $this->m->UpdateEmploye($empl1,$empl2);
            header("Location: ctrl.class.php?action=allEmployes");
            exit();
        
    }


    public function action($action) { 
        switch($action) {
            case "allEmployes":
                $this->allEmployesAction();
                break;
            case "addNewEmploye":
                $this->addNewEmployeAction();
                break;
            case "deleteEmploye":
                $this->deleteEmployeAction();
                break;
            case "UpdateEmploye":
                $this->UpdateEmployeAction();
                break;
        }
    }
    
}
$ctrl = new ctrl();
$action = isset($_GET['action']) ? $_GET['action'] : 'allEmployes'; // Default to allEmployes if action is not specified
//echo "Action: " . $action;
$ctrl->action($action);
?>
