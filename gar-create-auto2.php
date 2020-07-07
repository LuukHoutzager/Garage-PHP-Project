<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Luuk Houtzager">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-create-auto2.php</title>
  </head>
  <body>
    <h1>Garage create auto 2</h1>
    <p>
      Een auto toevoegen aan de tabel
      auto in de database garage.
    </p>
    <?php
      // klantgegevens uit het formulier halen ------------------------
      $autokenteken = $_POST["autokentekenvak"];
      $automerk = $_POST["automerkvak"];
      $autotype = $_POST["autotypevak"];
      $autokmstand = $_POST["autokmstandvak"];
      $autokenmerk = $_POST["autokenmerkvak"];
      $klantid = $_POST["klantidvak"];

      // klantgegevens invoeren in de tabel ---------------------------
      require_once "gar-connect.php";

      $sql = $conn->prepare("
                              insert into auto values
                              (
                                  :autokenteken, :automerk,
                                  :autotype, :autokmstand, :kenmerk, :klantid
                                )
                          ");
      // manier 1 -----------------------------------------------------
      $sql->bindParam(":autokenteken", $autokenteken);
      $sql->bindParam(":automerk", $automerk);
      $sql->bindParam(":autotype", $autotype);
      $sql->bindParam(":autokmstand", $autokmstand);
      $sql->bindParam(":kenmerk", $autokenmerk);
      $sql->bindParam(":klantid", $klantid);

      $sql->execute();


      echo "<p class='echo1'>De auto is toegevoegd <br />";
      echo "<a  class='terugmenu' href='gar-menu.php'> terug naar het menu </a>";
     ?>
  </body>
</html>
