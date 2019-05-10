<?php

if(isset($_POST['submit'])) {
echo "<script>alert('joeeeehoeeee');</script>;";
  $voornaam = test_input($_POST["voornaam"]);
  $tussenvoegsel = test_input($_POST["tussenvoegsel"]);
  $achternaam = test_input($_POST["achternaam"]);
  $adres = test_input($_POST["adres"]);
  $postcode = test_input($_POST["postcode"]);
  $woonplaats = test_input($_POST["woonplaats"]);
  $email = test_input($_POST["email"]);

  $select_cat = test_input($_POST['select_cat']);
  $select_spel_soort = test_input($_POST['select_spel_soort']);
  $select_cat_bordspel = test_input($_POST['select_cat_bordspel']);
  $select_cat_game = test_input($_POST['select_cat_game']);

  try{
      $sql = "INSERT INTO `spel` (`id`, `select_cat`, `select_spel_soort`, `select_cat_bordspel`, `select_cat_game`) VALUES (NULL, ?, ?, ?, ?);";
      $stmt = $db->prepare($sql);
      $stmt->execute(array($select_cat, $select_spel_soort, $select_cat_bordspel, $select_cat_game));
      $lastID = $db->lastInsertId();


  }catch(PDOException $e) {
      echo $e->getMessage();
  }

  try{
      $sql2 = "INSERT INTO `gebruiker` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `woonplaats`, `email`, `spel`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
      $stmt2 = $db->prepare($sql2);
      $stmt2->execute(array($voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $woonplaats, $email, $lastID));
  }catch(PDOException $e){
      echo $e->getMessage();
  }

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }


  }
