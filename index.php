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
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head> 
<body> 
<div class="dropdown">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="#">Home</a>
            <a href="Schedule/schedule.html">Schedule</a>
            <a href="ZenGarden/ZenGarden.php">Zen Garden</a>
            <a href="MealIdeas/MealIdeas.php">Meal Organizer</a>
            <a href="SelfCare/selfcare.php">Self-Care</a>
            <a href="#">Settings</a>
        </div>
    </div>
<header> 
    <img src= "Images/logo.jpg" style="width:200px"> 
    <ul>
    <li><a href="SelfCare/selfcare.php">Self-Care</a></li>
            <li><a href="Schedule.php" >Schedule</a></li>
    <li><a href="ZenGarden/ZenGarden.php">Zen Garden</a></li>
    <li><a href="MealIdeas/MealIdeas.php">Meal Organizer</a></li>
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

