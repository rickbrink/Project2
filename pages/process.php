<?php

session_start();

$mysqli = new  mysqli('localhost', 'root', 'root', 'Project2') or die ( mysqli_error($mysqli));

$id = 0;
$update = $voornaam = $tussenvoegsel = $achternaam = $adres = $postcode = $woonplaats = $email = '';

if (isset($_POST['save'])) {
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $email = $_POST['email'];

    $mysqli->query("INSERT INTO gebruiker (voornaam, tussenvoegsel, achternaam, adres, postcode, woonplaats, email) VALUES('$voornaam', '$tussenvoegsel', '$achternaam', '$adres', '$postcode', '$woonplaats', '$email')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: crud.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM gebruiker WHERE id = $id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: crud.php");
    die();
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM gebruiker WHERE id=$id") or die($mysqli->error());
    if (count($result)==1) {
        $row = $result->fetch_array();
        $voornaam = $row['voornaam'];
        $tussenvoegsel = $row['tussenvoegsel'];
        $achternaam = $row['achternaam'];
        $adres = $row['adres'];
        $postcode = $row['postcode'];
        $woonplaats = $row['woonplaats'];
        $email = $row['email'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $email = $_POST['email'];

    $mysqli->query("UPDATE gebruiker SET voornaam='$voornaam', tussenvoegsel='$tussenvoegsel',achternaam='$achternaam',adres='$adres',postcode='$postcode',woonplaats='$woonplaats',email='$email' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: crud.php');
}
