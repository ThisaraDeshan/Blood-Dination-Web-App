@extends('layouts.needer')

@section('content')

<div class="container">
    <h1 style="color: white; font-weight:700; text-align:center;">Our Best Donors</h1>
    <div class="row" style="display:flex; justify-content:space-between; align-items:stretch;">
        @foreach ($posts as $post )
        <div class="col-md-6 col-lg-4 mt-5 mb-3" style="width:auto;">
            <div class="card-doctor">
                <div class="header">
                    <img src="{{asset('img/download.jpg')}}" style="border-radius: 10px;" alt="">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-logo-whatsapp"></span></a>
                    </div>
                </div>
                <div class="body">
                    <p class="text-xl mb-0" style=" color:antiquewhite; font-weight:bold;">{{$post->donername}}</p>
                    <label for="blood-type" class="label" style="color:antiquewhite; font-weight:bold;">Blood Type :&nbsp; </label><span class="text-sm" style="text-align: center; color:antiquewhite; font-weight:bold;">{{$post->donerbloodtype}}</span><br>
                    <label for="blood-type" class="label" style="color:antiquewhite; font-weight:bold;">Number Of Blood Donations :&nbsp; </label>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection
