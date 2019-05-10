<?php
//dit start de sessie met gegevens en die wordt afgesloten als je pagina afsluit zo blijf je ingelogd
    session_start();
    //je koppelt de bestanden die nodig zijn voor de pagina
    include_once("DBconfig.php");
    include_once("header.php");
    // je haalt de pagina op waar de gebruiker opzat als die gelijk is haal je pagina op
    // Gegevens uit een form, creert een array(keys = naam van input & value = input van gebruiker

?>
