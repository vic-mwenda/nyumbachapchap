<?php
require 'config.php';
require 'header.php';
$user_id=$title=$content='';

//grab user id
if (isset($_SESSION['kipande'])){
    $user_id = $_SESSION['kipande'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (isset($user_id)){
        header("location:login.php");
    }

//    add post into db
    $sql = "INSERT INTO `posts`(`id`, `user_id`, `title`, `post_content`, `created_at`) VALUES (NULL ,'$user_id','$title','$content')";
    if (mysqli_query($connection,$sql)){
        header("location:index.php");

    }else{
        echo "ERROR".mysqli_error($connection);

    }

}
?>
    <div class="container">
        <div class="row">
            <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div id="auth-form">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                        <fieldset>

                            <div class="form-group" style="margin-top: 10vh">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                                <input type="number" name="id" hidden value="<?php echo $user_id?>">
                            </div>
                            <div class="form-group">
                                <textarea name="content" type="text"></textarea>
                            </div>
                            <button class="btn btn-info btn-block" name="btn_post">add post</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        </div>
    </div>


    <!--end add post form-->










<?php
require 'footer.php';
?>