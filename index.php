<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='body'>    
    <div class='container' style='background : #a4d446 '>
        <h1 style = 'color:black'>Login</h1>
        
            <form action="Login.php" method="post">
            username : <br> <input type="text" name="user" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>"><br><br>
            password : <br> <input type="password" name="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>"><br><br>
            <input type="submit" name="login" value="login">
            </form>
            <span>
                <?php
                    if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                ?>
            </span>
            
        </div>
        </div> 
       
</body>
<style>
.container{
    margin-top:50px ;
    padding:100px ;
    border-radius:25px;
    
}
body{
    background-image:url('bg.jpg');
    background-attachment: fixed;
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<script src="js/bootstrap.min.js"></script>
</html>