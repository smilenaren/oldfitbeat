function initMap(){
		// Map Options
		var options = {
			zoom: 16,
			center: {lat:-27.543872,lng:153.2236}
		}

		// New map
		var map = new google.maps.Map(document.getElementById('map'), options);
		
		//Add marker
		var marker = new google.maps.Marker({
			position: {lat:-27.543872,lng:153.2236},
			map: map,
			icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
		});

		var infoWindow = new google.maps.InfoWindow({
			content:'<h1>My Loval Vet</h1>'
		});

		marker.addListener('click', function(){
			infoWindow.open(map, marker);
		});
	}