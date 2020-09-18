<?php
include 'modules/sessions.php';
include 'modules/connection.php';
date_default_timezone_set('Africa/Lagos');
$time = time('M/D/Y');
$track_url = $_SERVER['PHP_SELF'];

if(isset($_POST['buy'])){
    $product_name = $_SESSION['product_name'];
    $product_id = $_SESSION['product_id'];
    $price = $_SESSION['product_price'];
    $quantity = $_POST['qty'];
    $owner = $_SESSION['owner'];
    $cus_name = $_POST['fname'].$_POST['lname'];
    $cus_email = $_POST['email'];
    $cus_phone = $_POST['phone'];
    $cus_address = $_POST['address'];
    $state = $_POST['state'];

    $sql = "INSERT INTO sales (product_name,product_id,price,qty,owner,
    order_date,customer_name,customer_email,customer_phone,customer_address,state) 
    VALUES(:pname,:pid,:price,:qty,:owner,:order_date,
    :cus_name,:cus_email,:cus_phone,:cus_address,:state)";

    $stmt = $dbconnect->prepare($sql);
    $stmt->bindvalue(':pname',$product_name);
    $stmt->bindvalue(':pid',$product_id);
    $stmt->bindvalue(':price',$price);
    $stmt->bindvalue(':qty',$quantity);
    $stmt->bindvalue(':owner',$owner);
    $stmt->bindvalue(':order_date',$time);
    $stmt->bindvalue(':cus_name',$cus_name);
    $stmt->bindvalue(':cus_email',$cus_email);
    $stmt->bindvalue(':cus_phone',$cus_phone);
    $stmt->bindvalue(':cus_address',$cus_address);
    $stmt->bindvalue(':state',$state);
    $Execute = $stmt->execute();
    
    if($Execute){
        $_SESSION['order_success'] = 'success';
        header('Location:order-confirmation.php');
    }
    else {
        $_SESSION['errorInfo'] = "Failure: Your order was not processed. 
        Contact support for assistance";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Payment</title>
</head>
<body>
    <div class="container">
        <?php
            echo errorInfo();
            echo successInfo();

        ?>
        <form action="process-order.php" method="POST">           
            <br>
            <div class="form-row">
                <div class="form-group col-md-8">
                  <input type="text" class="form-control" value="<?php echo $_SESSION['product_name']?>" readonly>
                </div>
                <div class="form-group col-md-4" style="font-style: italic;">
                  <input type="number" name="qty" class="form-control" placeholder="Quantity" style="font-style: italic;">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="fname" placeholder="First Name" style="font-style: italic;">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="lname"  placeholder="Last Name" style="font-style: italic;">
                </div>
            </div>
            <div class="form-group" >
                <input type="email" class="form-control" name="email" placeholder="Email Address " style="font-style: italic;">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="Phone number" style="font-style: italic;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Delivery Address" style="font-style: italic;">
            </div>
            <div class="form group">                       
                <select name="state" class="form-control" style="font-style: italic;">
                    <option>State</option>
                    <option>F.C.T</option>
                    <option>Edo</option>
                    <option>Kogi</option>
                    <option>Bauchi</option>
                    <option>Osun</option>
                    <option>Ogun</option>
                    <option>Ondo</option>
                    <option>Ekiti</option>
                </select>
            </div>
            <br>
            <button type="submit" name="buy" style="background-color: blue; color: white; border-radius: 50px; width: 110px; height:50px ;">PAY</button>
        </form>
    </div>
</body>
<footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</footer>
</html>