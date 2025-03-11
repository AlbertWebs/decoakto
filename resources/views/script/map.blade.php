<script>

var geocoder;

var map;

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {

        center: {
            lat: 0.2820479999999999,
            lng: 36.82304
        },

        zoom: 6.5

    });




    var marker_3 = {
        lat: -1.3892662,
        lng: 36.7688963
    };



    var marker_3_window = new google.maps.InfoWindow({

        content: 'Al-Hatim Decor @ Rongai'

    });



    var marker_3_marker = new google.maps.Marker({
        position: marker_3,
        map: map
    });



    marker_3_marker.addListener('click', function() {

        marker_3_window.open(map, marker_3_marker);

    });



    var marker_1 = {
        lat: -1.321217,
        lng: 36.868546
    };



    var marker_1_window = new google.maps.InfoWindow({

        content: 'Wood Products ltd @ Mombasa Road / Industrial Area'

    });



    var marker_1_marker = new google.maps.Marker({
        position: marker_1,
        map: map
    });



    marker_1_marker.addListener('click', function() {

        marker_1_window.open(map, marker_1_marker);

    });



    var marker_5 = {
        lat: -1.205023,
        lng: 36.786384
    };



    var marker_5_window = new google.maps.InfoWindow({

        content: 'Executive Pros ltd @ Northern Bypass'

    });



    var marker_5_marker = new google.maps.Marker({
        position: marker_5,
        map: map
    });



    marker_5_marker.addListener('click', function() {

        marker_5_window.open(map, marker_5_marker);

    });



    var marker_6 = {
        lat: -1.289660,
        lng: 36.902647
    };



    var marker_6_window = new google.maps.InfoWindow({

        content: 'Floor Masters ltd @ Donholm'

    });



    var marker_6_marker = new google.maps.Marker({
        position: marker_6,
        map: map
    });



    marker_6_marker.addListener('click', function() {

        marker_6_window.open(map, marker_6_marker);

    });



    var marker_4 = {
        lat: -1.380632,
        lng: 36.748205
    };



    var marker_4_window = new google.maps.InfoWindow({

        content: 'Decomagna ltd -Quick-Step MAIN @ Karen Hardy'

    });



    var marker_4_marker = new google.maps.Marker({
        position: marker_4,
        map: map
    });



    marker_4_marker.addListener('click', function() {

        marker_4_window.open(map, marker_4_marker);

    });



    var marker_7 = {
        lat: -1.283148,
        lng: 36.792120
    };



    var marker_7_window = new google.maps.InfoWindow({

        content: 'Palacina Interiors @ Kileleshwa'

    });



    var marker_7_marker = new google.maps.Marker({
        position: marker_7,
        map: map
    });



    marker_7_marker.addListener('click', function() {

        marker_7_window.open(map, marker_7_marker);

    });



}

</script>

<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDqMKSQz5wNsQaMjhgLYZQe2NNx2KfheTg&callback=initMap" async defer> </script>
