<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-update-klant3.php</title>
  </head>
  <body>
    <h1>Garage update klant 3</h1>
    <p>
      Dit formulier wordt gebruikt om klantgegevens te wijzigen
      in de tabel klant van de database garage.
    </p>
    <?php
        // klantid uit het formulier halen -------------------------------------
        $klantid        = $_POST["klantidvak"];
        $klantnaam      = $_POST["klantnaamvak"];
        $klantadres     = $_POST["klantadresvak"];
        $klantpostcode  = $_POST["klantpostcodevak"];
        $klantplaats    = $_POST["klantplaatsvak"];

         // updaten klantgegevens ----------------------------------------------
         require_once 'gar-connect.php';

         $sql = $conn->prepare("

         update klant set       klantnaam     =     :klantnaam,
                                klantadres    =     :klantadres,
                                klantpostcode =     :klantpostcode,
                                klantplaats   =     :klantplaats
                                where klantid =     :klantid
         ");
         $sql->execute([

          "klantid"             =>    $klantid,
          "klantnaam"           =>    $klantnaam,
          "klantadres"          =>    $klantadres,
          "klantpostcode"       =>    $klantpostcode,
          "klantplaats"         =>    $klantplaats
        ]);
        echo "De klant is gewijzigd. <br />";
        echo "<a class='terugmenu' href='gar-menu.php'> terug naar het menu </a>";
     ?>
     <div class="footer">
     <p>Garage Houtzager ©</p>
     </div>
     </body>
</html>
