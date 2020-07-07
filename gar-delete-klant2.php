<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Luuk Houtzager">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-delete-klant2.php</title>
  </head>
  <body>
      <h1>Garage delete klant 2</h1>
      <p>
        Op klantid gegevens zoeken uit de
        tabel klanten van de database Garage
        zodat ze verwijderd kunnen worden.
      </p>
      <table class="tabellayout">
        <thead>
          <tr>
            <th>Klantid</th>
            <th>Klantnaam</th>
            <th>Klantadres</th>
            <th>Klantpostcode</th>
            <th>Klantplaats</th>
          </tr>
        </thead>
      <?php
        // klantid uit het formulier halen -------------------
        $klantid          =       $_POST["klantidvak"];

        // klantgegevens uit de tabel halen ------------------
        require_once "gar-connect.php";

        $klanten = $conn->prepare("
            select klantid,
                   klantnaam,
                   klantadres,
                   klantpostcode,
                   klantplaats
            from   klant
            where  klantid = :klantid
        ");

        $klanten->execute(["klantid" => $klantid]);

        // klantgegevens laten zien ---------------------------

        
        foreach($klanten as $klant)
        {
          echo "<tbody>";
          echo "<tr>";
                      echo "<td rowspan='7'>" .            $klant["klantid"] . "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<td rowspan='7'>" .            $klant["klantnaam"] . "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<td rowspan='7'>" .            $klant["klantadres"] . "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<td rowspan='7'>" .            $klant["klantpostcode"] . "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<td rowspan='7'>" .            $klant["klantplaats"] . "</td>";
                      echo "</tr>";
                      echo "</tbody>";
        }



        echo "<form action='gar-delete-klant3.php' method='post'>";
        // klantid mag niet meer gewijzigd worden

        echo "<input type='hidden' name='klantidvak' value='$klantid'>";
        // Waarde 0 doorgeven als er niet gecheckt wordt

        echo "</table><br />";
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<center><input type='checkbox' name='verwijdervak' value='1'>";
        echo "<center>Verwijder deze klant. <br />";
        echo "<input class='verzendenknop' type='submit'>";
        echo "</form>";
       ?>
  </body>
</html>
