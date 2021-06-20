<?php
    require 'database.php';
    $id = null;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     

    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['card_id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM patreg  WHERE card_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id ));
        Database::disconnect();
        header("Location: user data.php");
        }

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM patreg where email = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
    
?>

 
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        
        <style>
        html {
            font-family: Arial;
            display: inline-block;
            margin: 0px auto;
        }
        
        textarea {
            resize: none;
        }

        ul.topnav {
            list-style-type: none;
            margin: auto;
            padding: 0;
            overflow: hidden;
            background-color: #4CAF50;
            width: 70%;
        }

        ul.topnav li {float: left;}

        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

        ul.topnav li a.active {background-color: #333;}

        ul.topnav li.right {float: right;}

        @media screen and (max-width: 600px) {
            ul.topnav li.right, 
            ul.topnav li {float: none;}
        }

        body {
            background-image: url("img2.jpg");
            background-repeat: no-repeat;
            background-position: center;
        }

        h3 {
            color: #030303;
            font-family: Times New Roman;
            font-size: 200%;
            padding-bottom: 7%;             
        }
        h2 {
            font-family: Times New Roman;
            font-size: 250%;

        }

        form{
            background-color: white;
        }
        /*.control-group{*/
            /*padding-top: 34%%;*/

        /*}*/

        </style>
        
        <title>Edit</title>
        
    </head>
    <body>

        <h2 align="center">Shifa International Hospital: Care with Compassion</h2>
        
        <div class="container">
     
            <div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
                <div class="row">
                    <h3 align="center">Edit Patient Data</h3>
                    <p id="defaultGender" hidden><?php echo $data['gender'];?></p>
                </div>
                
<!-- 
                <form class="form-horizontal" action="user data delete page.php" method="post">
                <p class="alert alert-error">Are you sure to update ?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <a class="btn" href="user data.php">No</a>
                </div>


                </form> -->
                

                <form class="form-horizontal" action="updateDB.php" method="post">
                    <p class="alert alert-error">Are you sure to update ?</p>

                    <div class="control-group">
                        <label class="control-label" >ID</label>
                        <div class="controls">
                            <input name="id" type="text"  placeholder="" value="<?php echo $data['card_id'];?>" readonly>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="" value="<?php echo $data['fname'];?>" required>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Gender</label>
                        <div class="controls">
                            <select name="gender" id="mySelect">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="" value="<?php echo $data['email'];?>" required>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Mobile Number</label>
                        <div class="controls">
                            <input name="mobile" type="text"  placeholder="" value="<?php echo $data['contact'];?>" required>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-danger">Update</button>
                        <a class="btn" href="user data.php">Back</a>
                    </div>
                </form>
            </div>               
        </div> <!-- /container -->  
        
        <script>
            var g = document.getElementById("defaultGender").innerHTML;
            if(g=="Male") {
                document.getElementById("mySelect").selectedIndex = "0";
            } else {
                document.getElementById("mySelect").selectedIndex = "1";
            }
        </script>
    </body>
</html>