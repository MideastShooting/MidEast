<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/home.css" rel="stylesheet">
    <title>MidEast</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <a href="index.php">Home</a>
        <a href="info.php">Info</a>
        <a href="contact.php">Contact</a>
        <a href="extraproberen.php">Menu</a>
        <a href="wapeninfo3.php">Wapen info</a>
        <a href="gebruikersinfo.php">Gebruikers info</a>
      </div>


      <div id="main">
    <div id="bovenbalk">
              
        <img src="../images/Logo2.PNG" alt="logo" id="logo">

                <div id="styling">
         <span id="menuknop" onclick="openNav()">&#9776; menu</span>
                </div>
    </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.8)";
  document.getElementById("main").style.opacity = "0";
  document.getElementById("foto1").style.opacity = "0.5";
  document.getElementById("foto2").style.opacity = "0.5";
  document.getElementById("footer").style.opacity = "0.5";
  document.getElementById("opening").style.opacity = "0.5";


  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  document.getElementById("main").style.opacity = "1";
  document.getElementById("foto1").style.opacity = "1";
  document.getElementById("foto2").style.opacity = "1";
  document.getElementById("footer").style.opacity = "1";
  document.getElementById("opening").style.opacity = "1";

}
</script>

<div id="wrap">


    <div id="mid">
    <div id="initiatie">
      <img id="foto1"src="../images/schietini.jpg" alt="initiate">
    1 x per kalenderjaar mag elke Europeaan in België met vuurwapens schieten in een erkende schietclub ter kennismaking & promotie van de schietsport zonder licentie! Je kan deze schietsessie alleen doen, met je partner, met je familie of je maakt er een vriendenuitje van of verras een vrijgezel, jarige, papa of mama met deze acitviteit!
    </div>
    <div id="schietles">
      <img id="foto2" src="../images/schietles.jpg" alt="">
    Je kan bij ons ook schietlessen volgen op 3 verschillende niveaus: starter, intermediate en advanced. je leert schieten met verschillende wapens van handgeweer tot light machinegeweer onder begeleiding van één van onze gelicenseerde lesgevers.
    </div>

    <div id="opening">
      Openingsuren:
      <table>
        <tr>
          <th>maandag</th>
          <th>dinsdag</th>
          <th>woensdag</th>
          <th>donderdag</th>
          <th>vrijdag</th>
          <th>zaterdag</th>
          <th>zondag</th>
        </tr>
        <tr>
          <td>gesloten</td>
          <td>16:00 - 22:00</td>
          <td>16:00 - 22:00</td>
          <td>16:00 - 22:00</td>
          <td>16:00 - 22:00</td>
          <td>10:00 - 00:00</td>
          <td>10:00 - 22:00</td>
        </tr>

      </table>
    </div>
   
   <div id="footer">
    <footer>
      <p>2020 © MidEast ShootingRange.</p>
    </footer>
</div>
</div>
</div>
</body>
</html>
