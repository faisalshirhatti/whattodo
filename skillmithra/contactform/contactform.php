<?php

include 'connection.php';

if(!isset($_POST))
{

	$msg="posting error";
	echo "$msg";
}

else
{
	$message=$_POST['message'];
	$subject=$_POST['subject'];
	$email=$_POST['email'];
	$name=$_POST['name'];

	$sql="INSERT INTO `feedback`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
	$result=mysqli_query($con,$sql);
if(!$result)
{
	$err="Not able to send the Feedback";
	 die(mysqli_error($con));
	
	

}
else
{
	$err="OK";
	echo "$err";
	

}


}