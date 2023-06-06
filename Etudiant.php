
<?php
class Etudiant
{
    public function afficherPage()
    {
        echo "<h1>campus IAM</h1>";
        echo "<ul>";
        echo "<li><a href='profil.php'>mon profil</a></li>";
        echo "<li><a href='chambre.php'>chambre</a></li>";
        echo "<li><a href='colocataire.php'>colocataire</a></li>";
        echo "<li><a href='decon.php'>Deconnecter</a></li>";
        echo "<h1>vous etes etudiant a l'IAM</h1>";
        echo "</ul>";
        echo "<div class='container'>";
        echo "<p>Sur cette plateforme, vous pouvez accéder à vos informations étudiantes, communiquer avec d'autres étudiants, trouver des ressources pédagogiques, etc.</p>";
        echo "</div>";
    }
}

$Etudiant = new Etudiant();
$Etudiant->afficherPage();
?>
<style>
    body {
        background-color: white;
        font-family: Arial, sans-serif;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: blue;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }

    .container {
        margin-top: 50px;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-size: 36px;
        text-align: center;
        margin-top: 50px;
    }

    p {
        font-size: 18px;
        line-height: 1.5;
        margin-top: 20px;
    }
</style>

