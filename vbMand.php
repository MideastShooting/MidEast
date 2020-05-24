<!--model-->
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title> Seth Achten </title>
<?php
$host="localhost";
$user="root";
$pw="";
$db="dbmideastshooting";
$link=mysqli_connect($host, $user, $pw, $db) or die ("Fout bij openen");
?>

<style>
#balk{
    width: 95%;
    position: fixed;
    top: 0;
    text-align: right;
}
.paars{
    color: purple;
}
.groen{
    color: green; 
}
a{
    text-decoration: none; 
}
#product{
    margin-top: 50px;
    padding: 50px;
}
</style>
</head>
<body>
<div id="balk">
<a href="vbMand.php"><img src="../images/mandje.png"></a>
<?php
if(isset($_GET['keuze']))
{
    $sql="delete from tbl_mand where NR='".$_GET['keuze']."'";
    mysqli_query($link, $sql);
}
$sql="select count(*) as som from stockcafé";
$resultaat=mysqli_query($link, $sql);
if($resultaat)
{
    while($data=mysqli_fetch_array($resultaat))
    {
        echo $data['som'];
    }
}


?>
</div>
<div id="product">
<?php
    $sql="select * from stockcafé, tbl_mand where stockcafé.ID=tbl_mand.artID";
    $resultaat=mysqli_query($link, $sql);
    if($resultaat){
        while($data=mysqli_fetch_array($resultaat))
        {
            echo $data['aantal']." ";
            echo utf8_encode($data['Naam'])." ";
            echo utf8_encode($data['Prijs'])." ";
            echo utf8_encode($data['Hoeveelheid'])." ";
            echo "<a href='vbMand.php?keuze=".$data['NR']."'><img src='../images/trash.png '><br></a>";
        }
    }
?>
<a href="MooiMenu.php"><img src="../images/terug.png"></a>
</div>
<?php
mysqli_close($link);
?>
</body>
</html>