<?php
	if(isset($_POST['login'])){
		
		session_start();
		include('connect.php');
	
		$username=$_POST['user'];
		$password=$_POST['password'];
	
		$query=mysqli_query($connect,"select * from `users` where username='$username' && password='$password'");
	
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Gagal Silahakn cek inputan anda";
			header('location:index.php');
		}
		else{
			$row=mysqli_fetch_array($query);
			setcookie("user", $row['username'], time() + (86400 * 30)); 
			setcookie("pass", $row['password'], time() + (86400 * 30)); 
			$_SESSION['user']=$row['username'];
			header('location:success.php');
		}
	}
	else{
		header('location:index.php');
		$_SESSION['message']="silahkan login kembali!";
	}
?>