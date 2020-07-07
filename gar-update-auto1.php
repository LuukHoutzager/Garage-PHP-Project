<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Luuk Houtzager">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-update-auto1.php</title>
  </head>
  <body>
    <h1>Garage update auto 1</h1>
    <p>
      Dit formulier wordt gebruikt om autogegevens te wijzigen.
    </p>
    <form class="zoekenklantid" action="gar-update-auto2.php" method="post">
       <p class="zoekenklantidtext">Welk kenteken wilt u wijzigen?</p>
      <input class="zoekenklantidinvul" type="text"  onfocus="this.value=''"  name="autokentekenvak" value="Vul hem hier in"><br />
      <input class="verzendenknop" type="submit">
    </form>
    <div class="footer">
<p>Garage Houtzager ©</p>
</div>
  </body>
</html>
