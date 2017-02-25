 var map;
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(19.99, 73.78),
          zoom: 11,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"),
            mapOptions);
      }

      $(document).ready(function() {
         initialize();
        $.getJSON("assets/php/mapData.php", function(json1) {
          $.each(json1, function(key, data) {
           // console.log(data);
            var latLng = new google.maps.LatLng(data.latt, data.lng); 
            // Creating a marker and putting it on the map
            var marker = new google.maps.Marker({
                map:map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: latLng,
                title: data.title
            });
            marker.setMap(map);
          });
        });
      });