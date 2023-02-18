<?php

require_once 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";

// make a database connection
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="beginer.css">
</head>
<body>
    <div class="menu-bar">
        <img class="logo" src="logo.png" alt="" srcset="">
        <ul>
            <div class="name">
                    <h3 class="name1"> Name</h3>
                    <h3 class="role1"> Role</h3>
            </div>
            <div class="tna">Home </div>
            <div class="lus">Profile</div>
            <div class="at">About Attack</div>

        </ul>
        
    
    <div class="container">
        <div class="split left">
            <h3 class="pro">Beginer</h3>
            <div class="indent"><a href="profile.html">Dasdboard</a>>><a href="selecta.html">Assign</a> >> <a 								href="profile.html">Beginer</a></div>
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
                <div><h3 class="pro1">Select the attack You want to assign for beginer</h3></div>
                <form method='POST' action='/set.php'>
                    <div class=" split1 ">
                        <div class="container">
                            <select name="" id="first">
                                <option value=""> Select the system </option>
                            </select>
                            <select name="" id="second">
                                <option value=""> Select the tatic </option>
                            </select>       
                            <select name="" id="third">
                                <option value=""> details of tatic is below </option>
                            </select>
                            <select name="" id="analyse">
                                <option value=""> select the analyst </option>
                                <?php 
					$stmt = $pdo->prepare('SELECT * FROM LOGIN WHERE role=?');
					$stmt->execute(["Analyst"]);
					$data = $stmt->fetchAll();
					foreach ($data as $row) {
				?>
                                <option value=""> <?php 
    								echo $row[1];
							}
                                		?>
                                </option>
                            </select>
                        </div>    
                    </div>
                    <button type="submit" class="button1">ATTACK</button>
                </form>    
            </div>
        </div>  
    </div>
</div>
<script>
    var subjectObject = {
    "linux": {
      "OS Credential Dumping: /etc/passwd and /etc/shadow-T1003.008": ["Credential Access"],
      "System Service Discovery - T1007": ["Discovery"],
      "Masquerading: Rename System Utilities - T1036.003": ['Defense Evasion'],
      "System Network Connections Discovery - T1049": ["Discovery"],
      "Scheduled Task/Job: Cron - T1053.003": ['Execution'],
      "Input Capture: Keylogging - T1056.001": ['Credential Access'],
    },
    "windows": {
        " Email Collection: Local Email Collection - T1114.001": ["Collection"],
      " Remote Access Software - T1219": ["Command and Control"],
      "OS Credential Dumping - T1003.001": ['Credential Access'],
      "OS Credential Dumping - T1003.002": ["Credential Access"],
      "OS Credential Dumping - T1003.003": ['Credential Access'],
      "Unsecured Credentials: Credentials In Files - T1552.001": ['Credential Access'],
      "Unsecured Credentials: Credentials in Registry - T1552.002": ['Credential Access'],
      "Unsecured Credentials: Group Policy Preferences - T1552.006": ['Credential Access'],
    },
    "web application":{
      "Denial Of Service" : ['Documents'],
      "Web Defacement" : ['Create TABLE'],
    }
}



window.onload = function(){
    var first = document.getElementById('first')
    var second = document.getElementById('second')
    var third = document.getElementById('third')

    for(var x in subjectObject){
        // console.log(x);
        first.options[first.options.length] = new Option(x)
    }

    first.onchange = function(){
        second.length = 1
        third.length = 1

        second.style.display = 'block'
        third.style.display = 'none'

        for(var y in subjectObject[this.value]){
            // console.log(y);
            second.options[second.options.length] = new Option(y)
        }
    }


    second.onchange = function(){
        third.length = 1

        third.style.display = 'block'
        z = subjectObject[first.value][this.value]
        //console.log(z);
        for(let i=0; i<z.length; i++){
            third.options[third.options.length] = new Option(z[i])
        }
    }
}
</script>
</body>
</html>
