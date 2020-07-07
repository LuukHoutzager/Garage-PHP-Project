<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Luuk Houtzager">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-delete-auto3.php</title>
  </head>
  <body>
      <h1>Garage delete auto 3</h1>
      <p>
        Op autokenteken gegevens zoeken uit de
        tabel auto van de database Garage
        zodat ze verwijderd kunnen worden.
      </p>
      <?php
        // gegevens uit het formulier halen -------------------
        $autokenteken = $_POST["autokentekenvak"];
        $verwijderen = $_POST["verwijdervak"];

        // klantgegevens verwijderen --------------------------
        if ($verwijderen) {
          require_once "gar-connect.php";

          $sql = $conn->prepare("
            delete from auto
            where   autokenteken = :autokenteken
          ");

          $sql->execute(["autokenteken" => $autokenteken]);

          echo "De gegevens zijn verwijderd";
        }
        else {
          echo "De gegevens zijn niet verwijderd. <br />";
        }
        echo "<a href='gar-menu.php'> Terug naar het menu.";
       ?>
  </body>
</html>
