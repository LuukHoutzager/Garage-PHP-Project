<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-read-auto</title>
  </head>
  <body>
    <h1>Garage read auto</h1>
    <p>
      Dit zijn alle gegevens uit de
      tabel auto van de database garage.
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
    // tabel uitlezen en netjes afdrukken --------------------------------------
    require_once "gar-connect.php";

    $autos = $conn->prepare ("
                                  select  autokenteken,
                                          automerk,
                                          autotype,
                                          autokmstand,
                                          klantid
                                  from    auto
                              ");

   $autos->execute();


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
