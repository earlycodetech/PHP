<?php
include 'modules/sessions.php';
    $_SESSION['product_id'] = 12;
    $_SESSION['owner'] = 5;
    $_SESSION['product_name'] = 'Infinix S5 pro';
    $_SESSION['product_price'] = 32800;

?>
<!DOCTYPE html>
<html>
    <head>
        <link href= "css/oja.css" rel= "stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Infinix S5 pro</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="img/infinix-s5-pro-1.jpg">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6" id="div2">
                    <h2 id="h21">#99,000</h2><hr>
                    <h1 id="h11">FEATURES</h1>
                    <ul id="ul1">
                        <li>6.53-inch IPS Display, 1080 x 2340 pixels (395 ppi)</li>
                        <li>Android 10</li>
                        <li>Octa-core Mediatek Helio P35 Processor</li>
                        <li>4GB RAM / 6GB RAM</li>
                        <li>64GB / 128GB Built-in Storage, with Micro-SD Support</li>
                        <li>48MP + 2MP+ QVGA Triple Rear Camera (Alternate Model: with 16MP + 2MP + QVGA Camera or )</li>
                        <li>40MP Front Motorized Popup Camera (Alternate Model: 32MP Camera)</li>
                        <li>4G LTE</li>
                        <li>Fingerprint Sensor (Rear)</li>
                        <li>4000 mAh Non-Removable Li-Po Battery</li>
                    </ul>
                </div>
            </div><br>
            <marquee behavior="left" style="background-color: aqua;">
                <img src="img/Infinix-s5-pro.jpg"  width="500" height="500" alt="phone">
                <img src="img/infinix-s5.jpg" width="500" height="500" alt="phone">
                <img src="img/Infinix-Hot-S5-1.jpg" width="650" height="500" alt="phone">
                <img src="img/inf.jpg" width="500" height="500" alt="phone">
            </marquee>
            <h1 id="h11">FEATURES</h1>
            <ol id="ol1">
                <li>6.53-inch IPS Display, 1080 x 2340 pixels (395 ppi)</li>
                <li>Android 10</li>
                <li>Octa-core Mediatek Helio P35 Processor</li>
                <li>4GB RAM / 6GB RAM</li>
                <li>64GB / 128GB Built-in Storage, with Micro-SD Support</li>
                <li>48MP + 2MP+ QVGA Triple Rear Camera (Alternate Model: with 16MP + 2MP + QVGA Camera or )</li>
                <li>40MP Front Motorized Popup Camera (Alternate Model: 32MP Camera)</li>
                <li>4G LTE</li>
                <li>Fingerprint Sensor (Rear)</li>
                <li>4000 mAh Non-Removable Li-Po Battery</li>
            </ol>
            <a href="process-order.php" id="link"><button style="background-color: blue; color: black; border-radius: 50px; width: 200px; height:80px ; font-size: 30px;">Check Out</button></a>
        </div>
    </body>
    <footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </footer>
</html>