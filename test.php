
<!DOCTYPE html>
<html>
    <head>
        <title>Place searches</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
            html, body, #map-canvas {
                height: 100%;
                margin: 0px;
                padding: 0px
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
        <script>
            var map, placesList;
            var infowindow;
            var service;

            function initialize() {
                var pyrmont = new google.maps.LatLng(23.863064, 90.400126);

                map = new google.maps.Map(document.getElementById('map-canvas'), {
                    center: pyrmont,
                    zoom: 15
                });

                var request = {
                    location: pyrmont,
                    radius: 200,
                    types: ['restaurant']// search type 
                };
                infowindow = new google.maps.InfoWindow();
                placesList = document.getElementById('places');
                service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);
                service.getDetails(request, callback);

            }

            function callback(results, status) {
                if (status == google.maps.places.PlacesServiceStatus.OK) {
                    for (var i = 0; i < results.length; i++) {
                        createMarker(results[i]);
                    }
                }
            }

            function createMarker(place) {
               
                placesList.innerHTML += '<li>' + place.name + '</li>';
            }



            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
        <style>
            #results {
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                right: 5px;
                top: 40%;
                margin-top: -195px;
                height: 380px;
                width: 500px;
                padding: 5px;
                z-index: 5;
                border: 1px solid #999;
                background: #fff;
            }
            h2 {
                font-size: 22px;
                margin: 0 0 5px 0;
            }
            ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                height: 321px;
                width: 500px;
                overflow-y: scroll;
            }
            li {
                background-color: #f1f1f1;
                padding: 10px;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }
            li:nth-child(odd) {
                background-color: grey;
            }

           

        </style>
    </head>
    <body>
        <div id="map-canvas"></div>
        <div id="results">
            <h2>Results</h2>
            <ul id="places"></ul>

        </div>
    </body>
</html>
