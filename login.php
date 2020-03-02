<?php
require 'config.php';
require 'header.php';
//<!--create variables that store data-->
$email=$password='';
$email_err=$password_err='';
//process data
if (isset($_POST['btn_login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

//    check if user exists
    $sql = "SELECT * FROM `users` WHERE email=$email";
    $results = mysqli_query($connection,$sql);
    if (mysqli_num_rows($results) > 0){
//        user exists
        header("location:login.php");
        exit();
    }
//    hash user password
    $password = md5($password);
//    add user to db and take to login page
    $sql = "INSERT INTO `users`(`id`, `email`, `password`) VALUES (NULL ,'$email','$password')";
//    code to execute
    if (mysqli_query($connection,$sql)){
//    if user is successful
        header("location:login.php");
        exit();
    }else{
//    if user is not successful
        echo "ERROR:".mysqli_error($connection);
    }




}





?>
<!--<!--create variables that store data-->-->
<!--<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="css/main.css">-->
<!--<link rel="stylesheet" href="css/js/jquery-3.4.1.js">-->
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">-->
<!--    <a class="navbar-brand" href="#">-->
<!--        <img src="images/Screenshot%20from%202020-02-24%2003-45-17.png" alt="" style="height: 10vh">-->
<!--    </a>-->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!---->
<!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--        <ul class="navbar-nav mr-auto"  style="float:left;">-->
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">BLOGS</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="signup.php">SIGN UP</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="login.php">LOG IN</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="loans.php">TAKE A LOAN</a>-->
<!--            </li>-->
<!---->
<!--        </ul>-->
<!---->
<!--    </div>-->
<!--</nav>-->


<!--start sign up form-->
<div class="container">
    <div class="row">
        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div id="auth-form">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-info btn-block" name="btn_login">login</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>

<!--end sign up-->
<?php
require 'footer.php';
?>
