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
    <img src= "Images/logo.jpg" style="width:200px"> 
    <ul>
    <li><a href="Self-Care.html">Self-Care</a></li>
            <li><a href="Schedule.html" >Schedule</a></li>
    <li><a href="ZenGarden.html">Zen Garden</a></li>
    <li><a href="MealIdeas.html">Meal Organizer</a></li>
    <li><div>
       <?php
           if(isset($_SESSION['userId'])){
            echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form> ';
           }
           else{
               echo '<button style="margin-left:20%" type="submit">Login</button>';
           }
       ?>
    </div> </li>
    </ul>
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
                echo '<div style = "text-align: center;"><form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button> 
                </form>
                <a href="signup.php">Signup</a>
                </div>'; 
            
            }
    ?>
</main> 
<footer> </footer> 
</body>
</html> 
