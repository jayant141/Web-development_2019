<?php
session_start();
if (isset($_SESSION["uid"])) {
    //echo "session in progress";
    // header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>webcart| Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/index4-11style.css">
    <script src="https://kit.fontawesome.com/bc2d813b9f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="login.js"></script>
</head>

<body>
    <div class="header">
        <div class="head">
            <h1><a href="./index2.php" style="color: rgb(21, 114, 126); text-decoration: none;">Webcart</a></h1>
        </div>
        <div class="head_img">
            <div class="search-bar">
                <input class="search-txt" type="text" name="" placeholder="What are you lookig for">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <a href="login.html"><img src="../html_imges/user.png" style="height: 25px; width:25px"></a>
            <a href="./cart.php"><img src="../html_imges/shopping-cart.png" style="height: 25px; width:25px"></a>
        </div>
        <div class="sell">
            <a class="sellb" href="./sellerindex.php" style="height: 25px; width:25px">
                <i class="fas fa-arrow-alt-circle-right">sell</i>
            </a>
        </div>
    </div>
    <div class="categories">
        <a class="sellb" style="height: 25px; width:25px; 
        padding-left:15px; padding-top:5px">
            <button type="button" name="" value="Back" onclick="history.go(-1)" style="height: 25px; width:45px; 
                    padding-left:5px; padding-top:5px;border: none; background-color:transparent"><i class="fas fa-arrow-alt-circle-left">Back</i></button>
        </a>
        <ul>
            <li><a href="#">Books</a>
            </li>
            <li><a href="#">Engineering</a>
            </li>
            <li><a href="#">Design</a>
            </li>
            <li><a href="#">Design</a>
            </li>
            <li><a href="#">Design</a>
            </li>
        </ul>
    </div>
    <div style="display: grid; grid-template-columns: 20% 80%;margin-top:10%">
        <div>
            <center>
                <h1>Categories</h1>
            </center>
            <ul>
                <a target="frame2" href="./booksdisplay.php">
                    <li>Books</li>
                </a>
                <a target="frame2" href="">
                    <li>Electronics</li>
                </a>
                <a target="frame2" href="">
                    <li>Design</li>
                </a>
                <a target="frame2" href="">
                    <li>Engieering</li>
                </a>
            </ul>
        </div>
        <div>
            <iframe src="./booksdisplay.php" name="frame2" height="700" width="950" style="border:1px solid black;">
            </iframe>
        </div>
    </div>
</body>

</html>