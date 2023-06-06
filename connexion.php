<?php
    try
    {
        $db = new PDO('mysql:host=mysql-barkai.alwaysdata.net;dbname=barkai_ibra;charset=utf8', 'barkai_ibra', 'passer1234');
    }
    catch (Exception $e)
    {
            die('Erreur de con : '. $e->getMessage());
    }
    
?>