
	jQuery(function($){
		
		var height1 = $(window).height();
		$("#map-canvas-wrap").css({'height': height1 + 80});

	

	
	});
	
	

	
	
	//Google map in footer
	function initialize() 
	{
		var styles = [ 
			{ "featureType": "water", "stylers": [ { "saturation": -60 } ] },
			{ "featureType": "landscape", "stylers": [ { "saturation": -100 }, { "lightness": 21 }, { "gamma": 0.61 } ] },
			{ "featureType": "poi", "stylers": [ { "gamma": 0.66 }, { "lightness": 47 }, { "saturation": -28 } ] },
			{ "elementType": "labels", "stylers": [ { "visibility": "off" } ] }, 
			{ "featureType": "road.local", "stylers": [ { "weight": 0.4 } ] },
			{ "featureType": "transit", "stylers": [ { "weight": 0.1 }, { "visibility": "off" } ] },
			{ "featureType": "road", "stylers": [ { "saturation": -100 }, { "lightness": -28 }, { "gamma": 1.6 } ] }
		];
      
	
    //set latitude and longitude of starting centre point
		var myLat = -33.870311;
		var myLon = 151.206115;

		var latlng = new google.maps.LatLng(myLat, myLon);
      	var latlng2 = new google.maps.LatLng(myLat, myLon);

		//set options for initial view
		var myOptions = {
			zoom: 15,
			scrollwheel: false,
			center: latlng2,
          	styles: styles,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			draggable: true,
          	panControl: false,
          	streetViewControl: false,
            zoomControlOptions: {
              style: google.maps.ZoomControlStyle.SMALL,
              position: google.maps.ControlPosition.LEFT_CENTER
            },

		};

		//put the map into your specified div. in this case "map_canvas".
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

		//set a marker at the centre point
		var marker = new google.maps.Marker({
			position: latlng,
          	icon: "/wp-content/themes/kennyweb/images/pin.png",			
          	title:"Jimmyweb"
		});
      
        
         	


		// To add the marker to the map, call setMap();
		marker.setMap(map);
	}