<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Luuk Houtzager">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-update-auto2.php</title>
  </head>
  <body>
    <h1>Garage update auto 2</h1>
    <p>
      Dit formulier wordt gebruikt om autogegevens te wijzigen
      in de tabel auto van de database garage.
    </p>
    <?php
        // kenteken uit het formulier halen -------------------------
        $kenteken = $_POST["autokentekenvak"];

        // auto uit de tabel halen -------------------------
        require_once "gar-connect.php";

        $autos = $conn->prepare("
                                  select autokenteken,
                                         automerk,
                                         autotype,
                                         autokmstand,
                                         klantid
                                  from   auto
                                  where  autokenteken = :autokenteken
                              ");
        $autos->execute(["autokenteken" => $kenteken]);

        // klantgegevens in een nieuw formulier laten zien --------------
        echo "<form action='gar-update-auto3.php' method='post'>";
          foreach ($autos as $auto) {

            // klantid mag niet gewijzigd worden
            echo "<div class='createauto'>";
            echo " klantid:" . $auto["klantid"];
            echo " <input type='hidden' name='klantidvak' ";
            echo " value=' " . $auto["klantid"] . "' ";
            echo "> <br />";

            echo "<div class='createautotext'>";
            echo " autokenteken: <input type='text' ";
            echo " name = 'autokentekenvak' ";
            echo " value=' " . $auto["autokenteken"] . "' ";
            echo "> <br />";

            echo "<div class='createautotext'>";
            echo " automerk: <input type='text' ";
            echo " name = 'automerkvak' ";
            echo " value=' " . $auto["automerk"] . "' ";
            echo "> <br />";

            echo "<div class='createautotext'>";
            echo " autotype: <input type='text' ";
            echo " name = 'autotypevak' ";
            echo " value=' " . $auto["autotype"] . "' ";
            echo "> <br />";

            echo "<div class='createautotext'>";
            echo " autokmstand: <input type='text' ";
            echo " name = 'autokmstandvak' ";
            echo " value=' " . $auto["autokmstand"] . "' ";
            echo "> <br />";
          }

          echo "<input  class='verzendenknop' type='submit'>";
          echo "</form>";
          echo "</div>";

     ?>
     <div class="footer">
   <p>Garage Houtzager ©</p>
   </div>
   </body>
</html>
