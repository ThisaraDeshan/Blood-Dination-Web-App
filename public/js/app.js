let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});

sr.reveal('.hero-text',{delay:200, origin: 'top'});
sr.reveal('.hero-img',{delay:450, origin: 'top'});
sr.reveal('.icons',{delay:500, origin: 'left'});
sr.reveal('.scroll-down',{delay:50000, origin: 'right'});

const searchBar = document.querySelector('.search-form input[type="text"]');
const searchButton = document.querySelector('.search-form button[type="submit"]');

function resizeSearchBar() {
  if (window.innerWidth <= 768) {
    searchBar.style.width = '100%';
    searchButton.style.width = '100%';
  } else {
    searchBar.style.width = '80%';
    searchButton.style.width = '20%';
  }
}

resizeSearchBar();

window.addEventListener('resize', resizeSearchBar);


/* //search bars
(document).ready(function(){
 ('#search').on('keyup',function(){
     var query= $(this).val();
     ajax({
        url:"search",
        type:"GET",
        data:{'search':query},
        success:function(data){
            ('#search_list').html(data);
        }
 });
 //end of ajax call
})
}); */



/*     function initialize() {
        var geocoder = new google.maps.Geocoder();
        var address = "Anuradhapura,SriLanka";    // Replace with the address you want to convert

        geocoder.geocode({ 'address': address }, function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();

            // Display the latitude and longitude on the console
            console.log('Latitude: ' + latitude);
            console.log('Longitude: ' + longitude);

            // You can use the latitude and longitude to display a map or perform other operations.
            // For example, let's display a map centered at the obtained coordinates.
            var mapOptions = {
              center: { lat: latitude, lng: longitude },
              zoom: 12,
            };

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            new google.maps.Marker({
              position: {lat: latitude, lng: longitude},
              map:map
          });

          } else {
            console.error('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize); */


/*           //map
    function showMap(lat,long)
    {
        var coord = {lat:lat,lng:long};

        var map = new google.maps.Map(
            document.getElementById("map2"),
            {
                zoom:13,
                center:coord,
            }
        );

        new google.maps.Marker({
            position: coord,
            map:map
        });
    }

    showMap(7.877422,80.7003428); */
