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
  
    

    <div id="pageTitle">
    <div class="bgContact">
        <div id="title">
        <h2>Contact Us</h2>
        </div> 
        </div>
    </div>

<article class="contactMainContent">
    <div class="contactColRight"> <!-- right column -->
          <div class="mainBody">
              <h3>Send Us Message</h3>
                <div id="leftFloat">
                  <script type="text/javascript"> id = 191617; </script>
                  <script type="text/javascript" src="http://kontactr.com/wp.js"></script>
                </div>       
          </div><!--mainBody-->    
    </div><!--contactColRight--> 

    <div class="contactColLeft"><!--two column layout-->   
      <div class="mainBody">
            <h3>Visit Us</h3>
                <p id="contactUs">1819 Middleton Street  Cayce, SC 29033
                 <a href="https://www.google.com/maps/place/1819+Middleton+St,+Cayce,+SC+29033/@33.967321,-81.074298,17z/data=!3m1!4b1!4m2!3m1!1s0x88f8bb7e0d9a6261:0xbae7c5a863aa5e33" target="_blank" ><br>Google Map</a>
                </p>
                <div id="my-small-map">          
                </div>
            <h3>  </h3>
            <h3>Call Us</h3>
                    <p>(803)530-8805</p>
                    <p>(803)667-3465 Fax</p>
                
            <h3>Mailing Address</h3>
                    <p>P.O. Box 2765</p>
                    <p>West Columbia, SC 29171</p>        
      </div><!--mainBody-->
    </div><!--contactColLeft-->
     
    
  
</article><!--main content-->

 <?php
include 'include/nav-foot.php';
?> 
<?php
include 'include/contact.php';
?>

 <footer>
   &#169; 2014 Med Mission</footer>       
 
</section><!--content-->
</body>
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuYIuS4jNoK-kyVeg9eNX9wDhJiySjjPY">
</script>

<script>
'use strict';

document.addEventListener('DOMContentLoaded', drawMap);

//make map available inglobal scope
var map;

function drawMap() {
  var cayce = new google.maps.LatLng(33.967321,-81.074298),
    newCenter = new google.maps.LatLng(33.967321,-81.074298);    
  
  var mapOptions = {
    'center' : newCenter, 
    'zoom' : 14
  };
  map = new google.maps.Map(document.getElementById('my-small-map'), mapOptions);
  
  var markerCayce = new google.maps.Marker({
      position: cayce,
      map: map,
      title: 'Mission of Hope'
  });
  
  
  
  var popupContentCayce = 'Mission of Hope<br>';
  popupContentCayce += '1819 Middleton Street<br />';
  popupContentCayce +=  'Cayce, SC 29033';
  
  
  var infowindowCayce = new google.maps.InfoWindow({
      content: popupContentCayce,
      maxWidth: 270
  }); 
  
  
  google.maps.event.addListener(markerCayce, 'click', function() {
    infowindowCayce.open(map,markerCayce);
  });
}

</script>
</html>
