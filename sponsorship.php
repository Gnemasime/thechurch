<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="shortcut icon" href="favicon.png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sponsorship</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
   
   

</head>

<body class="bg-gradient-primary">

<div class="container col-lg-8">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <!--<div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                               <img src="../images/landscape-1.jpg" width = " 400" height = "300" class= "mt-5" > 
                            </div> -->
                            <div class="container col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sponsorship </h1>
                                    </div>
                                    <form class="user" method="POST">

                                    <div class="form-group">
                                            <input type="number" name="amount" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Enter amount(R)">
                                        </div>

                                    

                                       

                                        <div class="form-group ">
                                            <input type="text" name="reference" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Reference">
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="text" name="reference" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Event sponsoring">
                                        </div>
                                        
                                        
                                        <button class="btn btn-primary btn-user btn-block" type="submit" name="submit" text="Login">Submit</button>
                                        </div>
                                        
                                        
                                        <!--<a  class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>-->
                                     <!--   <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        function checkLength(){
            var input = document.getElementById("inputField").value;
            if (input.length >10){
                document.getElementById("errorMessage").style.display= "block";
            }else{
                document.getElemenntById("errorMessage").style.display = "none";
            }
        }
</script>
</body>
<?php
if(!empty($_POST["submit"])){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $cell = $_POST["cell"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $toEmail = "smesihlentshangase2908@gmail.com";

    $emailHeaders = "Name: ". $name .
    "\r\n Surname: " . $surname .
    "\r\n Cellphone: " . $cell .
    "\r\n Email: " . $email .
    "\r\n Address: " . $address . "\r\n ";

    if(mail($toEmail,$username,$emailHeaders)){
        header("Location: index.php");
    }
}
 ?>
</html>