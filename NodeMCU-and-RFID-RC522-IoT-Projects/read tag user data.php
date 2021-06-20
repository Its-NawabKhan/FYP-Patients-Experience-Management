<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM `patreg` where `card_id` = RIGHT(?, 8)";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	$current_timeval = date('y-m-d h:i:s');
	$sql = "INSERT INTO `time_record` (`terminal`, `card_id`, `time`) VALUES(LEFT(?, 1), RIGHT(?, 8), ?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($id, $id, $current_timeval));
	Database::disconnect();
	$msg = null;
	if (null==$data['fname']) {
		$msg = "The ID of your Card / KeyChain is not registered !!!";
		$data['card_id']=substr($id, -8);
		$data['fname']="--------";

		$data['gender']="--------";
		$data['email']="--------";
		$data['contact']="--------";
	} else {
		$msg = null;
	}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<style>
		td.lf {
			padding-left: 15px;
			padding-top: 12px;
			padding-bottom: 12px;
		}
		p{
			/*style="color:red;"*/
			color: #030303;
			font-family: Times New Roman;
  			font-size: 200%;
  			text-align: center;
  			background-color: green;
  			padding: 3%;
		}
	</style>
</head>
 
	<body>	
		<div>
			<form>
				<table  width="452" border="1" bordercolor="#10a0c5" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#0cad5a"><font  color="#FFFFFF">
						<b>User Data</b></font></td>
					</tr>
					<tr>
						<td bgcolor="#f9f9f9">
							<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
								<tr>
									<td width="113" align="left" class="lf">Card_Id</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['card_id'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Name</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['fname'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Gender</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['gender'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Email</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['email'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Mobile Number</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['contact'];?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<p ><?php echo $msg;?></p>
	</body>
</html>