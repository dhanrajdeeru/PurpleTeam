<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="menu-bar">
        <img class="logo" src="logo.png" alt="" srcset="">
        <ul>
            <div class="name">
                    <h3 class="name1"> Ashwin K</h3>
                    <h3 class="role1"> Intern</h3>
            </div>
            <div class="tna">Home </div>
            <div class="lus">Profile</div>
            <div class="at"> <a href='index.html'> Logout </a></div>

        </ul>
        
    
    <div class="container">
        <div class="split left">
            <h3 class="pro">DASH BOARD</h3>
                <div class="score ds">
                    <label class="ds1">20</label><br><label class="text1">Defend</label>
                    

                </div>
                <div class="score as">
                    <label class="as1">20</label><br><label class="text2">Attack</label>
                    
                </div>
                <div class="sfm1">
                    <h3 class="sfm"> Success and Failure merits</h3>
                </div>
            </div>
        </div>
        <div class="split right">
            <div class="righ">
                <h3 class="r1">Choose your strategy : Attack or Defend ?</h3>
                <div class="button">
                    <button type="submit" class="attack1" onclick="window.location.href = 'assign.php';">ATTACK</button>
                    <button type="submit" class="defend1">DEFEND</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
