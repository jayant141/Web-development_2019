<?php
$conn =  mysqli_connect("localhost", "root", "", "webproject");
//include("./connect.php");
$query = "SELECT `Item_id`, `brand_name`, `Item_name`, `item_img`, `item_desc`, `original_price`, `Item_price`, `Item_condition`, `s_id` FROM `items` ORDER BY `Item_id` DESC LIMIT 5";
$run = mysqli_query($conn, $query);
function get_recent()
{
    global $run;
    if ($run == true) {
        while ($data = mysqli_fetch_assoc($run)) {
            ?>
            <table style="margin-top=10%">

                <tr>
                    <td><img src="../images/<?php echo $data["item_img"]; ?>" style="width: 50%; height: 50%;"></td>
                    <td><?php echo $data["Item_name"]; ?></td>
                    <td><?php echo $data["Item_price"]; ?></td>
                    <td><?php echo $data["item_desc"]; ?></td>
                </tr>

                <tr>

                </tr>


            </table>
<?php
        }
        echo "sucessful";
    } else {
        echo "error";
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>webcart| Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/index4-11style.css">
    <script src="https://kit.fontawesome.com/bc2d813b9f.js" crossorigin="anonymous"></script>
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
            <a href="login.html"><img src="./user.png" style="height: 25px; width:25px"></a>
            <a href="./cart.html"><img src="./shopping-cart.png" style="height: 25px; width:25px"></a>
        </div>
        <div class="sell">
            <a class="sellb" href="./sellerindex.html" style="height: 25px; width:25px">
                <i class="fas fa-arrow-alt-circle-right">sell</i>
            </a>
        </div>
    </div>
    <div class="categories">
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
    <div style="margin-top=10%">
        <?php get_recent(); ?>
    </div>
</body>

</html>