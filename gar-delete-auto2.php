<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Luuk Houtzager">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-delete-auto2.php</title>
  </head>
  <body>
      <h1>Garage delete auto 2</h1>
      <p>
        Op kenteken gegevens zoeken uit de
        tabel auto van de database Garage
        zodat ze verwijderd kunnen worden.
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
        // auto uit het formulier halen -------------------
        $kenteken = $_POST["autokentekenvak"];

        // autogegevens uit de tabel halen ------------------
        require_once "gar-connect.php";

        $kentekens = $conn->prepare("
            select autokenteken,
                   automerk,
                   autotype,
                   autokmstand,
                   kenmerk,
                   klantid
            from   auto
            where  autokenteken = :autokenteken
        ");
        $kentekens->execute(["autokenteken" => $kenteken]);

        // autogegevens laten zien ---------------------------
        foreach($kentekens as $auto)
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
        echo "</table><br />";

        echo "<form action='gar-delete-auto3.php' method='post'>";
        // kenteken mag niet meer gewijzigd worden
        echo "<input type='hidden' name='autokentekenvak' value='$kenteken'>";
        // Waarde 0 doorgeven als er niet gecheckt wordt
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<center><input type='checkbox' name='verwijdervak' value='1'>";
        echo "<center>Verwijder deze auto. <br />";
        echo "<input class='verzendenknop' type='submit'>";
        echo "</form>";
       ?>
  </body>
</html>
