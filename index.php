<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>InfoBubble</title>
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
	<link rel="stylesheet" href="css/css.css" />
	<script type="text/javascript" src="js/infobubble.js"></script>
	<script type="text/javascript">
	    var map, infoBubble2;
	    function init() {
		var mapCenter = new google.maps.LatLng(-35.397, 150.644);
		map = new google.maps.Map(document.getElementById('map'), {
		    zoom: 8,
		    center: mapCenter,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var marker = new google.maps.Marker({
		    map: map,
		    position: new google.maps.LatLng(-35, 150),
		    draggable: true
		});



		infoBubble2 = new InfoBubble({
		    map: map,
		    content: '<div class="phoneytext">some content stuff goes here</div>',
		    position: new google.maps.LatLng(-35, 151),
		    shadowStyle: 1,
		    padding: 0,
		    backgroundColor: 'rgb(57,57,57)',
		    borderRadius: 4,
		    arrowSize: 10,
		    borderWidth: 1,
		    borderColor: '#2c2c2c',
		    disableAutoPan: false,
		    hideCloseButton: false,
		    arrowPosition: 30,
		    backgroundClassName: 'phoney',
		    arrowStyle: 2
		    ,closeSrc: 'img/closeH.png'
		    ,closeHeight: 28
		    ,closeWidth: 28
		    ,closeTop: 6 //this + border width
		    ,closeRight: 6 //this + border width
		});

        
		//infoBubble2.open(); phoneytext

		google.maps.event.addDomListener(marker, 'click', function() {
	    
		    infoBubble2.open(map, marker);
		    
		    //console.log(infoBubble2.close);
	    
		    if (infoBubble2.isOpen()) {
		
		    }
	    
		});
	
	

	    }
	    google.maps.event.addDomListener(window, 'load', init);

	</script>
    </head>
    <body>

	<div id="map"></div>

    </body>
</html>
