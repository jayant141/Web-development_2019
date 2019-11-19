<?php
session_start();
if (isset($_SESSION["uid"])) {
    //echo "session in progress";
    // header('location:index.php');
} else {
    header("location:loginf.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>webcart| Cart</title>
    <link rel="stylesheet" type="text/css" href="./css/index4-11style.css">
    <link rel="stylesheet" type="text/css" href="./css/cartstyle.css">
    <script src="https://kit.fontawesome.com/bc2d813b9f.js" crossorigin="anonymous"></script>
    <style>
        .cart {
            margin-top: 10%;
            display: grid;
            grid-template-rows: 200px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="head">
            <h1><a href="./INDEX4-11.html" style="color: rgb(21, 114, 126); text-decoration: none;">Webcart</a></h1>
        </div>
        <div class="head_img">
            <div class="search-bar">
                <input class="search-txt" type="text" name="" placeholder="What are you lookig for">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <a href="./login.html"><img src="./user.png" style="height: 25px; width:25px"></a>
            <a href=""><img src="./shopping-cart.png" style="height: 25px; width:25px"></a>
        </div>
        <div class="sell">
            <a class="sellb" href="./sellerindex.html" style="height: 25px; width:25px">
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
                <ul>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                </ul>
            </li>
            <li><a href="#">Engineering</a>
                <ul>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                </ul>
            </li>
            <li><a href="#">Design</a>
                <ul>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                </ul>
            </li>
            <li><a href="#">Design</a>
                <ul>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                </ul>
            </li>
            <li><a href="#">Design</a>
                <ul>
                    <li><a href="#">horror</a></li>
                    <li><a href="#">horror</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div style="margin-top:10%; width:250px; 
    float: right; margin-left: 0.5%; ">
        <div style="border:1px solid black; padding-left:5%; padding-bottom:1%; height: 100px;">
            <p>your grand total is </p>
            <input type="submit" name="" value="procesed to pay->" style="color: white;background-color: goldenrod;
        width:200px">
        </div>
        <div style="border:1px solid black; margin-top: 5%; padding-left:5%; padding-bottom:1%; height: 100px;">
            <p>your grand total is </p>
            <input type="submit" name="" value="procesed to pay->" style="color: white;background-color: goldenrod;
        width:200px">
        </div>
    </div>

    <div class="cart">
        <div class="product1" style="display:grid; grid-template-columns: 20% 80%; border: 2px solid black;">
            <div>
                <img src="./Scientific-Calculator-PNG-Transparent.png" style="width: 180px; height: 200px;">
            </div>
            <div>
                <table>
                    <tr>
                        <td>product descriptionproduct descriptionproduct descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td>product descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="product2" style="display:grid; grid-template-columns: 20% 80%;  margin-top:4px; border: 2px solid black;">
            <div>
                <img src="./Scientific-Calculator-PNG-Transparent.png" style="width: 180px; height: 200px;">
            </div>
            <div>
                <table>
                    <tr>
                        <td>product descriptionproduct descriptionproduct descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td>product descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="product3" style="display:grid; grid-template-columns: 20% 80%;  margin-top:4px; border: 2px solid black;">
            <div>
                <img src="./Scientific-Calculator-PNG-Transparent.png" style="width: 180px; height: 200px;">
            </div>
            <div>
                <table>
                    <tr>
                        <td>product descriptionproduct descriptionproduct descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td>product descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="product4" style="display:grid; grid-template-columns: 20% 80%;  margin-top:4px; border: 2px solid black;">
            <div>
                <img src="./Scientific-Calculator-PNG-Transparent.png" style="width: 180px; height: 200px;">
            </div>
            <div>
                <table>
                    <tr>
                        <td>product descriptionproduct descriptionproduct descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td>product descriptionproduct description</td>
                    </tr>
                    <tr>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                        <td><input type="button" name="ptb" value="proceed to buy" style="width: 110px;height: 30px; border-radius:2px; background-color:goldenrod"></input></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>