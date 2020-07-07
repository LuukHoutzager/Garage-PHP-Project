<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-delete-auto1.php</title>
  </head>
  <body>
    <h1>Garage delete auto 1</h1>
    <p>
      Dit formulier zoekt een auto op uit de tabel auto van database garage om het te kunnen verwijderen.
    </p>
<form class="zoekenklantid" action="gar-delete-auto2.php" method="post">
       <p class="zoekenklantidtext">welk autokenteken wilt u verwijderen? </p>
        <input class="zoekenklantidinvul" type="text"  onfocus="this.value=''"  name="autokentekenvak" value="Vul hem hier in">  <br />
        <input class="verzendenknop" type="submit">
      </form>
      <div class="footer">
      <p>Garage Houtzager ©</p>
      </div>
      </body>
</html>
