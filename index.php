
<?php

session_start();

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["submit"]))
{
   // $db_conn=mysqli_connect("localhost","root","","map") or die ("connexion impossible: ".mysqli_connect_error());
    if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_SESSION['email'])&&isset($_POST['password'])&&isset($_POST['confirm_password']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $sql="INSERT INTO utilisateur VALUES  ( '$firstname', '$lastname', '$email', '$password', '$confirm_password');";
        $query; //mysqli_query($db_conn,$sql1)or die (mysqli_error($db_conn));
        if (true)
           {echo 'creation de compte avec succees' ;
             echo "<a href='http://localhost/index.php' class='btn btn-primary'>Voir la Carte</a>";
            }
        else {
            echo "erreur de creation" ;
        };

    }

}



//mysqli_close();

?>


<!--

<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css"  href="signup.css" >
    <link rel="stylesheet" type="text/css" href="C:\Users\USER\Desktop\projetweb\bootstrap\css\bootstrap.css">

</head>

<body>
    

    <script src="script.js"></script>
 <div class="auth-wrapper ">
    <div class="auth-inner">
    <div class="card" >
        <div class="card-body">

        <form class="form-signup" name ="signup" method="post" action="index.php">
            <div class="logo-container">
                <img src="logo11.png" alt="Logo du site web" style="height: 100px;" style="width:120px">
              </div>
          
            <h2 class="card-title">Registration </h2>
            <p>Create your account</p>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                    <div class="col-md-6 ">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">



                    </div>
                </div>

            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address">

            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">

            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">

            </div>
            <div class="form-group ">
                <label>
                    <input type="checkbox" name="">
                  I accept the <a href="#">terms of use</a> & <a href="#">privacy policy</a>
                </label>
               
            </div>
            <input type="submit" class="btn btn-success btn-block" name="" value="Submit">
        </form>
    </div>
</div>
</div>
</div>
</body>

</html> -->