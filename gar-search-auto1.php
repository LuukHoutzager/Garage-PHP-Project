<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-search-auto1.php</title>
  </head>
  <body>
    <h1>Garage zoek op autokenteken 1</h1>
    <p>
      Dit formulier zoekt een autokenteken op uit de table van database garage.
    </p>
    <form class="zoekenklantid" action="gar-search-auto2.php" method="post">
        <p class="zoekenklantidtext">Welk autokenteken zoekt u?</p>
        <input class="zoekenklantidinvul" type="text"  onfocus="this.value=''" name="autokentekenvak" value="Vul hem hier in"> <br/>
        <input class="verzendenknop" type="submit">
      </form>
      <div class="footer">
  <p>Garage Houtzager ©</p>
</div>
  </body>
</html>
