<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Multiple Markers</title>
    <style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        var map;

        function initMap() {
            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -6.8727539, lng: 107.8247303},
                zoom: 10
            });

            // Fetch locations data from PHP
            fetch('maps.php')
                .then(response => response.json())
                .then(locations => {
                    var infowindow = new google.maps.InfoWindow();

                    // Add markers to the map
                    locations.forEach(location => {
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(location[1], location[2]),
                            map: map
                        });

                        google.maps.event.addListener(marker, 'click', () => {
                            infowindow.setContent('<a href="#">' + location[0] + '</a><br>' + location.slice(3).join('<br>'));
                            infowindow.open(map, marker);
                        });
                    });
                })
                .catch(error => console.error('Error fetching locations:', error));
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXwrlvlTV0lb3-Dqn137BK1QbjF5wY-a0&callback=initMap" async defer></script>
</body>
</html>
