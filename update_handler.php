<?php
require 'config.php';

if (isset($_POST['update_btn'])){
//    if button is clicked
//    grab id first
    if (isset($_POST['id'])){
        $id =$_POST['id'];
        //    grab form data\
        $username = $_POST['username'];
        $loan_amount = $_POST['loan_amount'];
        $loan_details = $_POST['loan_details'];
        $sql = "UPDATE `loans` SET `id`='$id',`username`='$username',`loan_amount`='$loan_amount',`loan_details`='$loan_details' WHERE id='$id'";
//execute update instruction
        if(mysqli_query($connection,$sql)){
            header("location:details.php?id=$id");
            exit();
        }else{
            echo "ERROR".mysqli_error($connection);
        }
    }





}



?>