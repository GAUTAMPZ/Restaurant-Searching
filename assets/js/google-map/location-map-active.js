var map;
var latlng = new google.maps.LatLng( jQuery('#map-lat').val(), jQuery('#map-lag').val());

var stylez = [{
    featureType: "all",
    elementType: "all",
    stylers: [{
        saturation: -50
            }]
        }];

var mapOptions = {
    zoom: 17,
    center: latlng,
    scrollwheel: true,
    scaleControl: true,
    disableDefaultUI: false,
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
    }
};

map = new google.maps.Map(document.getElementById("locationMap"), mapOptions);



var geocoder_map = new google.maps.Geocoder();
var address = 'ahmadabad';
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