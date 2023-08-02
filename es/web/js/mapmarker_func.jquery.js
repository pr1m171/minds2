		//set up markers 4.6914126,-74.0354402
		var myMarkers = {"markers": [
				{"latitude": "4.6914126", "longitude":"-74.0354402", "icon": "img/map-marker.png"}
			]
		};
		
		//set up map options
		$(".map_contact").mapmarker({
			zoom	: 17,
			center	: 'Calle 113 # 7 - 45 Torre B - Oficina 1210 Teleport Business Park Bogotá - Colombia.',
			markers	: myMarkers
		});

