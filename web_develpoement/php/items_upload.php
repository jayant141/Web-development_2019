<?php
session_start();
if (isset($_SESSION["uid"])) {
    //echo "session in progress";
    // header('location:index.php');
    if (isset($_POST['add_item'])) {
        include("./connect.php");
        $uid = $_SESSION['uid'];
        $image = $_FILES['img1']['name'];
        $tempname = $_FILES['img1']['tmp_name'];
        $brand = $_POST['brand'];
        $ad_title = $_POST['ad_title'];
        $description = $_POST['description'];
        $original_price = $_POST['original_price'];
        $set_price = $_POST['set_price'];
        $categories = $_POST['categories'];
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES['img1']['name']);
        //$imageFlieType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $sql = "INSERT INTO `items`(`brand_name`, `Item_name`, `item_img`, `item_desc`, `original_price`, 
        `Item_price`, `type`, `s_id`) VALUES ('$brand','$ad_title','$image','$description','$original_price','$set_price','$categories','$uid')";
        $run = mysqli_query($conn, $sql);
        if (move_uploaded_file($tempname, $target_file) == true) {
            header('location:./sellerindex.php');
            echo "sucessfully uploaded";
        } else {
            header('location:./sellerindex.php');
            echo "not uploaded";
        }
    }
} else {
    header("location:loginf.php");
}
