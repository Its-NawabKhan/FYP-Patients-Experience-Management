<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $timestamp = date('y-m-d h:i:s');
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_the_iot_projects (name,id,gender,email,mobile,time_stamp) values(?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$gender,$email,$mobile,$timestamp));
		// Database::disconnect(); 
		// $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE patreg SET card_id=RIGHT(?, 8) WHERE email=?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id, $email));
		################


		Database::disconnect(); 
		header("Location: user data.php");
    }
?>