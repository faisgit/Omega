<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>






<!-- <input type="text" name = "username" placeholder = "username">
   
    <input type="submit" value = "Login">
</form> -->




<style>
    body {
        background-color: #f0f2f5;
    }

    nav a {
        margin-left: 5px;
    }

    nav .navbar-brand {
        color: black;
    }

    img {
        display: block;
        margin: 24px auto;

    }

    .box {
        width: 342px;
        margin: 107px auto;
        background: white;
        padding: 16px;
    }

    .box form {
        margin-top: 18px;
    }

    .form-control {
        width: 83%;
        margin-left: auto;
        margin-right: auto;
    }

    #btn {
        display: block;
        width: 83%;
        margin-left: auto;
        margin-right: auto;
    }
</style>



<!-- <nav class="navbar sticky-top navbar-dark bg-dark">

   <h1>Omega</h1>
</nav> -->
<img src="logo.png" alt="" class="img-fluid">
<div class="container">
    <div class="box rounded  shadow-lg p-3 mb-5 bg-body ">


        <div style="color : red ; text-align: center;">

            <?php 


                if(isset($_REQUEST['msg'])){
                
                    echo $_REQUEST['msg'] ;
                }

            ?>

        </div>


        <form action="login_action.php" method="POST">
            <div class="mb-3">

                <input type="text" class="form-control" name="username" placeholder="username">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary" id="btn">Submit</button>
        </form>
    </div>