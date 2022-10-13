<?php 

   
   
$servername = "sql307.epizy.com";
$username = "epiz_32509075";
$password = "akrlqDLnFd";
$dbname = "epiz_32509075_omega";

$name = $_REQUEST['name'];
$roll_no = $_REQUEST['roll_no'];
$course = $_REQUEST['course'];
$sem = $_REQUEST['semester'];
$city = $_REQUEST['city'];
$total_marks =  $_REQUEST['total_marks'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $mysql = "INSERT INTO `result` (`Id`, `name`, `roll no`, `course`, `sem`, `city`, `total marks`) VALUES (NULL, '$name', '$roll_no', '$course', '$sem', '$city', '$total_marks');" ;
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