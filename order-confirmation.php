<?php
include 'modules/sessions.php';
$product = $_SESSION['product_name'];
$track_url = $_SERVER['PHP_SELF'];

if (!isset($_SESSION['order_success'])) {
    header("Location: infinix-x5-pro.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link href= "css/oja.css" rel= "stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Infinix S5 pro</title>
    </head>
    <body>
        <div class="container" style="margin-top:60px">
        <div class="alert alert-success" role="alert">
            <h2>Order Confirmation</h2>
            <p>
                Your order for <strong><?php echo $_SESSION['product_name'];?></strong> was successful.
                If you need additional information concerning your order, please contact support.<br>
                If you want to track your order, please visit
                <a href="#">Track my order</a>
            </p>
        </div>
        </div>
    </body>
</html>