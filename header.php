<?php 
    session_start(); 
?>
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<meta name="description" content="This is an example"> 
<meta name=viewport content="width=device-width,initial-scale=1"> 
<title></title> 
<!--Link to css styles sheet-->
</head> 
<body> 
<header>
        <a href="#"> 
            <img src="Images/Haikyuu-logo.png" alt="logo"> 
        </a> 
</header> 

        <?php
            if(isset($_SESSION['userId'])){ 
                echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form> ';
                    
            }else{
                echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button> 
            </form> 
            <a href="signup.php">Signup</a>'; 
            
            }
        ?>

       

   
