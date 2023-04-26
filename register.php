<?php
        include("cmd/user.php");
        if(isset($_POST["txPASS1"])){
            if($_POST["txPASS1"]==$_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email= $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];

            if(createuser($nama, $email, $user,$pass)){

             } else{

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
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">

        <div class="">
            nama lengkap
            <input type="text"name="txNAMA">
        </div>
        <div class="">
            email
        <input type="email"name="txEMAIL">
        </div>

        </div>
        <div class="">
            user name
        <input type="text"name="txUSER">
        </div>
        
        </div>
        <div class="">
            pasword
        <input type="pasword"name="txPASS1">
        </div>
        </div>
        <div class="">
            veripikasi pasword
        <input type="pasword"name="txPASS2">
        </div>
        <div class="">
            <button type="sumbit">register</button>
        </div>

    </form>
    
</body>
</html>