<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Project 2</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


</head>
<body class="bg-dark">

  <div class="container box">

    <?php echo $message; ?>
    <form name="form" method="post" action="" id="register_form" enctype="multipart/form-data">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Persoonlijke gegevens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Soort spel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link inactive_tab1" id="list_cat_spel" style="border:1px solid #ccc">Categorie spel</a>
        </li>
      </ul>
      <div class="tab-content" style="margin-top:16px;">
        <div class="tab-pane active" id="login_details">
          <div class="panel panel-default">
            <div class="panel-heading">Login Details</div>
            <div class="panel-body">
              <div class="form-group">
                <label>Enter First Name</label>
                <input type="text" name="voornaam" id="voornaam" class="form-control" />
                <span id="error_voornaam" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Enter Tussenvoegsel</label>
                <input type="text" name="tussenvoegsel" id="tussenvoegsel" class="form-control" />
              </div>
              <div class="form-group">
                <label>Enter Last Name</label>
                <input type="text" name="achternaam" id="achternaam" class="form-control" />
                <span id="error_achternaam" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Enter Adres</label>
                <input type="text" name="adres" id="adres" class="form-control" />
                <span id="error_adres" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Enter Postcode</label>
                <input type="text" name="postcode" id="postcode" class="form-control" />
                <span id="error_postcode" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Enter Woonplaats</label>
                <input type="text" name="woonplaats" id="woonplaats" class="form-control" />
                <span id="error_woonplaats" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Enter Email Address</label>
                <input type="text" name="email" id="email" class="form-control" />
                <span id="error_email" class="text-danger"></span>
              </div>
              <br />
              <div align="center">
                <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Volgende</button>
              </div>
              <br />
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="personal_details">
          <div class="panel panel-default">
            <div class="panel-heading">Welk categorie?</div>
            <div class="panel-body">
              <div class="form-group">
                <label for="sel1">Select list:</label>
                <select class="form-control" id="select_cat" name="select_cat" required>
                  <option value="alleen">Meestal alleen spelen</option>
                  <option value="fysiek">Meestal fysiek samen spelen</option>
                  <option value="online">Meestal online samen spelen</option>
                </select>
                <span id="error_select_cat" class="text-danger"></span>
              </div>
              <br />
              <div align="center">
                <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Terug</button>
                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Volgende</button>
              </div>
              <br />
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="select_spel">
          <div class="panel panel-default">
            <div class="panel-heading">Kies soort spel</div>
            <div class="panel-body">
              <div class="form-group">
                <label>Kies soort spel</label>
                <select class="form-control" id="select_spel_soort" name="select_spel_soort" required>
                  <option value=" "></option>
                  <option value="bord">Bordspellen</option>
                  <option value="computer">(Computer) games</option>
                </select>
                <span id="error_select_spel" class="text-danger"></span>
              </div>
              <br />
              <div align="center">
                <button type="button" name="previous_btn_select_spel" id="previous_btn_select_spel" class="btn btn-default btn-lg">Terug</button>
                <button type="button" name="btn_select_spel" id="btn_select_spel" class="btn btn-info btn-lg">Volgende</button>
              </div>
              <br />
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="contact_categorie_spel">
          <div class="panel panel-default">
            <div class="panel-heading">Categorie spel</div>
            <div class="panel-body">
              <div class="form-group" id="cat_bordspel">
                <label>Kies categorie bordspel</label>
                <select class="form-control" id="select_cat_bordspel" name="select_cat_bordspel" required>
                  <option value="kaartspellen">Kaartspellen</option>
                  <option value="strategisch">Strategische bordspellen</option>
                  <option value="fantasy">Fantasy bordspellen</option>
                  <option value="klassiek">Klassieke gezelschapsspellen</option>
                </select>
                <span id="error_select_cat_spel" class="text-danger"></span>
              </div>
              <div class="form-group" id="cat_game">
                <label>Kies categorie (computer) game</label>
                <select class="form-control" id="select_cat_game" name="select_cat_game" required>
                  <option value="sport">Sportgames</option>
                  <option value="adventure">Adventure</option>
                  <option value="war">Wargames</option>
                  <option value="strategisch">Strategische games</option>
                </select>
                <span id="error_select_cat_spel" class="text-danger"></span>
              </div>
              <br />
              <div align="center">
                <button type="button" name="previous_btn_categorie_spel_details" id="previous_btn_categorie_spel_details" class="btn btn-default btn-lg">Terug</button>
                <button type="submit" id="submit" name="submit" id="btn_cat_spel" class="btn btn-success btn-lg">Opslaan</button>
              </div>
              <br />
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <?php

  if(isset($_POST['submit'])) {
    $voornaam = htmlspecialchars($_POST["voornaam"]);
    $tussenvoegsel = htmlspecialchars($_POST["tussenvoegsel"]);
    $achternaam = htmlspecialchars($_POST["achternaam"]);
    $adres = htmlspecialchars($_POST["adres"]);
    $postcode = htmlspecialchars($_POST["postcode"]);
    $woonplaats = htmlspecialchars($_POST["woonplaats"]);
    $email = htmlspecialchars($_POST["email"]);

    $select_cat = $_POST['select_cat'];
    $select_spel_soort = $_POST['select_spel_soort'];
    $select_cat_bordspel = $_POST['select_cat_bordspel'];
    $select_cat_game = $_POST['select_cat_game'];

    $query_gebruiker = "INSERT INTO tbl_user(voornaam, tussenvoegsel, achternaam, adres, postcode, woonplaats, email)
    VALUES(:voornaam, :tussenvoegsel, :achternaam, :adres, :postcode, :woonplaats, :email)";
    $stmt_gebruiker = $db->prepare($query_gebruiker);
    $data_gebruiker = array("voornaam" => $voornaam, "tussenvoegsel" => $tussenvoegsel, "achternaam" => $achternaam, "adres" => $adres, "postcode" => $postcode, "woonplaats" => $woonplaats, "email" => $email);

    $query_spel = "INSERT INTO tbl_spel(select_cat, select_spel_soort, select_cat_bordspel, select_cat_game)
    VALUES(:select_cat, :select_spel_soort, :select_cat_bordspel, :select_cat_game)";
    $stmt_spel = $db->prepare($query_spel);
    $data_spel = array("select_cat" => $select_cat, "select_spel_soort" => $select_spel_soort, "select_cat_bordspel" => $select_cat_bordspel, "select_cat_game" => $select_cat_game);

    try {
      $stmt_spel->execute($data_spel);
      echo "<script>alert('Spel gegevens toegevoegd!');</script>";
    } catch(PDOException $e) {
      echo $e->getMessage();
    }

    try {
      $stmt_gebruiker->execute($data_gebruiker);
      echo "<script>alert('Gebruiker gegevens toegevoegd!');</script>";
    } catch(PDOException $e) {
      echo $e->getMessage();
    }

  }
  ?>

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript" src="js/script.js"></script>

  <script type="text/javascript">
  $(window).on('load',function(){
    $('.login-register-form').modal('show');
  });
</script>
</body>
