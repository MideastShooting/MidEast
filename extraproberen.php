<!--model-->
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>MidEast</title>
<?php
$host="localhost";
$user="root";
$pw="";
$db="dbmideastshooting";
$link=mysqli_connect($host, $user, $pw, $db) or die ("Fout bij openen");
?>
<link href="../css/menustyle.css" rel="stylesheet">
<script src="../java/menu.js"></script>
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
  document.getElementById("WrapMenu").style.color = "white";
  document.body.style.backgroundColor = "rgba(0,0,0,0.8)";
  document.getElementById("main").style.opacity = "0";
  document.getElementById("footer").style.opacity = "0.5";



  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("WrapMenu").style.color = "black";
  document.body.style.backgroundColor = "white";
  document.getElementById("main").style.opacity = "1";
  document.getElementById("footer").style.opacity = "1";

}
</script>
<div id="WrapMenu">

   
    <div id="ProductWrapper">
    <div id="product">
    <?php
    $sql="select * from cafetaria";
    $resultaat=mysqli_query($link, $sql);
    if($resultaat)
    {
        $i=1;
        while($data=mysqli_fetch_array($resultaat))
        {
           

            echo "<iframe id='iframemenu' src='vbDetail.php?keuze=".$i." frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>".utf8_encode($data['naam'])."</iframe>";
           $i++;
        }
    }
    ?>
    </div> 
</div> 
    <?php
        mysqli_close($link);
    ?>

</div>
</div>

<div id="footer">
    <footer>
      <p>2020 © MidEast ShootingRange.</p>
    </footer>
</div>
</div>
</body>
</html>