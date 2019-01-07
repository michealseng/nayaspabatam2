<?php  echo file_get_contents("html/header.html"); ?>
<?php  echo file_get_contents("html/top-nav.html"); ?>
<div class="uk-column-1-2@m uk-column-1-1@s">
  <div class="location-a">
    <h1>Windsor Nagoya</h1>
    <span class="">10 mins walk from Nagoya Mall.</span>
    <div class="location-address">
      Jalan Pembangunan. Komplek Windsor Central. Blok B no: 16. Lubuk Baja.
    </div>
    <div class="location-map" id="map-windsor"></div>
    <script>
      // Initialize and add the map
      function initMap() {
      // The location of Windsor Nagoya
      var nayaspabatam = {lat: 1.1415678, lng: 104.0100906};
      // The map, centered at Windsor Nagoya
      var map = new google.maps.Map(
        document.getElementById('map-windsor'), {zoom: 4, center: nayaspabatam});
      // The marker, positioned at Windsor Nagoya
      var marker = new google.maps.Marker({position: nayaspabatam, map: map-windsor});
      }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsczCEFHxw-zNjVw53AeL4oT8r-OuWC5o&callback=initMap">
      </script>
  </div>

  <div class="location-a">
    <h1>Penuin</h1>
    <span class="">Near BCS Mall, behind Batam City Hotel.</span>
    <div class="location-address">
      Komplek Penuin Central. Blok Q no: 12. 
    </div>
    <div class="location-map" id="map-windsor"></div>
    <script>
      // Initialize and add the map
      function initMap() {
      // The location of Windsor Nagoya
      var nayaspabatam = {lat: 1.1415678, lng: 104.0100906};
      // The map, centered at Windsor Nagoya
      var map = new google.maps.Map(
        document.getElementById('map-windsor'), {zoom: 4, center: nayaspabatam});
      // The marker, positioned at Windsor Nagoya
      var marker = new google.maps.Marker({position: nayaspabatam, map: map-windsor});
      }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsczCEFHxw-zNjVw53AeL4oT8r-OuWC5o&callback=initMap">
      </script>
  </div>

</div>
<?php  echo file_get_contents("html/footer.html"); ?>
