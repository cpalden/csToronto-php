<script>
var map;
function myMap() 
{
	var mapOptions ={
		center: new google.maps.LatLng(43.65, -79.38),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP	
		}
	map = new google.maps.Map(document.getElementById("mymap"), mapOptions);
	/*	var flagadd = {lat: 43.65, lng: -79.38 };
		var flag = new google.maps.Mrker({
		position: flagadd,
		map: map
		});*/
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuNre_l4nGqY4gP9SeQD-PyGbfuBzB168&callback=myMap"></script>
