<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Luuk Houtzager">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-update-auto3.php</title>
  </head>
  <body>
    <h1>Garage update auto 3</h1>
    <p>
      autogegevens wijzigen in de tabel
      auto van de database garage.
    </p>
    <?php
      // autogegevens uit het formulier halen -----------------
      $autokenteken       = $_POST["autokentekenvak"];
      $automerk           = $_POST["automerkvak"];
      $autotype           = $_POST["autotypevak"];
      $autokmstand        = $_POST["autokmstandvak"];
      $klantid            = $_POST["klantidvak"];

      // updaten autogegevens ---------------------------------
      require_once "gar-connect.php";

      $sql = $conn->prepare("
          update auto set     autokenteken = :autokenteken,
                              automerk = :automerk,
                              autotype = :autotype,
                              autokmstand = :autokmstand
                              where   klantid = :klantid
      ");

      $sql->execute([
        "autokenteken"    => $autokenteken,
        "automerk"        => $automerk,
        "autotype"        => $autotype,
        "autokmstand"     => $autokmstand,
        "klantid"         => $klantid
      ]);

          echo "De auto is gewijzigd. <br />";
          echo "<a class='terugmenu' href='gar-menu.php'> terug naar het menu </a>";
     ?>
     <div class="footer">
     <p>Garage Houtzager ©</p>
     </div>
     </body>
</html>
