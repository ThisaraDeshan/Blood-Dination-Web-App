@extends('layouts.needer')

@section('content')

<div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        @if (\Session::has('success'))
    <div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
    </div>
    @endif
    </div>
    <div class="col-md-4">

    </div>
</div>



<div class="container mb-4" style="margin-top:50px; border-radius:30px; width:80%;">
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8">
            <h3 class="text-center" style="color: #000000; text-shadow: 4px 4px 10px #000000; ">Search Blood here!</h3><hr>
                <div class="form-group">
                    <h4 style="color: #000000; text-shadow: 4px 4px 10px #000000; ">Type Blood Type Or Location</h4>
                    <input type="text" name="search" id="search" placeholder="Type Blood Type Or Location" class="form-control" onfocus="this.value=''">
                </div>
            <div id="search_list">

            </div>
        </div>

        <div class="col-lg-2">

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="color: #000000; text-shadow: 4px 4px 10px #000000; ">Blood Donors Locations On Map</h1>

            <div class="mb-4" id="map">

            </div>
        </div>
    </div>
</div>


<div class="container" style="border-radius: 30px; width:auto;">
    <div class="row">
        <div>
            <h1 style="color: #000000; text-shadow: 4px 4px 10px #000000; ">Latest Blood Donation Posts</h1>
        </div>
        @foreach ($posts as $post)
                    <div class="card m-3"  style="width: 17.7rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$post->donerposttitle}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{$post->donerbloodtype}}</h6>
                          <p class="card-text">{{$post->donerpostdescription}}</p>
                          <h6 class="card-subtitle mb-2">{{$post->donername}}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">{{$post->doneraddress}}</h6>
                          <a style="box-shadow:2px 2px 25px #000; text-shadow: 4px 4px 10px #000000;" href="{{route('sendmessage' , $post->userid)}}" class="btn">Send Message</a>
                        </div>
                    </div>
                    @endforeach
    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
    //search bars
$(document).ready(function(){
 $('#search').on('keyup',function(){
     var query= $(this).val();
     $.ajax({
        url:"search",
        type:"GET",
        data:{'search':query},
        success:function(data){
            $('#search_list').html(data);
        }
 });
 //end of ajax call
})
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFVRMT8k_OWiqAHdWe42RdmojP6GsMv7U&libraries=places"></script>
<script>

function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 6.906079, lng: 79.969628, title: 'Your Location'},
                zoom: 8
            });

            // Add markers for additional locations
            var locations = [
                {lat: 6.8892617, lng: 79.865094, title: 'Central Blood Bank , Narahenpita.'},
                {lat: 6.238841599433256, lng: 80.0542508, title: 'Blood Bank , Ambalangoda'},
                {lat: 8.32581214357, lng: 80.4124385118, title: 'Blood Bank ,  Anuradhapura'},
                {lat: 7.286318, lng: 80.631651, title: 'Blood Bank ,  Kandy'},
                {lat: 6.991119, lng: 81.0516508, title: 'Blood Bank ,  Badulla'},
                {lat: 6.124593, lng: 81.101074, title: 'Blood Bank ,  Hambanthota'},
                {lat: 7.47962188721, lng: 80.3592147827, title: 'Blood Bank ,  Kurunegala'},
                {lat: 6.705574, lng: 80.384734, title: 'Blood Bank ,  Rathnapura'},
                {lat: 8.592200, lng: 81.196793, title: 'Blood Bank ,  Trincomalee'},
                {lat: 5.9475544, lng: 80.5489361, title: 'Blood Bank ,  Matara'},

                {lat: 5.9475544, lng: 80.7489361, title: 'Thisara (o+)'},
                {lat: 6.949717, lng: 80.789107, title: 'Danushka (B+)'},
                {lat: 8.7381572, lng: 80.47714719999999, title: 'Jaliya (AB)'},
                {lat: 6.906079, lng: 79.969628, title: 'Vindya (A-)'},
                {lat: 7.087310, lng: 80.014366, title: 'Sanduni (O-)'},


                // Add more locations here
            ];

            var infowindows = []; // Array to store infowindows for each marker

locations.forEach(function(location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        title: location.title
        /* icon: 'https://maps.google.com/mapfiles/ms/icons/hospitals.png' */
    });

    google.maps.event.addListener(marker, "rightclick", function() {
        marker.setIcon('/img/location.png'); // set image path here...
});

    var infowindow = new google.maps.InfoWindow({
        content: location.title
    });

    // Add click event listener to show infowindow on marker click
    marker.addListener('click', function() {
        closeAllInfoWindows(); // Close any open infowindows
        infowindow.open(map, marker);
    });

    infowindows.push(infowindow);
});

function closeAllInfoWindows() {
    infowindows.forEach(function(infowindow) {
        infowindow.close();
    });
}
}
        initMap();

</script>






{{-- AIzaSyBFVRMT8k_OWiqAHdWe42RdmojP6GsMv7U --}}


@endsection
