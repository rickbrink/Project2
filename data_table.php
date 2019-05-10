<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Template</title>

    <!-- Bootstrap CSS CDN -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img class="logo" src="img/logo.png" />
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-bars"></i>
                        <span></span>
                    </button>
                </div>
            </nav>

            <div class="container">
              <?php
              $mysqli = new mysqli('localhost', 'root', 'root', 'Project2') or die(mysqli_error($mysqli));
              $result = $mysqli->query("SELECT * FROM gebruiker INNER JOIN spel ON gebruiker.spel_id = spel.id") or die($mysqli->error);
              //pre_r($result);
              ?>

              <div class="row justify-content-center">
                <table class="table table-striped table-bordered table-hover" id="myTable">
                  <thead>
                    <tr>
                      <th>Naam</th>
                      <th>Adres</th>
                      <th>Postcode</th>
                      <th>Woonplaats</th>
                      <th>Email</th>
                      <th>Categorie</th>
                      <th>Soort</th>
                      <th>Bordspel</th>
                      <th>Game</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()): ?>
                    <tr>
                      <td><?php echo $row['voornaam']; ?> <?php echo $row['tussenvoegsel']; ?> <?php echo $row['achternaam']; ?></td>
                      <td><?php echo $row['adres']; ?></td>
                      <td><?php echo $row['postcode']; ?></td>
                      <td><?php echo $row['woonplaats']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['categorie']; ?></td>
                      <td><?php echo $row['soort']; ?></td>
                      <td><?php echo $row['bordspel']; ?></td>
                      <td><?php echo $row['game']; ?></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>

              </table>
            </div>

          </div>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
        $('#myTable').dataTable();
    </script>
</body>

</html>
