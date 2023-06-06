<?php

interface iGestion {
    public function Affichage();
}

class Batiment implements iGestion {
    protected $id;
    protected $nom;
    protected $descripe;
    protected $nbchambre;

    public function __construct($row = null){
        if($row != null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
       
        $this->nom = $row["nom"];
        $this->descripe = $row["descripe"];
        $this->nbchambre = $row["nbchambre"];   
    }

    public function Affichage(){
        try {
            $dsn = "mysql:host=mysql-barkai.alwaysdata.net;dbname=barkai_ibra";
            $username = "barkai_ibra";
            $password = "passer1234";

            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           
            $query = "SELECT nom, descripe, nbchambre FROM batiment WHERE id = :id";
            $statement = $conn->prepare($query);
            $statement->bindParam(':id', $this->id);
            $statement->execute();

           
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if ($result) {
            $this->hydrate($result);

                
                echo "Nom : " . $this->nom . "<br>";
                echo "Description : " . $this->descripe . "<br>";
                echo "Nombre de chambres : " . $this->nbchambre . "<br>";
            } else {
                echo "Bâtiment non trouvé dans la base de données.";
            }

        } catch(PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }

    // Getters
    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getDescripe(){
        return $this->descripe;
    }

    public function getNbChambre(){
        return $this->nbchambre;
    }

    // Setters
    public function setId($id){
        $this->id = $id;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setDescripe($descripe){
        $this->descripe = $descripe;
    }

    public function setNbChambre($nbchambre){
        $this->nbchambre = $nbchambre;
    }
}

$batiment = new Batiment();
$batiment->setId(1);
$batiment->setNom("Bâtiment A");
$batiment->setDescripe("Description du bâtiment A");
$batiment->setNbChambre(10);

$batimentB = new Batiment();
$batimentB->setId(2);
$batimentB->setNom("Bâtiment B");
$batimentB->setDescripe("Description du bâtiment B");
$batimentB->setNbChambre(20);
$batimentC = new Batiment();
$batimentC->setId(3);
$batimentC->setNom("Bâtiment C");
$batimentC->setDescripe("Description du bâtiment C");
$batimentC->setNbChambre(15);

$batiment->Affichage();
$batimentB->Affichage();
$batimentC->Affichage();
