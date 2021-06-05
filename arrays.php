<?php
//temperature every 4 hours
$temp = array(23,25,28,30,28,24);

// print_r($temp);

// echo $temp[1];

// $league = array('MANU'=>32,'MANC'=>33,'ARSN'=>28);
// echo $league['MANU'];

$epl = array(
    'MANU'=>array(
        'name'=>'Manchester United',
        'points'=>32, 
        'goals'=>56,
        'won'=>8,
        'lost'=>1,
        'draw'=>3
    ),
    'MANC'=>array(
        'name'=>'Manchester City',
        'points'=>33, 
        'goals'=>59,
        'won'=>8,
        'lost'=>0,
        'draw'=>1
    ),
    'ARSN'=>array(
        'name'=>'Arsenal Footbal Club',
        'points'=>30, 
        'goals'=>51,
        'won'=>5,
        'lost'=>3,
        'draw'=>2
    )
);

$team1 = 'MANU';
$team2 = 'ARSN';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3 - Arrays</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card mt-4 pt-3" style="width: 600px; margin: 0 auto">
            <h1 class="text-center">Premiere League Table</h1>
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <!-- team 1 -->
                        <h2 class="text-center"><?php echo $team1 ?></h2>
                        <p class="text-center"><?php echo $epl[$team1]['points'] ?></p>
                        <p class="text-center"><?php echo $epl[$team1]['goals'] ?></p>
                        <p class="text-center"><?php echo $epl[$team1]['won'] ?></p>
                        <p class="text-center"><?php echo $epl[$team1]['lost'] ?></p>
                        <p class="text-center"><?php echo $epl[$team1]['draw'] ?></p>
                    </div>
                    <div class="col">
                        <!-- stats -->
                        <h2 class="text-center">STATS</h2>
                        <p class="text-center">Points</p>
                        <p class="text-center">Goals</p>
                        <p class="text-center">Won</p>
                        <p class="text-center">Lost</p>
                        <p class="text-center">Draw</p>
                    </div>
                    <div class="col">
                        <!-- team 2 -->
                        <h2 class="text-center"><?php echo $team2 ?></h2>
                        <p class="text-center"><?php echo $epl[$team2]['points'] ?></p>
                        <p class="text-center"><?php echo $epl[$team2]['goals'] ?></p>
                        <p class="text-center"><?php echo $epl[$team2]['won'] ?></p>
                        <p class="text-center"><?php echo $epl[$team2]['lost'] ?></p>
                        <p class="text-center"><?php echo $epl[$team2]['draw'] ?></p>
                        <img src="images/manu.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

