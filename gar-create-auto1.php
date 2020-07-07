<!DOCTYPE html>
<html lang="en" dir="ltr"
  <head>
    <meta charset="author" content="Luuk Houtzager">
    <meta name="UTF-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-create-auto1.php</title>
  </head>
  <body>
    <h1>Garage create auto 1</h1>
    <p>
      Dit formulier wordt gebruikt om auto in te voeren.
    </p>
    <form class="createauto" action="gar-create-auto2.php" method="post">
        Autokenteken       <input class="createautotext" type="text"  name="autokentekenvak" required=""> <br />
        Automerk           <input class="createautotext" type="text"  name="automerkvak"required="">     <br />
        Autotype           <input class="createautotext" type= "text"  name="autotypevak"required="">     <br />
        Autokmstand        <input class="createautotext" type="text"  name="autokmstandvak"required="">  <br />
        Autokenmerk        <input class="createautotext" type="text"  name="autokenmerkvak"required="">  <br />
        Klantid            <input class="createautotext" type="text"  name="klantidvak"required="">      <br />
        <input  class="verzendenknop" type="submit">
      </form>
      <div class="footer">
  <p>Garage Houtzager ©</p>
</div>
  </body>
</html>
