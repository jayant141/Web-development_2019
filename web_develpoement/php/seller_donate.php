<?php
include('./connect.php');
if (isset($_POST['yes'])) {
    $query_yes = "UPDATE `donate` SET `confirmation`= 1 WHERE `item_id`='$item_id' AND `Donater_id`= '$uid'";
    echo $query_yes;
    $run_yes = mysqli_query($conn, $query_yes);
    $data_yes = mysqli_fetch_assoc($run_donate);
}
if (isset($_POST['no'])) {
    $query_no = "UPDATE `donate` SET `confirmation`= 0 WHERE `item_id`='$item_id' AND `Donater_id`= '$uid'";
    echo $query_no;
    $run_no = mysqli_query($conn, $query_no);
    $data_no = mysqli_fetch_assoc($run_donate);
}
