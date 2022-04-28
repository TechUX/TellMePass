<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$accname=$_POST['accname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql = "INSERT INTO `accounts`( `accname`, `email`, `phone`, `username`, `password`) 
		VALUES ('$accname','$email','$phone','$username','$password')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$accname=$_POST['accname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql = "UPDATE `accounts` SET `accname`='$accname',`email`='$email',`phone`='$phone',`username`='$username',`password`='$password' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `accounts` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM accounts WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>