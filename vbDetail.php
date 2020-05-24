<!--model-->
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title> Seth Achten </title>
<link href="../css/detaill.css" rel="stylesheet">
<?php
$host="localhost";
$user="root";
$pw="";
$db="dbmideastshooting";
$link=mysqli_connect($host, $user, $pw, $db) or die ("Fout bij openen");
?>


</head>
<body>

<form name="f" method="post" action="extraproberen.php";>
<div id="productt">
<?php
if(isset($_GET['keuze']))
{
    $sql="select * from cafetaria where ID ='".$_GET['keuze']."'";
    $resultaat=mysqli_query($link, $sql);
    if($resultaat)
    {
        while($data=mysqli_fetch_array($resultaat))
        {
            echo "<font size='5' face='Arial'>";
            echo "".$data['naam']."<br>";
            echo "Prijs: €".$data['Verkoop']."<br>";
            echo "</font>";


            echo "<img id='fotos' src='../images/".$data['fotos']."'><br>";


            echo "<input type='hidden' name='keuze' value='".$data['ID']."'>";
        }
    }
}
?>

</form>
</div>
<?php
mysqli_close($link);
?>
</body>
</html>