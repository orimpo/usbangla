<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <style>-->
<!--        #map {-->
<!--            width: 100%;-->
<!--            height: 400px;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<h3>My Google Maps Demo</h3>-->
<!--<div id="map"></div>-->
<!--<script>-->
<!--    function initMap() {-->
<!--        var mapDiv = document.getElementById('map');-->
<!--        var map = new google.maps.Map(mapDiv, {-->
<!--            center: {lat: 40.7111, lng: -74.0103},-->
<!--            zoom: 15-->
<!--        });-->
<!--    }-->
<!--</script>-->
<!--<script async defer-->
<!--            src = "https://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211%7C11206%7C11222&key=AIzaSyAMquo8bW-QSe3mf5fyDL_2eWEGi-gDiTQ";-->
<!--</script>-->
<!--</body>-->
<!--</html>-->

<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <script-->
<!--        src="http://maps.googleapis.com/maps/api/js">-->
<!--    </script>-->
<!---->
<!--    <script>-->
<!--        //        var myCenter=new google.maps.LatLng(40.7111,-74.0103);-->
<!--        var myCenter=new google.maps.LatLng(51.508742,-0.120850);-->
<!---->
<!--        function initialize()-->
<!--        {-->
<!--            var mapProp = {-->
<!--                center:myCenter,-->
<!--                zoom:15,-->
<!--                mapTypeId:google.maps.MapTypeId.ROADMAP-->
<!--            };-->
<!---->
<!--            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);-->
<!---->
<!--            var marker=new google.maps.Marker({-->
<!--                position:myCenter,-->
<!--                icon:'pinball.png'-->
<!--            });-->
<!---->
<!--            marker.setMap(map);-->
<!--        }-->
<!---->
<!--        google.maps.event.addDomListener(window, 'load', initialize);-->
<!--    </script>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<div id="googleMap" style="width:500px;height:380px;"></div>-->
<!--</body>-->
<!--</html>-->


<!DOCTYPE html>
<html>
<head>
    <h1 style="color: #15AB4D">Venue</h1>
    <div>

        <img src="images/hilton.jpeg">

    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMquo8bW-QSe3mf5fyDL_2eWEGi-gDiTQ&callback=initMap">
//    src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAMquo8bW-QSe3mf5fyDL_2eWEGi-gDiTQ&callback=initMap"
    </script>

    <script>
        var myCenter=new google.maps.LatLng(40.7111,-74.0103);
        var marker;

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE
            });

            marker.setMap(map);
            var infowindow = new google.maps.InfoWindow({
                content:"NewYork Hilton"
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
</body>
</html>

