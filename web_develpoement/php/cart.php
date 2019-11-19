<?php
session_start();
if (isset($_SESSION["uid"])) {
    //echo "session in progress";
    // header('location:index.php');
    $uid = $_SESSION["uid"];
    include("./connect.php");
    $query_cart = "SELECT `item_id`, `item_name`, `item_price`, `use_id` FROM `cart` WHERE `use_id` = '$uid' ";
    $run_cart = mysqli_query($conn, $query_cart);

    //$data_cart = mysqli_fetch_assoc($run_cart);
    //$item_id = $data_cart['item_id'];
    //$query_item = "SELECT `Item_id`, `brand_name`, `Item_name`, `item_img`, `item_desc`, `original_price`, `Item_price`, `Item_condition`, `type`, `s_id` FROM `items` WHERE `Item_id`='$item_id'";
    // $run_item = mysqli_query($conn, $query_item);
    function get_recent()
    {
        global $run_cart;
        if ($run_cart == true) {
            while ($data = mysqli_fetch_assoc($run_cart)) {
                ?>
                <div>
                    <form name="cart" action="cart_delete.php" method="post">

                        <table style="border:1px solid black;margin-top:2%">
                            <tr>
                                <td><img src="../images/<?php echo $data["item_img"]; ?>" style="width: 70%; height: 70%;"></td>
                            </tr>
                            <tr>
                                <th>Item_id</th>
                                <th>item_name</th>
                                <th>item_desc</th>
                                <th>original_price</th>
                                <th>item_price</th>

                            </tr>

                            <tr style="padding:50px;">
                                <td><?php echo $data["item_id"]; ?></td>

                                <td><?php echo $data["Item_name"]; ?></td>
                                <td><?php echo $data["item_desc"]; ?></td>
                                <td><?php echo $data["original_price"]; ?></td>
                                <td><?php echo $data["Item_price"]; ?></td>

                            </tr>


                            <tr>
                                <input type="hidden" name="item_id" value="<?php echo $data["Item_id"]; ?>">
                                <input type="hidden" name="item_name" value="<?php echo $data["Item_name"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $data["Item_price"]; ?>">
                                <td><input type="submit" name="delete" value="Delete" onclick="on_reset()"></td>
                                <td><input type="submit" name="order" value="Procced To Pay " onclick="on_reset()"></td>
                                <td><input type="submit" name="Donate" value="Ask for donation" onclick="on_reset()"></td>
                            </tr>


                        </table>
                        <script>
                            function on_reset() {
                                document.getElementsByName("cart").resetForm();
                                //  document.cart.reset();
                            }
                        </script>
                    </form>
                    <!--  <script>
                            function resetForm() {
                                document.getElementsByName("delete").value = "";
                                document.getElementsByName("order").value = "";
                                document.getElementsByName("Donate").value = "";
                                selectedRow = null;
                            }
                        </script>-->
                </div>
<?php
            }
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
    <title>webcart| Cart</title>
    <link rel="stylesheet" type="text/css" href="../css/index4-11style.css">
    <link rel="stylesheet" type="text/css" href="../css/cartstyle.css">
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
            <h1><a href="./index.php" style="color: rgb(21, 114, 126); text-decoration: none;">Webcart</a></h1>
        </div>
        <div class="head_img">
            <div class="search-bar">
                <input class="search-txt" type="text" name="" placeholder="What are you lookig for">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <a href="./session_end.php"><img src="../html_imges/user.png" style="height: 25px; width:25px"></a>
            <a href=""><img src="../html_imges/shopping-cart.png" style="height: 25px; width:25px"></a>
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
            <li><a href="books.php">Books</a></li>
            <li><a href="books.php">Engineering</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Design</a></li>
        </ul>
    </div>



    <div class="cart">
        <?php get_recent(); ?>
    </div>


</body>

</html>