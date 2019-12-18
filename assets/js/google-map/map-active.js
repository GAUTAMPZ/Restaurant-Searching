 var map;
var latlng = new google.maps.LatLng(22.000,72.0000);

var stylez = [{
    featureType: "all",
    elementType: "all",
    stylers: [{
        saturation: -50
            }]
        }];

var mapOptions = {
    zoom: 15,
    center: latlng,
    scrollwheel: false,
    scaleControl: true,
    disableDefaultUI: false,
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
    }
};

map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);


var geocoder_map = new google.maps.Geocoder();
var address = 'surat';
geocoder_map.geocode({
    'address': address
}, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: map.getCenter()
        });
    } else {
        
    }
});

var mapType = new google.maps.StyledMapType(stylez, {
    name: "Grayscale"
});

map.mapTypes.set('gMap', mapType);
map.setMapTypeId('gMap');