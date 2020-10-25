<!DOCTYPE html>
<html>
 <head> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zen Garden</title>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link href = "../style.css" rel = "stylesheet" >
</head>
<style> 
* {box-sizing:border-box}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

img{
  width: 100%;
}
</style>
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
 <img src= "../Images/logo.jpg" style="width:200px"> 
 <ul>
  <li><a href="../SelfCare/selfcare.php">Self-Care</a></li>
        <li><a href="Schedule.php" >Schedule</a></li>
  <li><a href="ZenGarden.php">Zen Garden</a></li>
  <li><a href="MealIdeas.php">Meal Organizer</a></li>
  <li><div>
    <?php
        if(isset($_SESSION['userId'])){
         echo '<form action="includes/logout.inc.php" method="post">
             <button type="submit" name="logout-submit">Logout</button>
         </form> ';
        }
        else{
          echo '<form action="../includes/login.inc.php" method="post"><button style="margin-left:20%" type="submit">Login</button></form>';;
        }
    ?>
 </div></li>
  </ul>
</header>
  <main id = "content">
    <div id = "image-container">
    </div>
    <audio autoplay loop>
      <source src="MeditationMusic.mp3" type="audio/mpeg">
      </audio>
  </main>


<script>
var picIndex = 0;
var pictures = ['Images/Background.jpg','Images/Mountainscape Art.jpg', 'Images/Beach Art.jpg', 'Images/Study Art.jpg']
showSlides();

function showSlides() {
  // var slides = document.getElementsByClassName("mySlides");
  document.getElementById('image-container').innerHTML = '<img class = "fade" src="' + pictures[picIndex] + '">';
  picIndex++;
  if (picIndex == pictures.length) {picIndex = 0;}
  // slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

</script>

</body>








</html> 