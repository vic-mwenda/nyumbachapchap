<?php
require 'config.php';
require 'header.php';
//<!--create variables that store data-->
$username=$loan_amount=$loan_details='';

//process data
if (isset($_POST['btn_submit'])){
    $username = $_POST['username'];
    $loan_amount = $_POST['loan_amount'];
    $loan_details = $_POST['loan_details'];

//    check if user exists
    $sql = "SELECT * FROM `username` WHERE username=$username";
    $results = mysqli_query($connection,$sql);
    if (mysqli_num_rows($results) > 0){
//        user exists
        header("location:loans.php");
        exit();
    }

//    add user to db and take to login page
    $sql ="INSERT INTO `loans`(`id`, `username`, `loan_amount`, `loan_details`) VALUES (NULL ,'$username','$loan_amount''$loan_details')" ;
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

<!--start sign up form-->
<div class="container">
    <div class="row">
        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div id="auth-form">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>

                        <div class="form-group" style="margin-top: 10vh">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">loan amount</label>
                            <input type="text" name="loan_amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">loan details</label>
                            <input type="text" name="loan_details" class="form-control">
                        </div>
                        <button class="btn btn-info btn-block" name="btn_submit">submit</button>
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

