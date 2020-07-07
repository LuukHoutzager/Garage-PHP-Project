<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-update-klant1.php</title>
  </head>
  <body>
    <h1>Garage update klant 1</h1>
    <p>
      Dit formulier wordt gebruikt om klantgegevens te wijzigen.
    </p>
    <form class="zoekenklantid" action="gar-update-klant2.php" method="post">
         <p class="zoekenklantidtext">Welk klantid wilt u wijzigen?</p>
        <input class="zoekenklantidinvul" type="text"  onfocus="this.value=''" name="klantidvak" value="Vul hem hier in"> <br/>
        <input class="verzendenknop" type="submit">
      </form>
      <div class="footer">
  <p>Garage Houtzager ©</p>
</div>
  </body>
</html>
