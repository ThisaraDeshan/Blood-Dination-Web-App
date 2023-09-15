@extends('layouts.needer')

@section('content')

<div class="container">
    <h1 style="color: white; font-weight:700; text-align:center; text-shadow: 4px 4px 10px #000000;">Our Best Donors</h1>
    <div class="row" style="display:flex; justify-content:space-around; align-items:stretch;">
        @foreach ($posts as $post )
        <div class="col-md-6 col-lg-4 mt-5 mb-3" style="width:auto;">
            <div class="card-doctor p-2" style="border: solid #ffffff 2px; border-radius:20px; background-color:#5c1010; box-shadow: 4px 4px 10px #000000;">
                <div class="header">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-logo-whatsapp"></span></a>
                    </div>
                </div>
                <div class="body">
                    <p class="text-xl mb-3" style="text-align:center; color:antiquewhite; font-weight:bold;">{{$post->name}}</p>
                    <label for="blood-type" class="label" style="color:antiquewhite;">Blood Type :&nbsp; </label>
                    <span class="text-sm" style="text-align: center; color:antiquewhite; font-weight:bold;">
                    @foreach ($donors as $donor)
                        @if ($donor->userid === $post->id)
                            {{ $donor->donerbloodtype }}
                        @endif
                    @endforeach
                    </span><br>
                    <a style="align-content: center; position:relative; display:block;" href="{{route('donerRatings',$post->id)}}" class="btn">View , Rate & Review Doner</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection
