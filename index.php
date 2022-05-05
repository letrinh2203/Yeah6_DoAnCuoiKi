<head><link REL="SHORTCUT ICON" HREF="Images/Icon.ico"></head>
 
<?php
require_once('auth.php');
require_once('MainClass.php');
?>
<?php
    $jsondata = file_get_contents("Upload\AboutUs.json");
    $json = json_decode($jsondata, true);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./Font-Awesome-master/css/all.min.css">
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
<!-- Tieu de        -->
        <title>My Team</title>
    </head>
<body>
    
<div class="container">
    <div class="header-area">
        <p class="welcome" >Welcome to us, <?= $_SESSION['lastname'] ?> </p>
        <p class="right"><a href="./logout.php" type="button" class="btn btn-info" >Logout</a></p> 
        
    </div> 
    <div class="content">
    <h2 class="nameTeam" >About Yeah6</h2>
        <div class="row">
            <?php
                $index = 1;
                foreach($json['information'] as $key => $value){
                    
                    echo "<div class=\"col-sm-6\">";
                    echo    "<div class=\"col-sm-7\">";
                    echo        '<h4 >'.$index.'. '. $value['name'].'</h4>';
                    echo        '<li>MSSV: '.$value['mssv'].'</li>';
                    echo        '<li>Email: '.$value['email'].'</li>';
                    echo        '<li>Hobbies: '.$value['hobbies'].'</li>';
                    echo    "</div>";
                    echo    "<div class=\"col-sm-5\">";
                    echo        "<img src=\"Upload/{$value['imageUrl'] }\" class=\"imagestyle\">";
                    echo        '<ul class="follow-us clearfix">';
                    echo        '<li><a href=' .$value['facebook'].' > <i class="fa fa-facebook"></i></a></li>';
                    echo        '<li><a href=' .$value['instagram'].'> <i class="fa fa-instagram"></i></a></li>';
                    echo        '<li><a href=' .$value['youtube'].'> <i class="fa fa-youtube-play"></i></a></li>';
                    echo        '</ul>';
                    echo    "</div>";
                    echo "</div>";

                    $index++;
                }
            ?>
        </div>
    </div>
</div>
</body>
</htlm>