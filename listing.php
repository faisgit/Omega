<!-- Bootstrap CDN Links  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- Php Code -->
<?php 
session_start();
    
$servername = "sql307.epizy.com";
$username = "epiz_32509075";
$password = "akrlqDLnFd";
$dbname = "epiz_32509075_omega";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $mysql = "SELECT * FROM result ORDER BY id DESC" ;
  $stmt = $conn->prepare($mysql);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $records = $stmt->fetchAll();
   
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;


?>
<!-- CSS -->

<style>
  body{
    background-color : #f0f2f5;
  }

  nav a{
    margin-left : auto ;
  }

  nav h3{
    color: white;
    font-size: 28px;
    margin-left: 23px;
  }

  img{
    display: block;
    margin: 24px auto;

  }

  .container{
    margin: 6rem auto ;
  }

  #btn{
    margin-left: 144px;
    width: 77px;
    margin-bottom: 22px;
  }

  .table{
    background: white ;
    width: 79% ;
    margin: 0.5rem auto ;
  }

  //.footer{
   //  background: black;
    //color: white;
    //text-align: center;
 // }

  </style>


<!-- HTML Code  -->

<nav class="navbar sticky-top navbar-dark bg-dark">
  <h3>Omega</h3>
  <a class="navbar-brand btn btn-outline-light" href="login_form.php">Logout</a>
 
</nav>
  
 
<img src="logo.png" alt="" class="img-fluid" >
<div class="container container-sm">
<?php if($_SESSION['username'] == 'admin'){ ?>
  <a href="add_form.php" class = "btn btn-danger " id = "btn">Add</a>
 <?php } ?> 
  <table  class="table table-bordered shadow-lg p-3 mb-5 bg-body rounded ">
    <thead>
       <!-- <th>Id</th> -->
        <th>Name</th>
        <th>Roll No</th>
        <th>Courses</th>
        <th>Semester</th>
        <th>City</th>
        <th>Total Marks</th>
        <th>Status</th>
         <?php if($_SESSION['username'] == 'admin'){ ?>
        <th>Action</th>
        <?php } ?>
    </thead>

    <tbody>
        <?php foreach($records as $rec) { ?>
        <tr>
           <!-- <td><?php echo $rec['Id'] ; ?></td> -->
            <td><?php echo $rec['name'] ; ?></td>
            <td><?php echo $rec['roll no'] ; ?></td>
            <td><?php echo $rec['course'] ; ?></td>
            <td><?php echo $rec['sem'] ; ?></td>
            <td><?php echo $rec['city'] ; ?></td>
            <td><?php echo $rec['total marks'] ; ?></td>
             <td>
                  <?php 
                  
                  
                  if($rec['total marks'] <= 175){
                    echo "Fail";
                  }
                  else{
                    echo "Pass";
                  }
                  
                  
                  ?>
                </td>
             <?php if($_SESSION['username'] == 'admin'){ ?>
            <td>
              <a href="ed.php?id=<?php echo $rec['Id'] ; ?>" class="btn btn-outline-info btn-sm">Edit</a>
              <a href="del.php?id=<?php echo $rec['Id'] ; ?>"  class="btn btn-outline-secondary btn-sm" onclick="return confirm('Are you sure to delete <?php echo $rec['name'] ?> records');">Delete</a>
            </td>
            <?php } ?>
        </tr>
        <?php } ?> 
    </tbody>
  </table>

</div>
<!--
</div>
  <div class="card-footer footer">
    Copyright 	&#169; 2022 Omega
  </div>
</div>

-->

