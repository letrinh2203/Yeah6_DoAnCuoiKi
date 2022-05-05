<head><link REL="SHORTCUT ICON" HREF="Images/Icon.ico"></head>

<?php
require_once('auth.php');
require_once('MainClass.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = json_decode($class->login());
    if($login->status == 'success'){
        echo "<script>location.replace('./login_verification.php');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Font-Awesome-master/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./Font-Awesome-master/js/all.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- link vao file css/style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Login</title>

</head>
<body>
<div class="container">
    <div class="header-area">
        <p class="welcome"  > Welcome to Yeah6 </p>
        <p class="right"><a href="./login.php" type="button" class="btn btn-info" >Login</a></p> 
    </div>
    <div class="content-home">
    <main>

        <div class="col-lg-5">
            <div class="card shadow rounded-0">
                <div class="card-header py-1">
                   <h4 class="card-title text-center">LOGIN</h4>
                </div>
                <div class="card-body py-4">
                    <div class="container-fluid">
                       <form action="./login.php" method="POST">
                       <?php 
                            if(isset($_SESSION['flashdata'])):
                        ?>
                        <div class="dynamic_alert alert alert-<?php echo $_SESSION['flashdata']['type'] ?> my-2 rounded-0">
                            <div class="d-flex align-items-center">
                                <div class="col-11"><?php echo $_SESSION['flashdata']['msg'] ?></div>
                                <div class="col-1 text-end">
                                    <div class="float-end"><a href="javascript:void(0)" class="text-dark text-decoration-none" onclick="$(this).closest('.dynamic_alert').hide('slow').remove()">x</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php unset($_SESSION['flashdata']) ?>
                        <?php endif; ?>
                            <div class="form-group">
                               <label for="email" class="label-control">Email*</label>
                               <input type="email" name="email" id="email" class="form-control rounded-0" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" autofocus required>
                            </div>
                            <div class="form-group">
                               <label for="password" class="label-control">Password*</label>
                               <input type="password" name="password" id="password" class="form-control rounded-0" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
                            </div>
                            <div class="clear-fix mb-4"></div>
                            <div class="form-group text-end">
                                <button class="btn btn-info">Login</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="registration.php">Create a New Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>   
</div>   

</body>
</html>