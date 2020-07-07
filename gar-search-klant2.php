<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-search-klant2.php</title>
  </head>
  <body>
    <h1>Garage zoek op klantid 2</h1>
    <p>
      Op klantid gegevens zoeken uit de tabel klanten van database garage.
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
          // klantid uit het formulier halen -----------------------------------
          $klantid = $_POST["klantidvak"];

          // klantid uit de tabel halen ----------------------------------------
          require_once "gar-connect.php";

          $klanten = $conn->prepare("
                                        select    klantid,
                                                  klantnaam,
                                                  klantadres,
                                                  klantpostcode,
                                                  klantplaats
                                        from      klant
                                        where     klantid = :klantid
                                    ");
          $klanten->execute(["klantid" => $klantid]);

          // klantgegevens laten -----------------------------------------------
      

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

          echo "<a href='gar-menu.php'><p class='terugmenu'> terug naar hoofdmenu </a>";
            ?>
              </table>
              <div class="footer">
       <p>Garage Houtzager ©</p>
       </div>
  </body>
</html>
