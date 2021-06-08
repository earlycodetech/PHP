<?php
// $numbers = array(5,8,9,6,6);
// array_pop($numbers);
// print_r($numbers);

// echo implode('',$numbers);

$age = 34;
$ap_test_score = 54;
$toefl = 72;

$program = '';
$success_msg = 'Congratulations, you have been offered admission into .. program';
$deny_msg = 'Unfortunately we can\'t offer you admission into .. at the moment';

//----------------------
$ebook = 'How a to make 1 m dollars without working';
$name = 'Joe';
$country = 'Niger';

//option 1
if ($country == 'Ghana' && strlen($name) >= 2){
    echo "$ebook has been sent to your email";
}

//option 2
if ($country == 'Ghana'){
    if(strlen($name) >= 2){
        echo "$ebook has been sent to your email";
    }
}
elseif($country == 'Nigeria'){
    echo 'How to Run a Business During Inflation';
}
elseif ($country == 'Cameroon') {
    echo 'How To Make Money Teaching Nigerians French';
}
else{
    echo 'We don\'t have you a gift for your country yet';
}

//-----------------------------------------
$nations = array('Nigeria', 'Ghana','Cameroon');
$user_country = 'Cameroon';

if (in_array($user_country,$nations)) {
    if ($user_country == 'Ghana') {
        echo 'Jollof';
    }
    elseif ($user_country == 'Nigeria') {
        echo 'Ewa goin';
    }
    elseif ($user_country == 'Cameroon') {
        echo 'Party';
    }
}
else{
    echo 'Your country is not on list';
}

//------------------------------------------
//LOOPS
$ext = array(
    'Lagos' => '01',
    'Abuja' => '09',
    'Enugu' => '042'
);

//for loop
for ($counter=1; $counter <= 10; $counter++) { 
    echo $counter;
    echo "<br>";
}

//while loop
$name_len = strlen('Ada');
$check = 1;

while ($check <= $name_len) {
    echo 'Cheers! <br>';
    $check++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th>
            <tr>
                <td>State</td>
                <td>Phone Ext</td>
            </tr>
        </th>
        <tbody>
            <?php
                //foreach loop
                foreach ($ext as $key => $value) {
            ?>

            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value ?></td>
            </tr>
                   
            <?php } ?>
        </tbody>
    </table>
</body>
</html>