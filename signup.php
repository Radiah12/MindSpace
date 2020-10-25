<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<meta name="description" content="This is an example"> 
<meta name="viewport" content="width=device-width,initial-scale=1"> 
<title></title> 
<link rel="stylesheet" href="style.css">
<style></style>
</head>
<body>
<div class="dropdown">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="#">Home</a>
            <a href="../Schedule/schedule.php">Schedule</a>
            <a href="../ZenGarden/ZenGarden.php">Zen Garden</a>
            <a href="../MealPage/mealpage.php">Meal Organizer</a>
            <a href="../SelfCare/selfcare.php">Self-Care</a>
            <a href="#">Settings</a>
        </div>
    </div>
<header> 
    <img src= "Images/logo.jpg" style="width:200px"> 
    <ul>
    <li><a href="Self-Care.php">Self-Care</a></li>
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
       <h1>Sign Up</h1>
       <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){ 
                    echo '<p>Fill in all fields!</p>'; 
                }else if ($_GET['error'] == "invalidmailuid"){ 
                    echo '<p>Invalid username and email</p>';
                }else if($_GET['error'] == "invalidmail"){ 
                    echo '<p>Invalid email</p>';
                }else if($_GET['error'] == "invaliduid"){ 
                    echo '<p>Invalid Username</p>'; 
                }else if ($_GET['error'] == "passwordcheck"){ 
                    echo '<p>Your passwords do not match</p>'; 
                }else if($_GET['error'] == "usertaken"){ 
                    echo '<p>Username is already taken!</p>';
                }

            }
       ?>
       <form action="includes/signup.inc.php"  style = "text-align:center;" method="post">
            <br><br>
            <label>New Username</label>
            <input type="text" name="uid" placeholder="Username">
            <br><br>
            <label>Your Email</label>
            <input type="text" name="mail" placeholder="Email">
            <br><br>
            <label>New Password</label>
            <input type="password" name="pwd" placeholder="Password">
            <br><br>
            <label>Repeat Password</label>
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <br><br>
            <button type="submit" name="signup-submit">Sign Up</button>
            </form>
    </main>
</body>
</html>