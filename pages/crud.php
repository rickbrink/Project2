<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"

  <title>Project 2</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" />

</head>
    <body>

        <div class="container">
          <h1>dsadas</h1>
        <?php
            $mysqli = new mysqli('localhost', 'root', 'root', 'Project2') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM gebruiker INNER JOIN spel ON gebruiker.spel_id = spel.id") or die($mysqli->error);
            //pre_r($result);
        ?>

        <div class="row justify-content-center">
            <table class="table table-striped table-bordered table-hover" id="myTable" style="zoom:0.8;">
                <thead>
                    <tr>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
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
                    <td><?php echo $row['voornaam']; ?></td>
                    <td><?php echo $row['tussenvoegsel']; ?></td>
                    <td><?php echo $row['achternaam']; ?></td>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script>
        $('#myTable').dataTable();
        </script>

    </body>
</html>
