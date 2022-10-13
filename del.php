<?php     
   
$servername = "sql307.epizy.com";
$username = "epiz_32509075";
$password = "akrlqDLnFd";
$dbname = "epiz_32509075_omega";

$id = $_REQUEST['id'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $mysql = "DELETE FROM result WHERE `result`.`Id` = $id" ;
  $stmt = $conn->prepare($mysql);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $records = $stmt->fetchAll();
   
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
header ("Location: listing.php");
?>