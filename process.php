<?php 
header("Content-Type: text/html;charset=UTF-8"); 
$host = 'localhost'; 
$user = 'root'; 
$pw = 'qweasdzz01!'; 
$dbName = 'test'; 
$mysqli = new mysqli($host, $user, "", $dbName); 
if($mysqli){ 
echo "MySQL successfully connected!<br/>"; 
$Latitude = $_GET['lati']; 
$Longitude = $_GET['long']; 

echo "<br/>Latitude = $Latitude"; 
echo ", "; 
echo "Longitude = $Longitude<br/>"; 

$query = "INSERT INTO location (Latitude, Longitude) VALUES ('$Latitude','$Longitude')"; 
mysqli_query($mysqli,$query); 

echo "</br>success!!"; 
} 
else{ 
echo "MySQL could not be connected"; 
} 
mysqli_close($mysqli); 
?>
