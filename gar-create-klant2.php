<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-create-klant2.php</title>
  </head>
  <body>
    <h1>Garage create klant 2</h1>
    <p>
      Een klant toevoegen aan de tabel
      klant in de database garage.
    </p>

    <?php
     // klantgegevens uit het formulier halen ----------------------------------
     $klantid             = NULL; // komt niet uit het formulier (autoincrement)
      $klantnaam          = $_POST["klantnaamvak"];
      $klantadres         = $_POST["klantadresvak"];
      $klantpostcode      = $_POST["klantpostcodevak"];
      $klantplaats        = $_POST["klantplaatsvak"];

     // klantgegevens invoeren in de tabel -------------------------------------
     require_once "gar-connect.php";

     $sql = $conn->prepare("
                            insert into klant values
                            (

                              :klantid, :klantnaam, :klantadres,
                              :klantpostcode, :klantplaats

                            )
                        ");

    $sql->bindParam(":klantid",             $klantid);
    $sql->bindParam(":klantnaam",           $klantnaam);
    $sql->bindParam(":klantadres",          $klantadres);
    $sql->bindParam(":klantpostcode",       $klantpostcode);
    $sql->bindParam(":klantplaats",         $klantplaats);

    $sql-> execute();

      echo "De klant is toegevoegd <br />";
      echo "<a class='terugmenu' href='gar-menu.php'> terug naar het hoofdmenu </a>";
     ?>
</body>
</html>
