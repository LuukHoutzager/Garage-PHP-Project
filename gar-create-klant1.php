<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-create-klant1.php</title>
  </head>
  <body>
    <h1>Garage create klant 1</h1>
    <p>
      Dit formulier wordt gebruikt om klantgegevens in te voeren.
    </p>
    <form class="createauto" action="gar-create-klant2.php" method="post">
        klantnaam:          <input class="createautotext" type="text"  name="klantnaamvak" required="">    <br />
        klantadres:         <input class="createautotext" type="text"  name="klantadresvak" required="">   <br />
        klantpostcode:      <input class="createautotext" type="text"  name="klantpostcodevak" required=""><br />
        klantplaats:        <input class="createautotext" type="text"  name="klantplaatsvak" required="">  <br />
        <input class="verzendenknop" type="submit">
      </form>
      <div class="footer">
   <p>Garage Houtzager ©</p>
 </div>
  </body>
</html>
