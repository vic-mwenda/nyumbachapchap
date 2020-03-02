<?php
require 'header.php';
require 'config.php';
$id=$username=$loan_amount=$loan_details='';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT `id`, `username`, `loan_amount`, `loan_details` FROM `loans` WHERE id='$id'";

    $user = mysqli_query($connection, $sql);

//loop through data from db
    while($row = mysqli_fetch_array($user)){
        $username = $row['username'];
        $loan_amount = $row['loan_amount'];
        $loan_details = $row['loan_details'];
    }
}
if(isset($_POST['update_btn']) and isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "$id";

    if (isset($_POST['username'])) {
        $name = $_POST['username'];
    }
    if (isset($_POST['loan_amount'])) {
        $price = $_POST['loan_amount'];
    }
    if (isset($_POST['loan_details'])) {
        $description = $_POST['loan_details'];
    }
}
?>

    <div class="container">
        <div class="jumbotron">
            <h2 class="content-title"><?php echo "Welcome to <span style='color: blue;font-weight: bold'>$name</span> page"?></h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <?php
                    echo "<img src=images/black-calculator-near-ballpoint-pen-on-white-printed-paper-53621.jpg class='card-img' style='width: 100%;height: 250px;border-bottom: 1px solid blue'>";
                    ?>
                </div>
                <br>
                <div class="card">
                    <p class="card-text" style="padding: 6px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aut ratione temporibus vitae voluptas. A assumenda esse eum exercitationem.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aut ratione temporibus vitae voluptas. A assumenda esse eum exercitationem.
                    </p>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-xl-8">
                <div class="card">
                    <form action="update_handler.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label for="">username</label>
                                <input type="text" class="form-control" name="product_name" value="<?php echo $name?>">
                                <input type="number" hidden name="id" value="<?php echo $id?>">
                            </div>
                            <div class="form-group">
                                <label for="">loan_amount</label>
                                <input type="number" class="form-control" name="product_price"  value="<?php echo $price?>">
                            </div>
                            <div class="form-group">
                                <label for="">loan_details</label>
                                <textarea name="description" class="form-control" style="background-color:rgba(40, 61, 177, 0.13);" >
                                <?php echo $description ?>;
                            </textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="uploadedFile" class="form-control">
                        </fieldset>

                            <button type="submit" class="btn btn-dark" name="update_btn">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    require 'footer.php';
    ?>

