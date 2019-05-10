<?php
    DEFINE("DB_USER", "root");
    DEFINE("DB_PASS", "root");
    //een try catch block probeert verbinding te maken en vangt die anders op
    //er wordt hier verbinding gemaakt met de databse
    try{
        $db = new PDO(
            "mysql:host=localhost;dbname=Project2",
            DB_USER,DB_PASS);
        $db->setAttribute(
            PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
