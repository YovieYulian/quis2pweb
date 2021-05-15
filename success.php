<?php
session_start();
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
    <div class='row ' style='background : #a4d446 ''>
    <h1 style='color:black'>Login Sukses</h1>
    <?php 
    echo ('<h2 >Selamat datang<h2> ' . $_SESSION['user']). '<br>';

    ?>
    <a href="logout.php">logout</a>
    </div>
</body>
<style>
.row{
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
</html>