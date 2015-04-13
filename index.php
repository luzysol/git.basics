<?php
$PageTitle="Med Mission";
function customPageHeader(){?>
<?php }
include 'include/header.php';
?>
<?php
include 'include/logo-nav.php';
?>

 <!--  Main Content -->
<section id="content">
<div id="banner">
    <!-- <div id="quote">"A Healthy Dose of God's Love"
      <div id="quotesmall">John 3:16-17</div>
    </div><!--quote--> 
 </div><!--banner--> 
  <article class="threeIcons">
    <div class="iconIndex">
          <a href="about.php#elegible">
          <img src="images/icon-clipboard.png" width="125" height="125" alt="elegibility">
          <h4 class="iconTitle">Eligibility</h4></a>
          
              <p>We  honor God by providing quality medical care to the uninsured and the underserved in Lexington, SC.</p>
          
          <div class="readButton">
          <h3><a href="about.php#elegible">Read More</a></h3>  
          </div>  
    </div><!--col1-->
    <div class="iconIndex">
            <a href="locations.php">
              <img src="images/icon-location.png" width="125" height="125" alt="locations"></a> 
              <h4 class="iconTitle">Locations</h4>
              <div class="iconTextCenter">
                <a href="locations.php">Pelion<br>
                Lexington<br>
                Cayce</a>
                </div>
             
            <div class="readButton">
              <h3><a href="locations.php">Map</a></h3>
            </div>
    </div><!-- iconIndex-->   
    <div class="iconIndex">
          <a href="medical.php">
          <img src="images/icon-stetoscope.png" width="125" height="125" alt="services">
          <h4 class="iconTitle">Services</h4></a>
          
              <p>Medical - Primary Care
              No Dental or Vision are offered at this time.</p>
          
          <div class="readButton">
          <h3><a href="medical.php">Read More</a></h3> 
          </div>
    </div><!--col2--> 
  
   
  </article><!--three-icons-->
  
<article id="founder">
    <h2>Our Founder</h2> 
    
    <figure>
    <img id="picture" src="images/suzy-truck.jpg" width="600" height="354" alt="Dr. Suzy Schwab">
    <figcaption>Dr. Suzanne Schwab.</figcaption>
    </figure>
    <div id="founderText">
        <p>Med Mission is the brainchild of Dr. Suzanne Schwab, who has worked with a similar volunteer program in Florida. 
        Dr. Schwab saw a need to provide quality health care to individuals who cannot afford or cannot get to medical treatment.</p>
        <p>&nbsp;</p>
        <p> Her desire to offer free check-ups, screenings and treatment for local residents in a caring, 
        Christian environment started in April 2009.  She feels it is possible to treat many chronic conditions rather
        inexpensively, if you can catch it early; thereby avoiding catastrophic care later. </p>
        <p>&nbsp;</p>

        <a href="http://www.thestate.com/2009/12/29/1088310/mobile-free-clinic-to-serve-lexington.php" target="_blank">&gt;&gt; The State - News Article</a>
        <p>&nbsp;</p>
        <!--newspaper-->
    </div>  <!--founderText-->
</article><!--founder-->
<?php
include 'include/nav-foot.php';
?>
<?php
include 'include/contact.php';
?>

<footer>
   &#169; 2015 Med Mission</footer>       
 
</section><!--content-->
 <!-- <script 
'use strict';
var gMapAPIKey = 'AIzaSyDuYIuS4jNoK-kyVeg9eNX9wDhJiySjjPY'; </script -->
</body>

</html>
