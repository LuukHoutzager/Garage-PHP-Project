<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-delete-klant1.php</title>
  </head>
  <body>
    <h1>Garage delete klant 1</h1>
    <p>
      Dit formulier zoekt een klant op uit de tabel klanten van database garage om het te kunnen verwijderen.
    </p>
    <form class="zoekenklantid" action="gar-delete-klant2.php" method="post">
         <p class="zoekenklantidtext">  welk klantid wilt u verwijderen? </p>
      <input class="zoekenklantidinvul" type="text"  onfocus="this.value=''"  name="klantidvak" value="Vul hem hier in">  <br />
      <input class="verzendenknop" type="submit">
    </form>
    <div class="footer">
<p>Garage Houtzager ©</p>
</div>
</body>
</html>
