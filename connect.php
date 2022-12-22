<?php
	$con = new mysqli('localhost','root', '', 'test');
	if (!$con){
		echo 'Not connected';
	}
	if (!mysqli_select_db($con, 'test')) {
		echo 'datebase not selected';
	}
	if (isset($_POST['registers'])){
		register();
	}
	if (isset($_POST['login'])){
		login();
	}
	function register(){
		global $con;
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$gender = $_POST['gender'];
		$sql = "INSERT INTO registration (email, password, cpassword, gender) VALUES ('$email', '$password','$cpassword', '$gender')";
		if(!mysqli_query($con, $sql)){
			echo 'SIGN UP FAIL';
		}
		else
		{
			echo 'SUCCESFULLY SIGN UP !! <br> Your Item Code is T0316 <br> You will be notice through email for payment soon <br> Thank You';
		}
	}
	function login(){
		global $con;
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
		if(!mysqli_query($con, $sql)){
			echo 'LOGIN FAIL';
		}
		else
		{
			echo 'SUCCESFULLY LOGIN !! <br> Your Item Code is T0315 <br> You will be notice through email for payment soon <br> Thank You';
		}
	}	
?>