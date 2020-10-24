<?php
    require "header.php"; 
?>

    <main> 
       <h1>Signup</h1>
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
       <!--include class from css style sheet to make it look fancy-->
       <form action="includes/signup.inc.php" method="post">
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
            <button type="submit" name="signup-submit">Signup</button>
            </form>
    </main> 

<?php
    require "footer.php"
?>
