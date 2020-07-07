<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-search-auto2.php</title>
  </head>
  <body>
    <h1>Garage zoek op auto 2</h1>
    <p>
      Op autokenteken gegevens zoeken uit de tabel auto van database garage.
    </p>
    <table class="tabellayout">
      <thead>
        <tr>
          <th>Kenteken</th>
          <th>Automerk</th>
          <th>Autotype</th>
          <th>Autokmstand</th>
          <th>Klantid</th>
        </tr>
      </thead>
    <?php
          // klantid uit het formulier halen -----------------------------------
          $autokenteken = $_POST["autokentekenvak"];

          // klantid uit de tabel halen ----------------------------------------
          require_once "gar-connect.php";

          $autos = $conn->prepare ("
                                        select  autokenteken,
                                                automerk,
                                                autotype,
                                                autokmstand,
                                                klantid
                                        from    auto
                                        where autokenteken = :autokenteken
                                    ");

          $autos->execute(["autokenteken" => $autokenteken]);

          // klantgegevens laten -----------------------------------------------
        

          foreach($autos as $auto)
          {

            echo "<tbody>";
            echo "<tr>";
                        echo "<td rowspan='7'>" .            $auto["autokenteken"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td rowspan='7'>" .            $auto["automerk"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td rowspan='7'>" .            $auto["autotype"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td rowspan='7'>" .            $auto["autokmstand"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td rowspan='7'>" .            $auto["klantid"] . "</td>";
                        echo "</tr>";
                        echo "</body>";
          }

          echo "<a href='gar-menu.php'><p class='terugmenu'> terug naar hoofdmenu </a>";
            ?>
          </table>
          <div class="footer">
       <p>Garage Houtzager ©</p>
       </div>
  </body>
</html>
