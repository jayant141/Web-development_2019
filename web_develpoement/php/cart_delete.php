<?php
session_start();
if (isset($_SESSION["uid"])) {
    //echo "session in progress";
    // header('location:index.php');
    include('./connect.php');
    $uid = $_SESSION['uid'];
    if (isset($_POST['delete'])) {
        $query_cart = "SELECT `item_id`, `item_name`, `item_price`, `use_id` FROM `cart` WHERE `use_id` = '$uid' ";
        $run_cart = mysqli_query($conn, $query_cart);
        $data = mysqli_fetch_assoc($run_cart);
        $item_id = $data['item_id'];
        
        $query_delete = "DELETE FROM `cart` WHERE `item_id` ='$item_id'";
        $run_delete = mysqli_query($conn, $query_delete);
        header('location:cart.php');

        echo "Succesfully deleted....!!";
    }
} else {
    header("location:loginf.php");
}
