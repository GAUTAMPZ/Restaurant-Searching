function initAutocomplete(){
    var options = {
        componentRestrictions: {
            country: 'IN'
        }
    };
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(searchBox,'place_changed', function() {
        var place = searchBox.getPlace();

        var lat = place.geometry.location.lat();
        var long = place.geometry.location.lng();
        jQuery("#place_lat").val(lat);
        jQuery("#place_lng").val(long);
        // document.getElementById("place_lat").value(lat);
        // document.getElementById("place_lng").value(long);    
    });
}