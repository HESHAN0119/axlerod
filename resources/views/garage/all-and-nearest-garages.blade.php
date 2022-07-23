<h1>All</h1>
@foreach ($garage_profiles as $garage_profile)
	<pre> {{ $garage_profile }}</pre>
@endforeach

<h1>Nearset</h1>
@foreach ($filtered_profiles as $filtered_profile)
	<pre> {{ $filtered_profile }}</pre>
@endforeach

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Google Map</title>
  <style>
    #map{
      height:400px;
      width:100%;
    }
  </style>
</head>
<body>
	<h1>My Google Map</h1>
	<div id="map"></div>
	<script>
		function initMap(){
			const user_latitude = parseFloat("{{ auth()->user()->latitude }}")
            const user_longtitude = parseFloat("{{ auth()->user()->longtitude }}")
			console.log(user_latitude, user_longtitude);
			var options = {
				zoom:15,
				center:{lat: user_latitude,lng: user_longtitude}
			}

			var map = new google.maps.Map(document.getElementById('map'), options);

			var filtered = @json($filtered_profiles);
			
			addMarker({
					coords:{lat: user_latitude,lng: user_longtitude},
					content:'<h3>Your Location</h3>'
				});

			for(var i = 0;i < filtered.length;i++){
				console.log(filtered[i]);
				addMarker({
					coords:{lat: filtered[i].latitude, lng: filtered[i].longtitude},
					content:'<h3>'+ filtered[i].garage_name +'</h3>'
				});
			}

			function addMarker(props){
				var marker = new google.maps.Marker({
				position:props.coords,
				map:map,
				});

				if(props.iconImage){
					marker.setIcon(props.iconImage);
				}

				if(props.content){
					var infoWindow = new google.maps.InfoWindow({
						content:props.content
					});
					
					marker.addListener('click', function(){
						infoWindow.open(map, marker);
					});
				}
			}
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuRQucFhV9dLb9TBAp1yEnJgGCFnytOhQ&callback=initMap"> </script>
</body>
</html>
