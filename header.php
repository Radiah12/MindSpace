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
<link rel="stylesheet" href="style.css">
</head> 
<body> 
<header>
    <h1>
        <a href="#"> 
            <img src="Images/Haikyuu-logo.png" alt="logo"> 
        </a> 
    </h1>
</header> 
    
    <section>
        <?php
            if(isset($_SESSION['userId'])){ 
                echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form> ';
                    
            }else{
                echo '<form action="includes/login.inc.php" method="post">
            <br><br>
            <label>Your Username/Email</label>
            <input type="text" name="mailuid" placeholder="Username/email">
            <br><br>
            <label>Your Password</label>
            <input type="password" name="pwd" placeholder="Password...">
            <br><br>
            <button type="submit" name="login-submit">login</button>
            <a href="signup.php" id="signup" >Signup</a>
            </form>'; 
            
            }
        ?>
    </section>
  </body>
    

       

   
