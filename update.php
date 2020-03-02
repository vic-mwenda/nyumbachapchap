<?php
require 'config.php';
$id=$username=$loan_amount=$loan_details='';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    echo "$id";

    if(isset($_POST['username'])){
        $name = $_POST['username'];
    }
    if(isset($_POST['loan_amount'])){
        $price = $_POST['loan_amount'];
    }
    if(isset($_POST['loan_details'])){
        $description = $_POST['loan_details'];
    }

    echo $username;
//    $sql = "UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description'],`product_condition`='$condition' WHERE id='$id'";
//    if(mysqli_query($conn,$sql)){
//        header('location:products.php?id= $_GET["id"]');
//    }

}

?>