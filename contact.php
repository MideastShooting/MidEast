<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/contact.css" rel="stylesheet">
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
  document.getElementById("mail").style.opacity = "0.5";
  document.getElementById("maps").style.opacity = "0.5";
  document.getElementById("footer").style.opacity = "0.5";



  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  document.getElementById("main").style.opacity = "1";
  document.getElementById("mail").style.opacity = "1";
  document.getElementById("maps").style.opacity = "1";
  document.getElementById("footer").style.opacity = "1";


}
</script>


<div id="style">
<table id="contacteren">
    <tr>
        <th id="headerstyle"></th>
        <th id="headertabel">Contactgegevens</th>
    </tr>
    <tr>
        <td>Uitbaters:</td>
        <td>Seth Achten <br> Lancelot Van Der Puijl </td>
    </tr>
    <tr>
        <td>Telefoon: </td>
        <td>+32 496 0357 47</td>
    </tr>
    <tr>
        <td>E-mail:</td>
      		<td>
           <a href="mailto:mideastshootingrange@hotmail.com">
     <img id="mail" src="../images/email.png"  height="25px">   
          </td>
          </tr>
          <tr>
              <td>Locatie:</td>
             
                  <td>3530 Houthalen Helchteren Europarklaan 1014
                  <br>
                  <a href="https://www.google.be/maps/@51.0364623,5.3935559,3a,75y,323.81h,83.87t/data=!3m6!1e1!3m4!1sFh4s2DlIbrmxTbbTfxSKnQ!2e0!7i16384!8i8192">
                  <img id="maps" src="../images/maps.png" height="40px">
              </td>
          </tr>
        
</table>
</div>


<div id="footer">
    <footer>
      <p>2020 © MidEast ShootingRange.</p>
    </footer>  
</div>

</body>
</html>
