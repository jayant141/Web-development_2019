<?php
session_start();
if (isset($_SESSION["uid"])) {
    header("location:index2.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="box">
        <h1>Login</h1>
        <form name="Login" action="login.php" onsubmit="return validate(this) " method="Post">
            <div class="textbox">
                <input type="Email" placeholder="Email" name="mail" value="" required>
            </div>
            <div class="textbox">
                <input type="Password" placeholder="Password" name="pass" value="" required="">
            </div>
            <a href="../Forget%20password" style="color: white; text-align: right;">
                <h4>Forgot Password? </h4>
            </a>
            <input class="btn" type="submit" name="btn" value="Sign In">
            <a href="./registration.php" style="color: white; text-align: center;">
                <h4 class="sign">Not a Member? Sign up now </h4>
            </a>
    </div>
    </form>
    <script>
        function validate(this_form) {
            var password = this_form.pass.value;
            var regex_password = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            errors = [];
            if (password.length < 8) {
                errors.push("Your password must be at least 8 characters");
            }
            if (password.search(/[a-z]/i) < 0) {
                errors.push("Your password must contain at least one letter.");
            }
            if (password.search(/[0-9]/) < 0) {
                errors.push("Your password must contain at least one digit.");
            }
            if (password.search(/[!@#$%^&*]/) < 0) {
                errors.push("Your password must contain at least one charactor.");
            }
            if (errors.length > 0) {
                alert(errors.join("\n"));
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
<?php
include("./connect.php");
if (isset($_POST["btn"])) {
    $username = $_POST["mail"];
    $password = $_POST["pass"];
    $query = "SELECT `user_id`, `Fname`, `Lname`, `Email`, `P_number` FROM `user` WHERE `Email`= '$username' AND `passsword`= '$password'";
    $run = mysqli_query($conn, $query);
    //$data= mysqli_fetch_assoc($run);
    $row = mysqli_num_rows($run);
    echo $row;
    if ($row < 1) {
        ?>
        <script>
            alert("enter correct credentials");
            window.open("login.php", "_self");
        </script>
<?php
    } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data["user_id"];
        echo "id=" . $id;
        session_start();
        $_SESSION["uid"] = $id;
        header("location:index2.php");
    }
}
?>