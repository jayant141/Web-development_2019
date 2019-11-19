<?php
session_start();
if (isset($_SESSION["uid"])) {
    //echo "session in progress";
    // header('location:index.php');
    include('./connect.php');
    $query = "SELECT `Item_id`, `brand_name`, `Item_name`, `item_img`, `item_desc`, `original_price`, `Item_price`, `Item_condition`, `s_id` FROM `items` ORDER BY `Item_id` DESC LIMIT 5";
    $run = mysqli_query($conn, $query);
    function get_recent()
    {
        global $run;
        if ($run == true) {
            while ($data = mysqli_fetch_assoc($run)) {
                ?>
                <div style="margin-top:10%">
                    <form action="./index2.php" method="post">

                        <table style="border:1px solid black;margin-top:2%">
                            <tr>
                                <td><img src="../images/<?php echo $data["item_img"]; ?>" style="width: 50%; height: 50%;"></td>
                            </tr>
                            <tr>
                                <th>Item_id</th>
                                <th>item_name</th>
                                <th>item_desc</th>
                                <th>original_price</th>
                                <th>item_price</th>

                            </tr>

                            <tr style="padding:50px;">
                                <td><?php echo $data["Item_id"]; ?></td>

                                <td><?php echo $data["Item_name"]; ?></td>
                                <td><?php echo $data["item_desc"]; ?></td>
                                <td><?php echo $data["original_price"]; ?></td>
                                <td><?php echo $data["Item_price"]; ?></td>

                            </tr>


                            <tr>
                                <input type="hidden" name="item_id" value="<?php echo $data["Item_id"]; ?>">
                                <input type="hidden" name="item_name" value="<?php echo $data["Item_name"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $data["Item_price"]; ?>">
                                <td><input type="submit" name="add" value="add to cart"></td>
                                <td><input type="submit" name="order" value="order now"></td>
                                <td><input type="submit" name="Donate" value="Ask for donation"></td>
                            </tr>


                        </table>
                    </form>
                </div>
<?php
            }
        } else {
            echo "error";
        }
    }
} else {
    header("location:loginf.php");
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
            <h1><a href="" style="color: rgb(21, 114, 126); text-decoration: none;">Webcart</a></h1>
        </div>
        <div class="head_img">
            <div class="search-bar">
                <input class="search-txt" type="text" name="" placeholder="What are you lookig for">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <a href="session_end.php"><img src="../html_imges/user.png" title="Logout" style="height: 25px; width:25px"></a>
            <a href="./cart.php"><img src="../html_imges/shopping-cart.png" style="height: 25px; width:25px"></a>
        </div>
        <div class="sell">
            <a class="sellb" href="sellerindex.php" style="height: 25px; width:25px">
                <i class="fas fa-arrow-alt-circle-right">sell</i>
            </a>
        </div>
    </div>
    <div class="categories">
        <ul>
            <li><a href="./books.php">Books</a>
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
    <div style="margin-top=10%;">
        <?php get_recent(); ?>
    </div>
</body>

</html>
<?php
$uid = $_SESSION['uid'];
if (isset($_POST['add'])) {
    $Item_id = $_POST['item_id'];
    $Item_name =  $_POST['item_name'];
    $Item_price = $_POST['item_price'];
    $query_add = "INSERT INTO `cart`(`item_id`, `item_name`, `item_price`, `use_id`) VALUES ('$Item_id','$Item_name','$Item_price','$uid')";
    $run_add = mysqli_query($conn, $query_add);
    ?>
    <script>
        alert('sucessfully added to cart');
    </script>
<?php
}
if (isset($_POST['order'])) {
    $Item_id = $_POST['item_id'];
    $Item_name =  $_POST['item_name'];
    $Item_price = $_POST['item_price'];
    $query_add = "INSERT INTO `cart`(`item_id`, `item_name`, `item_price`, `use_id`) VALUES ('$Item_id','$Item_name','$Item_price','$uid')";
    $run_add = mysqli_query($conn, $query_add);
    ?>
    <script>
        alert('sucessfully added to cart');
    </script>
<?php
}
if (isset($_POST['Donate'])) {
    $Item_id = $_POST['item_id'];
    $Item_name =  $_POST['item_name'];
    $Item_price = $_POST['item_price'];
    $query_req_id = "SELECT `s_id` FROM `items` WHERE `Item_id` ='$Item_id'";
    $run_req_id = mysqli_query($conn, $query_req_id);
    $data_req_id = mysqli_fetch_assoc($run_req_id);
    $req_id = $data_req_id['s_id'];
    $query_add = "INSERT INTO `donate`(`item_id`, `Requester_id`, `Donater_id`) VALUES ('$Item_id','$uid','$req_id')";
    $run_add = mysqli_query($conn, $query_add);
    ?>
    <script>
        alert('Request sent sucessfully');
    </script>
<?php
}
?>