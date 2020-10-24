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
    <nav> 
        <a href="#"> 
            <img src="Images/Haikyuu-logo.png" alt="logo"> 
        </a> 
    <div>
       <?php
           if(isset($_SESSION['userId'])){
            echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form> ';
           }
           else{
               echo '<button type = "submit">Login</button>';
           }
       ?>
    </div> 
    </nav>
</header> 
<main> 
    <?php 
        if(isset($_SESSION['userId'])){ 
                echo '<p>You are logged in!</p>';  
                echo '<nav class="navigation navsize">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Zen.html">Zen Garden</a></li>
                    <li><a href="schedule.php">Schedule</a></li>
                    <li><a href="selfcaree.html">Self-Care</a></li>
                </ul>
            </nav>';
            }else{
                echo '<p>You are logged out!</p>'; 
                echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button> 
                </form> 
                <a href="signup.php">Signup</a>'; 
            
            }
    ?>
</main> 
<footer> </footer> 
</body>
</html> 
