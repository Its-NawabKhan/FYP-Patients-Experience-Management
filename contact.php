<?php 
$con=mysqli_connect("localhost","root","","rfid_db");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$contact = $_POST['txtPhone'];
	$message = $_POST['txtMsg'];
	$message1 = $_POST['cleanliness'];
	$message2 = $_POST['staff_behaviour'];
	$message3 = $_POST['doctor_behaviour'];
	$message4 = $_POST['visit'];


	$query="insert into contact(name,email,contact,message, cleanliness, staff_behaviour, doctor_behaviour, visit) values('$name','$email','$contact','$message','$message1','$message2','$message3','$message4');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Message sent successfully!");'; 
		echo 'window.location.href = "contact.html";';
		echo '</script>';
    }
}




