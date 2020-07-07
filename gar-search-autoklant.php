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
      Dit zijn alle auto's van de klanten uit de
      tabel auto van de database garage.
    </p>
    <?php
    // tabel uitlezen en netjes afdrukken --------------------------------------
    require_once "gar-connect.php";

    $autos = $conn->prepare ("
                                  select  autokenteken,
                                          automerk,
                                          autotype,
                                          autokmstand,
                                          klantnaam
                                  from    auto, klant
                                  where auto.klantid = klantid
                              ");

   $autos->execute();

   echo "<table>";
   foreach($autos as $auto)
   {

     echo "<tr>";
                 echo "<td>" .            $auto["autokenteken"] . "</td>";
                 echo "<td>" .            $auto["automerk"] . "</td>";
                 echo "<td>" .            $auto["autotype"] . "</td>";
                 echo "<td>" .            $auto["autokmstand"] . "</td>";
                 echo "<td>" .            $auto["klantnaam"] . "</td>";
                 echo "</tr>";
   }
   echo "</table>";
   echo "<a href='gar-menu.php'> terug naar hoofdmenu </a>";
     ?>
  </body>
</html>
