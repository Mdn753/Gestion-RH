<?php
    class Model{
        private $DB;
        public function __construct(){
            define('USER','root');
            define('PASS','');
            $this->DB=new PDO('mysql:host=localhost;dbname=grh',USER,PASS);
        }
        public function allEmployes(){
            $query=$this->DB->prepare('SELECT * FROM employes');
            $query->execute();
            return $query->fetchAll();
        }
        public function allServices(){
            $query=$this->DB->prepare('SELECT * from sevices');
            $query->execute();
            return $query->fetchAll();
        }
        public function addNewEmploye($empl){
            $query = $this->DB->prepare('INSERT INTO employes (nom, prenom, sexe, adresse, dateNaissance, numserv) VALUES (?, ?, ?, ?, ?, ?)');
            $query->execute([$empl[0], $empl[1], $empl[2], $empl[3], $empl[4], $empl[5]]);
        }
        public function deleteEmploye($empl){
            $query=$this->DB->prepare('DELETE FROM employes where nom=? AND prenom=?');
            $query->execute([$empl[0], $empl[1]]);
        }
        public function UpdateEmploye($empl1,$empl2){
            $query=$this->DB->prepare('UPDATE employes SET nom = ?, prenom = ? WHERE nom = ? AND prenom = ?');
            $query->execute([$empl2[0],$empl2[1],$empl1[0],$empl1[1]]);
        }
    }

?>