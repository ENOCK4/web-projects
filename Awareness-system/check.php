

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    <style type="text/css">
        html{ height:100%; }
        body{ height:100%; margin:0; padding:0; }
        #map_canvas{ height:90%; width:100%; }
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="contact.php" class="w3-bar-item w3-button">CONTACT</a>
    <a href="check.php" class="w3-bar-item w3-button">MAP</a>
    <a href="#" class="w3-bar-item w3-button">summary</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
    </div>
</div>



<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>



<script type="text/javascript">
    function initialise() {
        // create object literal to store map properties
        var myOptions = {
            zoom: 8// set zoom level
            ,       mapTypeId: google.maps.MapTypeId.ROADMAP // apply tile (options include ROADMAP, SATELLITE, HYBRID and TERRAIN)
        };

        // create map object and apply properties
        var map = new google.maps.Map( document.getElementById( "map_canvas" ), myOptions );

        // create map bounds object
        var bounds = new google.maps.LatLngBounds();
        // create array containing locations
        var locations = [
            [ 'odelle',2.785111529248203, 32.314243018627174 ]
            , [ 'okum ',2.784827550891009, 32.31422558426857]
            , [ 'odeke ',2.7850304882617287, 32.31464233249426]
            ,[ 'Odongkara ',2.785834535157441, 32.31464300304651]
            ,[ 'Lapyem ',2.7868234350638508, 32.31616985052824]
            ,[ 'Odera ',2.779947666826532, 32.32040539383888]
            ,[ 'okello',2.7867973144539087, 32.317417077720165]
            ,[ 'laketeyot',2.786757798658278, 32.31768764555455]
            ,[ 'Nyeko',2.7872262951668376, 32.318354845047]





        ];
        // loop through locations and add to map
        for ( var i = 0; i < locations.length; i++ )
        {
            // get current location
            var location = locations[ i ];

            // create map position
            var position = new google.maps.LatLng( location[ 1 ], location[ 2 ] );

            // add position to bounds
            bounds.extend( position );

            // create marker (https://developers.google.com/maps/documentation/javascript/reference#MarkerOptions)
            var marker = new google.maps.Marker({
                animation: google.maps.Animation.DROP
                , icon: "http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png"
                , map: map
                , position: position
                , title: location[ 0 ]
            });

            // create info window and add to marker (https://developers.google.com/maps/documentation/javascript/reference#InfoWindowOptions)
            google.maps.event.addListener( marker, 'click', (
                function( marker, i ) {
                    return function() {
                        var infowindow = new google.maps.InfoWindow();
                        infowindow.setContent( locations[ i ][ 0 ] );
                        infowindow.open( map, marker );
                    }
                }
            )( marker, i ) );
        };
        // fit map to bounds
        map.fitBounds( bounds );
    }
    // load map after page has finished loading
    function loadScript() {
        var script = document.createElement( "script" );
        script.type = "text/javascript";
        script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialise"; // initialize method called using callback parameter
        document.body.appendChild( script );
    }
    window.onload = loadScript;
</script>



<!-- map container -->
<div id="map_canvas"><noscript><p>JavaScript is required to render the Google Map.</p></noscript></div>
</body>
</html>