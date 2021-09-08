<?php
session_start();
$extensions = ['jpeg','JPEG','jpg','JPG','png','PNG','pdf','docx','xlsx'];

if (isset($_POST['send'])) {
    $user = $_POST['user-name'];
    $message = $_POST['message'];

    // PROCESS FILE
    $file = $_FILES['attachment'];
    $file_name = $file['name'];
    $file_loc = $file['tmp_name'];
    $file_status = $file['error'];
    $file_size = $file['size'];

    // check for upload error
    if ($file_status == 0) {
        $splitted_name = explode('.',$file_name);
        $file_ext = end($splitted_name);

        //check for file extension
        if (in_array($file_ext,$extensions)) {
            //check for file size (not more 1MB)
            if ($file_size/1000000 <= 1) {
                //move file to permanent folder
                $file_perm_name = $user . '_' . rand(1000,9999) . '.' . $file_ext;
               if ( move_uploaded_file($file_loc,"incoming_files/$file_perm_name")) {
                    $_SESSION['success'] = 'Your message has been sent';
               }
            }else{
                $_SESSION['error'] = 'Your file is more than 1MB';
            }
        }else{
            $_SESSION['error'] = 'You have uploaded and unsupported file format';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Processing - Forms</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-secondary">
    <div class="container py-5">
        <h1>Sending files attachment in form</h1>

        <?php
            if (isset($_SESSION['error'])) {
                $report = "<div class=\"alert alert-danger\">";
                $report .= $_SESSION['error'];
                $report .= "</div>";
                $_SESSION['error'] = null;
                echo $report;
            }

            if (isset($_SESSION['success'])) {
                $report = "<div class=\"alert alert-success\">";
                $report .= $_SESSION['success'];
                $report .= "</div>";
                $_SESSION['success'] = null;
                echo $report;
            }
        ?>

        <form action="form-file.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" name="user-name" class="form-control" placeholder="Your name">
            </div>

            <div class="mb-3">
                <label>Your message</label>
                <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <input type="file" name="attachment" class="form-control">
            </div>

            <button type="submit" class="btn btn-success" name="send">Send Message</button>
        </form>
    </div>
</body>
</html>