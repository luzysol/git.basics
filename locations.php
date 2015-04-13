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
    <div class="bgLocation">
        <div id="title">
        <h2>Locations</h2>
        </div> 
        </div>
    </div>

  <article class="mainContent"> 
    <div class="fiveColsWhite">
  	<div class="locationCols1"> 
        <div class="hoursName">
            <h3>Mission of Hope<br>-</h3>
            <p>1819 Middleton Street<br> Cayce, SC 29033</p>
            <a href="https://www.google.com/maps/place/1819+Middleton+St,+Cayce,+SC+29033/@33.967321,-81.074298,17z/data=!3m1!4b1!4m2!3m1!1s0x88f8bb7e0d9a6261:0xbae7c5a863aa5e33" target="_blank">Google Map</a>
          </div>
            
            <table class="hoursTable">
            <col>
            <col>
            <col>
            <col>
             <thead>  
              <tr>
                <th colspan="3">2014</th>
                
              </tr>
              </thead>
              
              <tbody> 
              <tr> 
                  <td>Jun 21</td> 
                  <td>Saturday </td> 
                  <td>9:30-12:30</td> 
              </tr> 
              <tr> 
                  <td>Jul 12</td> 
                  <td>Saturday</td> 
                  <td>9:30-12:30</td> 
              </tr>
              <tr> 
                  <td>Aug 9</td> 
                  <td>Saturday</td> 
                  <td>9:30-12:30</td> 
              </tr>
              <tr> 
                  <td>Sep 13 </td> 
                  <td>Saturday</td> 
                  <td>9:30-12:30</td> 
              </tr>
              <tr> 
                  <td>Oct 11 </td> 
                  <td>Saturday</td> 
                  <td>9:30-12:30</td> 
              </tr>
              <tr> 
                  <td>Nov 8 </td> 
                  <td>Saturday</td> 
                  <td>9:30-12:30</td> 
              </tr>
              <tr> 
                  <td>Dec 13</td> 
                  <td>Saturday</td> 
                  <td>9:30-12:30</td> 
              </tr>
              </tbody>
              </table>  
    </div>
      
 	      <div class="locationCols2">
    	
          <div class="hoursName">
            <h3>Pelion United<br> Methodist Church</h3>
            <p>832 Magnolia St. <br>Pelion, SC  29123</p>
            <a href="https://www.google.com/maps/place/832+Magnolia+St,+Pelion,+SC+29123/@33.7640283,-81.2487878,17z/data=!3m1!4b1!4m2!3m1!1s0x88f8ebf9c3afd2e1:0x36ebb435f1422666" target="_blank">Google Map</a>
          </div>



         <table class="hoursTable">
         <thead>  
              <tr>
                <th colspan="3">2014</th>
                
              </tr>
              </thead>
              
              <tbody> 
              <tr> 
                  <td>Jun 21</td> 
                  <td>Saturday </td> 
                  <td>9:30-12:30</td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              
              </tbody>
              </table>     
 	</div>	
    
    <div class="locationCols3">
          
          <div class="hoursName">
            <h3>Lexington Interfaith <br>Community Services</h3>
            <p>216 Harmon St. <br>Lexington, SC  29072</p>
            <a href="https://www.google.com/maps/place/216+Harmon+St,+Lexington,+SC+29072/@33.9790596,-81.2286426,17z/data=!3m1!4b1!4m2!3m1!1s0x88f8971f4b2d79ab:0x2f5294236c5592a2" target="_blank">Google Map</a>
          </div>

          <table class="hoursTable">
         <thead>  
              <tr>
                <th colspan="3">2014</th>
              </tr>
              </thead>
              <tbody> 
              <tr> 
                  <td>Jun 21</td> 
                  <td>Saturday </td> 
                  <td>9:30 to 12:30</td>  
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              <tr> 
                  <td></td> 
                  <td></td> 
                  <td></td> 
              </tr> 
              
              </tbody>
              </table>        
   </div>
   </div><!--fiveCols0-->
  <div id="my-map">          
  </div>

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
		pelion = new google.maps.LatLng(33.7640152, -81.2487974),
	 	lexington = new google.maps.LatLng(33.9790596, -81.2286426),
		newCenter = new google.maps.LatLng(33.8735909, -81.1604719 );    
	
	var mapOptions = {
	  'center' : newCenter, 
	  'zoom' : 11
	};
	map = new google.maps.Map(document.getElementById('my-map'), mapOptions);
	
	var markerCayce = new google.maps.Marker({
      position: cayce,
      map: map,
      title: 'Mission of Hope'
	}),
		markerPelion = new google.maps.Marker({
		position: pelion,
		map: map,
		title: 'Pelion United Methodist Church'
	}),
	   markerLexington = new google.maps.Marker({
		position: lexington,
		map: map,
		title: 'Lexington Interfaith Community Services'
	});
  
  
  
  var popupContentCayce = 'Mission of Hope<br>';
  popupContentCayce += '1819 Middleton Street<br />';
  popupContentCayce +=  'Cayce, SC 29033';
  
  var popupContentPelion = 'Pelion United Methodist Church<br>';
  popupContentPelion += '832 Magnolia Street<br />';
  popupContentPelion +=  'Pelion, SC 29123';
  
  var popupContentLexington = 'Lexington Interfaith Community Services<br>';
  popupContentLexington += '216 Harmon Street<br />';
  popupContentLexington +=  'Lexington, SC 29072';
  
  var infowindowCayce = new google.maps.InfoWindow({
      content: popupContentCayce,
      maxWidth: 270
  }),
     infowindowPelion = new google.maps.InfoWindow({
      content: popupContentPelion,
      maxWidth: 270
  }),
	infowindowLexington = new google.maps.InfoWindow({
      content: popupContentLexington,
      maxWidth: 270
  }); 
  
  
  google.maps.event.addListener(markerCayce, 'click', function() {
    infowindowCayce.open(map,markerCayce);
  });
  
  google.maps.event.addListener(markerPelion, 'click', function() {
    infowindowPelion.open(map,markerPelion);
  });
  
  google.maps.event.addListener(markerLexington, 'click', function() {
    infowindowLexington.open(map,markerLexington);
  });
}

</script>


</html>
