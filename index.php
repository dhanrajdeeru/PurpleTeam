<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="split left"> 
        <img src="Capture.PNG" class="pic">

    </div>
    <div class=" split right">
        <img class="logo" src="logo.png" >
            <div class="centered">
                <div class="heading">
                    <label class="l1">HELLO, Welcome to Purple Teaming</label> <br>
                    <label class="l2">To continue, Please enter your detail</label>
                </div>
                <div class="formlogin">
                    <form id='login' class='input-group-login' method='POST' action='/login.php'> <!---login code----->
                        <input type='text'class='input-field'id='id'name='id'placeholder='Email Id' required > <!-- E-mail entry----->
                        <input type='password'class='input-field'id='passw'name='passw'placeholder='Enter Password' required> <!-- password entry----->
                        <div class="rember"><label ><input type='checkbox'class='check-box'><span class="sp">Remember Password</span></label> <!-- remembre password option----->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span ><a class="fp" href="forpassword.html"> Forgot Password?</a></span> <!-- forgot button option-----></div>
                        <br>
                        <button type='submit'class='submit'>Log in</button>  <!-- login button----->
                        <label class="l3"> </label>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>