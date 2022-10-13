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
    margin: 107px auto;
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
</style>



<nav class="navbar sticky-top navbar-dark bg-dark">
 
  <a class="navbar-brand btn btn-warning btn-sm " href="listing.php">Back</a>
</nav>

<div class="container">
        <div class="box rounded  shadow-lg p-3 mb-5 bg-body ">
            <form action="add_act.php">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Roll No " name="roll_no">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder=" Course" name="course">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder=" Semester " name="semester">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="City " name="city">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Toal Marks" name="total_marks">
                </div>

                <button type="submit" class="btn btn-primary" id="btn">Submit</button>
            </form>
        </div>