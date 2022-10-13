<?php 
   
$servername = "sql307.epizy.com";
$username = "epiz_32509075";
$password = "akrlqDLnFd";
$dbname = "epiz_32509075_omega";

$id = $_REQUEST['id'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $mysql = "SELECT * FROM result WHERE Id =  $id" ;
  $stmt = $conn->prepare($mysql);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $records = $stmt->fetch();
   
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

$name = $records['name'];
$roll_no = $records['roll no'];
$course = $records['course'];
$sem = $records['sem'];
$city = $records['city'];
$total_marks = $records['total marks'];


?>






<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<style>
     body{
    background-color : #f0f2f5;
    }

    nav a{
        margin-left : 5px ;
    }

    nav .navbar-brand{
        color : black ;
    }

    .box{
    width: 342px;
    margin: 62px auto;
    background : white ;
    padding: 16px ;
    }

    .box form{
        margin-top: 18px ;
    }

    .form-control{
        width: 83% ;
        margin-left : auto ;
        margin-right: auto ;
    }

    #btn{
        display : block ; 
        width : 83% ;
        margin-left: auto ;
        margin-right : auto ;
    }

    #btn2{
        width: 160px;
        margin-top: 9px;
        display: block ;
        margin-left : auto ;
        margin-right : auto ;
    }
</style>



<nav class="navbar sticky-top navbar-dark bg-dark">
 
  <a class="navbar-brand btn btn-warning btn-sm " href="listing.php">Back</a>
</nav>

<div class="container">
        <div class="box rounded  shadow-lg p-3 mb-5 bg-body ">
            <form action="ed_act.php">
                <div class="mb-3">
                    <input type="text"  class="form-control" name = "id" value = "<?php echo $id ; ?>" readonly>
                </div>
                <div class="mb-3">
                  <input type="text"  class="form-control" name = "name" value = "<?php echo $name ; ?>" >
                   
                </div>
                <div class="mb-3">
                <input type="text"  class="form-control" name = "roll_no" value = "<?php echo $roll_no ; ?>">
                </div>
                <div class="mb-3">
                <input type="text"  class="form-control"  name = "course" value = "<?php echo $course ; ?>">
                </div>
                <div class="mb-3">
                <input type="text"  class="form-control"  name = "sem" value = "<?php echo $sem ;?>">
                </div>
                <div class="mb-3">
                <input type="text"  class="form-control"  name = "city" value =  "<?php echo $city ; ?>">
                </div>
                <div class="mb-3">
                <input type="text"  class="form-control"  name = "total_marks" value = "<?php echo $total_marks ; ?>">
                </div>

                <button type="submit" class="btn btn-primary" id="btn">Submit</button>
                <input type = "reset" class = "btn btn-danger" id = "btn2">
            </form>
        </div>