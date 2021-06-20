<?php
    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     

    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM patreg  WHERE email = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id ));
        Database::disconnect();
        header("Location: user data.php");
        }
         
    
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <title>Delete</title>
</head>
 <style>
body {
            background-image: url("img2.jpg");
            background-repeat: no-repeat;
            background-position: center;
        }       h3 {
            color: #030303;
            font-family: Times New Roman;
            font-size: 200%;
            padding-bottom: 7%;     
                    
        }
        h2 {
            font-family: Times New Roman;
            font-size: 250%;

 
</style>
<body>
    <h2 align="center">Shifa International Hospital: Care with Compassion</h2>

    <div class="container">
     
        <div class="span10 offset1">
            <div class="row">
                <h3 align="center">Delete Patient</h3>
            </div>

            <form class="form-horizontal" action="user data delete page.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>"/>
                <p class="alert alert-error">Are you sure to delete ?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <a class="btn" href="user data.php">No</a>
                </div>
            </form>
        </div>
                 
    </div> <!-- /container -->
  </body>
</html>