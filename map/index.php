<?
    include "lib.php"; 

?><!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIhCrftGUFageUQHBPPjFvOwoVBGp0fv8&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 37.67606384745595, lng: 126.74730456163915 },          
          zoom: 15,
        });

        const myLatLng = { lat: 37.67606384745595, lng: 126.74730456163915 };

        new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello World!",
    });         

    <?

$query = "select * from map "; 
$result = mysqli_query($connect, $query); 

while($data = mysqli_fetch_array($result)){
?>    
      const myLatLng<?=$data[idx]?> = { lat: <?=$data[lat]?>, lng: <?=$data[lng]?> };         
        new google.maps.Marker({
        position: myLatLng<?=$data[idx]?>,
        map,
        animation: google.maps.Animation.DROP,
        title: "<?=$data[title]?>"
    });        
<? } ?>    

      }
    </script>
  </head>
  <body>

<form action="save.php" method="post" > 
    <div style="position:absolute; z-index:10;  top:70px; left:10px;   ">
        <input type="text" name="lat" placeholder="위도">   <br>

        <input type="text" name="lng" placeholder="경도">         <br> 
        <input type="text" name="title" placeholder="타이틀">         <br> 
        <button type="submit" >저장</button>
    </div>
    </form>     

    <div id="map"></div>
  </body>
</html>