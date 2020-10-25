<!DOCTYPE html>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../style2.css">
            <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="dropdown" style="margin:0; width:auto;">
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
     <li><a href="#">Self-Care</a></li>
           <li><a href="Schedule.php" >Schedule</a></li>
     <li><a href="../ZenGarden/ZenGarden.php">Zen Garden</a></li>
     <li><a href="../MealIdeas/MealIdeas.php">Meal Organizer</a></li>
   <li><div>
       <?php
           if(isset($_SESSION['userId'])){
            echo '<form action="../includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form> ';
           }
           else{
               echo '<form action="../includes/login.inc.php" method="post"><button style="margin-left:20%" type="submit">Login</button></form>';
           }
       ?>
</div> </li>
     </ul>
   </header>
    <h1>Self-care</h1>
        <div>
        <h2>Select a skin type</h2>
        <button type="button" class = "carebtn" onclick="Normfunc()">Normal</button>
        <button type="button" class = "carebtn" onclick="Dryfunc()">Dry</button>
        <button type="button" class = "carebtn" onclick="Oilfunc()">Oily</button>
        <button type="button" class = "carebtn" onclick="Combfunc()">Combination</button>
        </div>

        <section>
        <script>
        function Normfunc() { 
        document.getElementById("Char").innerHTML = "<b>Balanced, not oily or dry</b><br>Skin may be oily around the T-zone, but is generally balanced in moisture and has a velvet-like texture. There are no blemishes and the skin is not sensitive. As the person ages, this skin type can become more dry.";
        document.getElementById("Routine").innerHTML = "Follow a basic skin care routine including gentle cleansers, toner, hydrating exfoliants, protective sunscreen, and moisturizer of your desired choosing depending on preferred texture.";
        }
        function Dryfunc() { 
        document.getElementById("Char").innerHTML = "<b>Dull, tight </b><br>The skin lacks sebum to form a protective layer around the skin as the skin looses moisture through perspiration and natural evaporation. There are different magnitudes of dry skin and usual factors include itchiness, cracking, and flakiness."
        document.getElementById("Routine").innerHTML = "Routine includes selecting moisturizing cleaners such as from CeraVe and products against inflammation, applying alcohol-free toners, and daily serums. Use a thicker moisturizer, apply eye cream to hydrate eyes, use sunscreen, and hydrating face masks daily.";
         }
        function Oilfunc() { 
        document.getElementById("Char").innerHTML = "<b>Glossy</b><br>The skin has alot of sebum which arises from several factors including but not limited to makeup and genetics. The skin type is identified through pores and acne, especially observed during puberty.";
        document.getElementById("Routine").innerHTML = "Apply cleansers more often (once in morning and once at night), use an exfoliating toner and creams that curb oil such as through sulfur. Apply moisturizers that are water based and light, use sunscreen and blotting papers, and choose products carefully.";
         }
        function Combfunc() { 
        document.getElementById("Char").innerHTML = "<b>Varies for cheeks and T-zone</b><br>The skin has an oily T-zone that includes the forehead, chin, and nose. The cheeks tend to be more dry, which is different from other parts of the face. Skin is a combination of a lack and abundance of serum.";
        document.getElementById("Routine").innerHTML = "Cleanse skin, exfoliate, and apply serums or boosters. Apply eye cream and sunscreen. During routine, use products that address both oily and dry skin types or do not have a clear target such as those targeted towards sensitive skin. Look for natural ingredients, and lighter moisturizers for your T-zone compared to cheeks.";
         }
        </script>
        <h3>Characteristics</h3>
        <p id="Char">How to identify the skin type through signs and texture</p>
        <h3>Recommended Daily Routine</h3>
        <p id="Routine">Recommended products and processes to be incorporated</p>
        <h4>Further links and information sources</h4>
        <ul>
            <li><a href="https://int.eucerin.com/about-skin/basic-skin-knowledge/skin-types">Skin type knowledge</a></li>
            <li><a href="https://www.paulaschoice.com/expert-advice/skincare-advice/basic-skin-care-tips/normal-skin-and-how-to-care-for-it.html">Normal skin type routine</a></li>
            <li><a href="https://www.thezoereport.com/beauty/skincare/dry-skin-skincare-routine">Dry skin type routine</a></li>
            <li><a href="https://www.healthline.com/health/skin-care-routine-for-oily-skin-2#cleanse">Oily skin type routine</a></li>
            <li><a href="https://www.honest.com/blog/beauty/skin/how-to-perfect-your-combination-skincare-routine/06042012.html">Combination skin type routine</a></li>
        </ul>
    </section>

        <div>
            <h2 class="select">Select a hair type (Oprah Winfrey's classification)</h2>
            <button type="button" class = "carebtn" onclick="func1()">Type 1: Straight</button>
            <button type="button" class = "carebtn" onclick="func2()">Type 2: Wavy</button>
            <button type="button" class = "carebtn" onclick="func3()">Type 3: Curley</button>
            <button type="button" class = "carebtn" onclick="func4()">Type 4: Coiled</button>
            </div>
    
            <section>
            <script>
            function func1() { 
            document.getElementById("CharHar").innerHTML = "The hair can be any texture as long as it is not curled, and tends to be oily.";
            document.getElementById("RoutineHar").innerHTML = "Recommended to buy products that do not add oil to the hair, dry shampoos or spray ons. Try to avoid heavy butters and overwashing the hair, that increases oil output.";
            }
            function func2() { 
            document.getElementById("CharHar").innerHTML = "Type 2A is gentle with a loose wave, type 2B is more defined where water may produce small waves, and type 2C has curves that may be frizzy when damp."
            document.getElementById("RoutineHar").innerHTML = "Routine for type 2A includes avoiding oil and cream products, and 2C includes using a diffuser to reduce frizz and anti-humidity products.";
             }
            function func3() { 
            document.getElementById("CharHar").innerHTML = "Type 3A is loose curls bigger than the end of a taper candle, 3B has more volume, and 3C is described as coils around the diameter of a straw.";
            document.getElementById("RoutineHar").innerHTML = "Recommendations include avoiding ponytails that can cause hair loss, avoiding silicons and sufates that dry the curls and cause them to lose definition, and using a leave-in conditioner and air-drying.";
             }
            function func4() { 
            document.getElementById("CharHar").innerHTML = "Type 4A has curls the diameter of a chopstick and is very fragile, 4B has zig-zags, and 4C is easily breakable.";
            document.getElementById("RoutineHar").innerHTML = "For 4A use deep conditioning creams and not oils to moisturize the hair and do not tuck the hair. For 4B, try to detangle hair into sections when applying conditioner to leave in, and for 4C nourish the hair with butter and coconut oil or other conditioners rich with healthy elements.";
             }
            </script>
            <h3>Characteristics</h3>
            <p id="CharHar">How to identify the skin type through signs and texture</p>
            <h3>Recommended Daily Routine/Care</h3>
            <p id="RoutineHar">Recommended products and processes to be incorporated</p>
            <h4>Further links and information sources</h4>
            <ul>
                <li><a href="https://www.healthline.com/health/beauty-skin-care/types-of-hair#style-and-care">General hair care for specific types of hair</a></li>
                <li><a href="https://tresspa.com/a-hair-care-routine-for-every-hair-type/">More in-depth hair routine information</a></li>
            </ul>
    </section>
    
</header>
</body>
</html>



