<?php
//Send user and automatic email for any particular event. For example, when a user completes registration on your web app.
//In this example, we will get the user's email from the form he fills below and send him a confirmation email that his registration was successful.
//Please note that the PHP mail() function will only work on a live server - that means that it will only work when you have hosted your web app.

if(isset($_POST['signup'])){
  $to = $_POST['email'];
  
  // The message
  $message = "Thank you for signing up for our newletter.\r\We will be sending you some interesting contents.\r\nStay tuned!";

  // In case any of our lines are larger than 70 characters, we should use wordwrap()
  $message = wordwrap($message, 70, "\r\n");
  
  //this is optional
  $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  // Send
  mail($user_email, 'Welcome to Our Newsletter', $message,$headers); //remember that the last argument ($headers) is optional, but recommended
}

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
  <h1>Sign up for our newsletter</h1>
  <form method="POST">
    <input type="email" name="email" placeholder="your email">
    <input type="text" name="fullname" placeholder="your full name">
    <button type="submit" name="signup">Sign up </button>
  </form>
</body>
</html>  
