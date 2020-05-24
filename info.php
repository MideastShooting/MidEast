<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/infostyling.css" rel="stylesheet">
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
  document.getElementById("footer").style.opacity = "0.5";


  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  document.getElementById("main").style.opacity = "1";
  document.getElementById("footer").style.opacity = "1";

}
</script>

    <div id="InfoWrapper">
    
    <div id="titel">
    <h1>Info</h1>
    </div>
        <div id="VragenWrapper">
        <h1></h1>
            <h3>Leeftijd:</h3>
            <p>Er moet volstaan worden aan een minimum leeftijd van 18-jaar oud.</p>
            <h3>Tarieven:</h3>
            <p>Onze tarieven zijn verdeeld per <b>beurten</b>, <b>wapen </b>en <b>lessen.</b></p>
            <div id="tarieven">
                <p><b>Beurten: </b></p>
                <p>Wij hanteren een vast tarief van €30 voor 10 beurten. 1 beurt = 1 uur schiet plezier.</p>
                <p><b>Wapens: </b></p>
                <p>Klik <a href="wapeninfo2.php">hier</a> voor alle wapen info.</p>
                <p><b>Lessen: </b></p>
                <p>Onze lessen zijn verdeeld in 3 categorieën. Bij iedere categorie is een instructeur, wapen & kogels inbegrepen.</p>
                <p>Categorie 1: Beginner. In deze categorie leert u schieten, het beveiligen van en het controleren van pistolen (de FN509 & de FN five-seven MK2) voor een prijs van €300.</p>
                <p>Categorie 2: Advanced. In deze categorie leert u schieten, het beveiligen van en het controleren van machine geweren (de FN P90 & de 3 varianten van de FN Scar) voor een prijs van €400.</p>
                <p>Categorie 3: Expert.   In deze categorie leert u schieten, het beveiligen van het controleren van het zwaar geschut (FN minimi MK3, FN Mag & FN M2HB QCB) voor een prijs van €500.</p>
            </div>
            <h3>Reservaties: </h3>
            <p>Het is mogelijk om <a href="contact.php">telefonisch</a> te reserveren. 
            <h3>Betalingen: </h3>
            <p>Betalingen worden in het complex zelf gedaan. Zowel cash als bancontact is mogelijk. </p>
        </div>

    </div>


    <div id="footer">
    <footer>
      <p>2020 © MidEast ShootingRange.</p>
    </footer>
</div>
</body>
</html>