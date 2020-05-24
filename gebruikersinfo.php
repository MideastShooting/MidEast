<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/gebruikersinfostyling.css" rel="stylesheet">
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
  document.getElementById("voetstappen").style.opacity = "0.5";
  document.getElementById("voetstappen1").style.opacity = "0.5";
  document.getElementById("voetstappen2").style.opacity = "0.5";
  document.getElementById("voetstappen3").style.opacity = "0.5";
  document.getElementById("fotologin").style.opacity = "0.5";
  document.getElementById("fotoregistratie").style.opacity = "0.5";
  document.getElementById("fotokeuze").style.opacity = "0.5";
  document.getElementById("fotowapen").style.opacity = "0.5";
  document.getElementById("fotodrank").style.opacity = "0.5";
  document.getElementById("footer").style.opacity = "0.5";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  document.getElementById("main").style.opacity = "1";
  document.getElementById("voetstappen").style.opacity = "1";
  document.getElementById("voetstappen1").style.opacity = "1";
  document.getElementById("voetstappen2").style.opacity = "1";
  document.getElementById("voetstappen3").style.opacity = "1";
  document.getElementById("fotologin").style.opacity = "1";
  document.getElementById("fotoregistratie").style.opacity = "1";
  document.getElementById("fotokeuze").style.opacity = "1";
  document.getElementById("fotowapen").style.opacity = "1";
  document.getElementById("fotodrank").style.opacity = "1";
  document.getElementById("footer").style.opacity = "1";
}
</script>

        <div id="omkadering">
    <div id="titel">
    <h1>Uitleg registratie + bestellingen</h1>
    </div>
    
    <div id="Stap1">
        <h2><b>Stap 1: </b></h2>
        <img id="voetstappen" src="../images/voetstappen.png" >
        <h3><b>Inloggen: </b></h3>
<div id="tekst1">
        <p>Bij het binnenkomen van de vestiging zal u enkele machines zien staan. Hier zal u zich moeten inloggen voor dat u het pand verder mag betreden.</p>
        <p>Als u nog geen account hebt, kan u zich hier ook makkelijk registreren.</p>
</div>
        <img id="fotologin" src="../images/login.png">
        <img id="fotoregistratie" src="../images/registratie.png">
    </div>

    <div id="Stap2">
        <h2><b>Stap 2: </b></h2>
        <img id="voetstappen1" src="../images/voetstappen.png" >
        <h3><b>Een keuze maken: </b></h3>
<div id="tekst2">
        <p>Eenmaal u bent ingelogd krijgt u een keuze scherm tussen "Bestel dranken" en "Reserveren".
           Hier dient u eerst op "Reserveren" te klikken. Zo kan u een baan + een wapen selecteren.
           Eenmaal op de baan gearriveerd kan u dranken bestellen die naar uw baan gebracht zullen worden.
           LET OP: Het benuttigen van alcoholische dranken tijdens het beoefenen van de sport is verboden!</p>
</div>
           <img id="fotokeuze" src="../images/Uitleg1.png">
          
     
    </div>

    <div id="Stap3">
        <h2><b>Stap 3: </b></h2>
        <img id="voetstappen2" src="../images/voetstappen.png">
        <h3><b>Het kiezen van een baan + wapen: </b></h3>
<div id="tekst3">
        <p>In onderstaand scherm ziet u hoe u een baan + het gewenste wapen kan kiezen. 
           Eenmaal u uw gewenste wapen gekozen hebt wordt er u een baan toegewezen. </p>
</div>
           <img id="fotowapen" src="../images/wapenuitleg.png">
    </div>

    <div id="Stap4">
        <h2><b>Stap 4: </b></h2>
        <img id="voetstappen3" src="../images/voetstappen.png" >
        <h3><b>Het bestellen van dranken: </b></h3>
<div id="tekst4">
        <p>Eenmaal op de aan utoegewezen baan gearriveerd zal u een machine zien staan waar u uw gewenste drank kunt bestellen. 
           Heel simpel: kies uw gewenste drank, voeg het toe aan uw winkelmandje en bestel. De drankjes zullen naar u gebracht worden. </p>
</div>
           <img id="fotodrank" src="../images/drankuitleg.png">
    </div>
    
</div>

<div id="footer">
    <footer>
      <p>2020 © MidEast ShootingRange.</p>
    </footer>
</div>
</body>
</html>
