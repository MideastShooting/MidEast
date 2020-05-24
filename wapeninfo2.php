<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/wapeninfostyle.css" rel="stylesheet">  
    <title>MidEast</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <a href="index.php">Home</a>
        <a href="info.php">Info</a>
        <a href="contact.php">Contact</a>
        <a href="extraproberen.php">Menu</a>
        <a href="wapeninfo2.php">Wapen info</a>
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

<script type="text/javascript">
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  regel1.style.display="none";
  regel2.style.display="none";
  regel3.style.display="none";
  regel4.style.display="none";
  regel5.style.display="none";
  regel6.style.display="none";
  regel7.style.display="none";
  regel8.style.display="none";
  regel9.style.display="none";
  if(slideIndex<=1)
	  regel1.style.display="block";
  else if(slideIndex<=2)
      regel2.style.display="block";
  else if(slideIndex<=3)
      regel3.style.display="block";
  else if(slideIndex<=4)
      regel4.style.display="block";
  else if(slideIndex<=5)
      regel5.style.display="block";
  else if(slideIndex<=6)
      regel6.style.display="block";
  else if(slideIndex<=7)
      regel7.style.display="block";
  else if(slideIndex<=8)
	  regel8.style.display="block";
  else
	  regel9.style.display="block";
}
</script>

<div id="WrapperFotos">
        <div class="row">
            <div class="column">
                <img src="../wapens/509.png" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="509" style="width:100%">
            </div>
            <div class="column">
                <img src="../wapens/five-sevenMK2foto.png" onclick="openModal();currentSlide(2)" class="hover-shadow" alt="five-seven" style="width:100%">
            </div>
            <div class="column">
                <img src="../wapens/P90foto.png" onclick="openModal();currentSlide(3)" class="hover-shadow" alt="P90" style="width:100%">
            </div>
        </div>


        <div class="row2">
            <div class="column2">
                <img src="../wapens/ScarSubcompactCarbinefoto.png" onclick="openModal();currentSlide(4)" class="hover-shadow" alt="509" style="width:100%">
            </div>
            <div class="column2">
                <img src="../wapens/ScarLight-foto.png" onclick="openModal();currentSlide(5)" class="hover-shadow" alt="five-seven" style="width:100%">
            </div>
            <div class="column2">
                <img src="../wapens/ScarHeavyfoto.png" onclick="openModal();currentSlide(6)" class="hover-shadow" alt="P90" style="width:100%">
            </div>
        </div>

        <div class="row3">
            <div class="column3">
                <img src="../wapens/MinimiMk3foto.png" onclick="openModal();currentSlide(7)" class="hover-shadow" alt="509" style="width:100%">
            </div>
            <div class="column3">
                <img id="speciaalwapen" src="../wapens/Magfoto.png" onclick="openModal();currentSlide(8)" class="hover-shadow" alt="five-seven" style="width:100%;">
            </div>
            <div class="column3">
                <img src="../wapens/m2hbfoto.png" onclick="openModal();currentSlide(9)" class="hover-shadow" alt="P90" style="width:100%">
            </div>
        </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 9</div>
      <img src="../wapens/509info.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 9</div>
      <img src="../wapens/five-sevenMK2info.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 9</div>
      <img src="../wapens/P90info.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 9</div>
      <img src="../wapens/Scarinfo.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 9</div>
      <img src="../wapens/ScarLightinfo.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 9</div>
      <img src="../wapens/ScarHeavyinfo.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 9</div>
      <img src="../wapens/MinimiMk3info.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 9</div>
      <img src="../wapens/Maginfo.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 9</div>
      <img src="../wapens/m2hbinfo.png" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
<div id="regel1">
    <div class="column">
      <img class="demo" src="../wapens/509info.png" onclick="currentSlide(1)" alt="509">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/five-sevenMK2info.png" onclick="currentSlide(2)" alt="five-seven">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/P90info.png" onclick="currentSlide(3)" alt="P90">
    </div>
</div>
<div id="regel2">
<div class="column">
      <img class="demo" src="../wapens/five-sevenMK2info.png" onclick="currentSlide(2)" alt="Scar Subcompact">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/P90info.png" onclick="currentSlide(3)" alt="Scar Light">
    </div>

 <div class="column">
      <img class="demo" src="../wapens/Scarinfo.png" onclick="currentSlide(4)" alt="Scar Heavy">
    </div>

</div>
<div id="regel3">
    <div class="column">
      <img class="demo" src="../wapens/P90info.png" onclick="currentSlide(3)" alt="Minimi MK3">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/Scarinfo.png" onclick="currentSlide(4)" alt="Mag">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/ScarLightinfo.png" onclick="currentSlide(5)" alt="M2HB">
    </div>
</div>

<div id="regel4">
  <div class="column">
      <img class="demo" src="../wapens/Scarinfo.png" onclick="currentSlide(4)" alt="Scar">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/ScarLightinfo.png" onclick="currentSlide(5)" alt="ScarLight">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/ScarHeavyinfo.png" onclick="currentSlide(6)" alt="ScarHeavy">
    </div>
</div>


<div id="regel5">
  
<div class="column">
      <img class="demo" src="../wapens/ScarLightinfo.png" onclick="currentSlide(5)" alt="ScarLight">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/ScarHeavyinfo.png" onclick="currentSlide(6)" alt="ScarHeavy">
    </div>

 <div class="column">
      <img class="demo" src="../wapens/MinimiMk3info.png" onclick="currentSlide(7)" alt="MinimiMk3">
    </div>

  </div>

  <div id="regel6">
  <div class="column">
      <img class="demo" src="../wapens/ScarHeavyinfo.png" onclick="currentSlide(6)" alt="ScarHeavy">
    </div>

 <div class="column">
      <img class="demo" src="../wapens/MinimiMk3info.png" onclick="currentSlide(7)" alt="MinimiMk3">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/Maginfo.png" onclick="currentSlide(8)" alt="Mag">
    </div>

  </div>

<div id="regel7">
    <div class="column">
  <img class="demo" src="../wapens/MinimiMk3info.png" onclick="currentSlide(7)" alt="MinimiMk3">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/Maginfo.png" onclick="currentSlide(8)" alt="Mag">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/m2hbinfo.png" onclick="currentSlide(9)" alt="m2hb">
    </div>

</div>


<div id="regel8">
<div class="column">
      <img class="demo" src="../wapens/Maginfo.png" onclick="currentSlide(8)" alt="Mag">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/m2hbinfo.png" onclick="currentSlide(9)" alt="m2hb">
    </div>

<div class="column">
      <img class="demo" src="../wapens/509info.png" onclick="currentSlide(1)" alt="509">
    </div>

</div>


<div id="regel9">
<div class="column">
      <img class="demo" src="../wapens/m2hbinfo.png" onclick="currentSlide(9)" alt="m2hb">
    </div>

<div class="column">
      <img class="demo" src="../wapens/509info.png" onclick="currentSlide(1)" alt="509">
    </div>

    <div class="column">
      <img class="demo" src="../wapens/five-sevenMK2info.png" onclick="currentSlide(2)" alt="five-seven">
    </div>
</div>
</div>
</div>



<div id="footer">
<footer>
      <p>2020 © MidEast ShootingRange.</p>
    </footer>
</div>
</body>
</html>