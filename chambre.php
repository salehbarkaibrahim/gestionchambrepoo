<?php
include('connexion.php');

class Chambre {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function getChambres($type = null) {
    if(isset($_POST['chercher']) && isset($_POST['type'])) {
      $type = htmlspecialchars($_POST['type']);

  
      $sql = "SELECT * FROM barkai_ibra.chambre WHERE type = '$type' ORDER BY id_chambre";
    } else {
      
      $sql = "SELECT * FROM barkai_ibra.chambre ORDER BY id_chambre";
    }

    $liste = $this->db->query($sql)->fetchAll();

    return $liste;
  }
}

class Utilisateur {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function getUtilisateurs($recherche = null, $type = null) {
 {
      $sql = "SELECT * FROM barkai_ibra.utilisateur ORDER BY id";
    }
    $liste = $this->db->query($sql)->fetchAll();

    return $liste;
  }
}

$chambre = new Chambre($db);
$listeChambres = $chambre->getChambres();

$utilisateur = new Utilisateur($db);
$listeUtilisateurs = $utilisateur->getUtilisateurs();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
    include('connexion.php');
    $sqlQuery = 'SELECT * FROM utilisateur';
    $AdSte = $db->prepare($sqlQuery);
    $AdSte->execute();
    $tabAss = $AdSte->fetchAll();
    $taille = count($tabAss);
  ?>
</head>
<body>
  
</body>
      
</html>