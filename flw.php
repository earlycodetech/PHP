
<?php
//these sessions were created from another file 
$course_title = $_SESSION['course_title'];
$tuition = $_SESSION['tuition'];
$duration = $this_course['duration'];
$user_phone = $_SESSION['phone'];
$user_email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
</head>
<body>
    <div class="card pay">
        <div class="card-header">
            <h5>Course: <?php echo $course_title; ?></h5>
            <h6>Duration: <?php echo $duration; ?> weeks</h6>
            <h6>Course fee: ₦<?php echo $tuition; ?></h6>
        </div>
        <div class="card-body">
            <!-- //// begins flutterwave payment code //// -->
            <small>Pay online with your debit card</small>
            <input type="submit" class="btn btn-success btn-lg w-100" style="cursor:pointer;" value="Pay Now" id="submit" />
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!-- using flutterwave inline payment method -->
            <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
            <script type="text/javascript">
                document.addEventListener("DOMContentLoaded", function(event) {
                document.getElementById('submit').addEventListener('click', function () {
                    
                    //change to your API public key                     
                    var flw_ref = "", chargeResponse = "", trxref = "FDKHGK"+ Math.random(), API_publicKey = "FLWPUBK-3-------------------------X";
                    //json_encode convert a PHP data/variable to a JavaScript format
                    var total_ea = <?php echo $tuition;?>;
                    var email_ea = <?php echo (json_encode($user_email)); ?>;
                    var phone_ea = <?php echo (json_encode($user_phone)); ?>;
                    var ref_ea = <?php echo(json_encode($trnref)); ?>;

                    getpaidSetup(
                    {
                    PBFPubKey: API_publicKey,
                    customer_email: email_ea,
                    amount: total_ea,
                    customer_phone: phone_ea,
                    currency: "NGN",
                    txref: ref_ea,
                    meta: [{metaname:"EA-NG", metavalue: "NG"}],
                    onclose:function(response) {
                    },
                    callback:function(response) {
                        txref = response.data.txRef, chargeResponse = response.data.chargeResponseCode;
                        if (chargeResponse == "00" || chargeResponse == "0") {
                        //send user to a failure page if payment fails
                        window.location = "payment-failed.html";
                        } else {
                        //send user to a success page
                        window.location = "thank-you.html";
                        }
                    }
                    });
                    });
                });
            </script>
        </div>
    </div>
</body>
</html>  
