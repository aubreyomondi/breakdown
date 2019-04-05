    /*
    window.lat = 1.2921;
    window.lng = 36.8219;

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(updatePosition);
        }
      
        return null;
    };

    function updatePosition(position) {
      if (position) {
        window.lat = position.coords.latitude;
        window.lng = position.coords.longitude;
      }
    }
    
    setInterval(function(){updatePosition(getLocation());}, 10000);
      
    function currentLocation() {
      return {lat:window.lat, lng:window.lng};
    };

    var map;
    var mark;
    var markers;
*/
    var initialize = function() {
    var map;
    var mark;
    var markers;
      //map  = new google.maps.Map(document.getElementById('map-canvas'), {center:{lat:lat,lng:lng},zoom:15});
      //mark = new google.maps.Marker({position:{lat:lat, lng:lng}, map:map});
/*
            // Array of markers
      markers = [
        {
          coords:{lat:-1.3099,lng:36.8156},
          content:'<h1>Madaraka</h1>'
        },
        
        {
          coords:{lat:-1.3040,lng:36.8246},
          content:'<h1>Nyayo</h1>'
        },

        {
          coords:{lat:-1.3163,lng:36.8058},
          content:'<h1>Highrise</h1>'
        }
        
      ];
      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }
*/
      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
        });

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      } 
    };



    window.initialize = initialize;

    var redraw = function(payload) {
      lat = payload.message.lat;
      lng = payload.message.lng;

      map.setCenter({lat:lat, lng:lng, alt:0});
      mark.setPosition({lat:lat, lng:lng, alt:0});
    };

    var pnChannel = "map2-channel";

    var pubnub = new PubNub({
      publishKey:   'pub-c-760c1764-8d16-4430-a167-411bf7a90f4d',
      subscribeKey: 'sub-c-00a23a5a-bfbf-11e8-9c8c-5aa277adf39c'
    });

    pubnub.subscribe({channels: [pnChannel]});
    pubnub.addListener({message:redraw});

    setInterval(function() {
      pubnub.publish({channel:pnChannel, message:currentLocation()});
    }, 5000);