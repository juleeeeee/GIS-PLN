<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Multiple Markers</title>
    <link href="assets/img/ico.jpg" rel="icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
        }
        #map {
            height: 80vh;
            border: 1px solid #dee2e6;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 0.25rem;
        }
        .map-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 1rem;
            background: white;
            border-radius: 0.25rem;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .map-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        .map-header h2 {
            margin: 0;
            font-weight: 600;
            color: #343a40;
        }
        .btn-back {
            font-size: 1rem;
        }
        .loading {
            text-align: center;
            padding: 1rem;
            font-style: italic;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="map-container">
        <div class="map-header">
            <h2>Google Maps Multiple Markers</h2>
            <button class="btn btn-secondary btn-back" onclick="goBack()">Back</button>
        </div>
        <div id="loading" class="loading">Loading map...</div>
        <div id="map"></div>
    </div>
    <script>
        var map;

        function goBack() {
            window.location.href = 'index.php';
        }

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
                    document.getElementById('loading').style.display = 'none';

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
                .catch(error => {
                    console.error('Error fetching locations:', error);
                    document.getElementById('loading').textContent = 'Failed to load map data.';
                });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXwrlvlTV0lb3-Dqn137BK1QbjF5wY-a0&callback=initMap" async defer></script>
</body>
</html>
