<?php

    try{
        $db = parse_url(getenv("postgres://yxlicoyvhurguv:e2e8a068e4a705e7ba186fa6b1690cdf0a571da153bd867a88ef8f319e25eeb3@ec2-52-86-116-94.compute-1.amazonaws.com:5432/d8o099bsst9clv"));
        $pdo = new PDO("pgsql:" . sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            $db["host"],
            $db["port"],
            $db["user"],
            $db["pass"],
            ltrim($db["path"], "/")
        ));
    }
    catch{
        echo $e->getMessage();
    }

    ?>
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