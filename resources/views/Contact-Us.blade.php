@extends('layouts.app')

@section('content')
<div class="container rounded-5">
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
<div class="row justify-content-center">
    <div class="col-lg-10" >
    <div class="wrapper">
    <div class="row ">
    <div class="col-md-6 d-flex align-items-stretch" style="background-color: #FAA0A0;">
    <div class="contact-wrap w-100 p-md-5 p-4 py-5">
    <h3 class="mb-4">Write us</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <div id="form-message-success" class="mb-4">
    Your message was sent, thank you!
    </div>
    <form method="POST" id="contactForm" name="contactForm" class="contactForm" novalidate="novalidate" action="{{route('contactusmessage')}}">
    @csrf
        <div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <input required type="text" class="form-control error" name="sendername" placeholder="Name" aria-invalid="true"><label id="name-error" class="error" for="name">Please enter your name</label>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input required type="email" class="form-control error" name="senderemail" placeholder="Email"><label id="email-error" class="error" for="email">Please enter a valid email address</label>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input required type="text" class="form-control error" name="subject" placeholder="Subject"><label id="subject-error" class="error" for="subject">Please enter your subject</label>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <textarea required name="sendermessage" class="form-control error" cols="30" rows="6" placeholder="Message"></textarea><label id="message-error" class="error" for="message">Please enter a message</label>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="submit" value="Send Message" class="btn btn-primary">
    <div class="submitting"></div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    <div class="col-md-6 d-flex align-items-stretch" style="background-color: #880808;">
    <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
    <h3 class="font11">Contact information</h3>
    <p class="font11 mb-4">We're open for any suggestion or just to have a chat</p>
    <div class="dbox w-100 d-flex align-items-start">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class="fa fa-map-marker"></span>
    </div>
    <div class="text pl-3">
    <p class="font11"><span>Address : </span> Pettah , Colombo , Sri Lanka.</p>
    </div>
    </div>
    <div class="dbox w-100 d-flex align-items-center">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class="fa fa-phone"></span>
    </div>
    <div class="text pl-3">
    <p class="font11"><span>Phone : </span> <a class="font11" href="tel://1234567920">+ 94 777 7777</a></p>
    </div>
    </div>
    <div class="dbox w-100 d-flex align-items-center">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class="fa fa-paper-plane"></span>
    </div>
    <div class="text pl-3">
    <p class="font11"><span>Email : </span> <a class="font11" href="mailto:info@yoursite.com">info@BloodDonation.com</a></p>
    </div>
    </div>
    <div class="dbox w-100 d-flex align-items-center">
    <div class="icon d-flex align-items-center justify-content-center">
    <span class="fa fa-globe"></span>
    </div>
     <div class="text pl-3">
    <p class="font11"><span>Website : </span> <a class="font11" href="#">Blood Donation.com</a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>

<div class="container mt-4 mb-4" style="background-color: red; width:100%; height:auto; border-radius:30px;">
    <div class="row">
            <div class="col-6">
                <img src="{{asset('img/img33.jpeg')}}" class="m-5" style="width: ; height:350px; border-radius:30px;" alt="">
            </div>
            <div class="col-6">
                <div class="m-5" style=" border: 2px solid #fff; border-radius:30px;">
                    <h1 class="title m-4" style=" text-align:center; color: #fff; font-weight:700;">If You Want Donate Blood</h1>
                    <p class="m-2" style=" text-align:center; color: #fff; font-weight:600;">Between 18 & 55 years of Age ,</p>
                    <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Weight more than 50Kg ,</p>
                    <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">It has been 4 months since the previous blood donation ,</p>
                    <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Blood hemoglobin level 12.5g/dl or more , </p>
                    <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Not pregnant ,</p>
                    <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Healthy ,</p>
                    <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">It has been at least 3 months since returning to SriLanka after Travelling abroad ,</p>
                    <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Free from risky behavior ,</p>
                    <p class="m-5" style="font-size:30px; text-align:center;color: #fff; font-weight:700;">Being a person is essential.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-color: red; width:100%; height:auto; border-radius:30px;">
        <div class="row">
            <div class="col-6">
                <div class="m-5" style=" border: 2px solid #fff; border-radius:30px;">
                    <h1 class="title m-4" style=" font-size:50px; text-align:center; color: #fff; font-weight:700;">If There Is A Problem?</h1>
                    <p class="m-2" style=" font-size:25px; text-align:center; color: #fff; font-weight:600;">If there is any problem after donating blood and you develop a Non-Communicable disease withi two weeks , contact the parshad Blood Center you have joined or the blood bank of the nearest Hospital.</p>
                </div>
            </div>
                <div class="col-6">
                    <div class="m-5" style=" border: 2px solid #fff; border-radius:30px;">
                        <h1 class="title m-4" style=" text-align:center; color: #fff; font-weight:700;">Contact Numbers</h1>
                        <p class="m-2" style=" text-align:left; color: #fff; font-weight:600;">National Blood Center : 011-2369931-4</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Kaburugamuwa : 011-2227232</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Kandy : 081-2222261</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Badulla : 055-2222121</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Ampara : 063-2223914</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Chilaw : 032-2223261</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Hambanthota : 047-2222016</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Kalutara : 034-2236529</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Kurunegala : 037-2229617</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Karapitiya : 091-2226066</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Maharagama : 011-2849525</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Peradeniya : 081-2388261</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Ragama : 011-2960535</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Rathnapura : 045-2226592</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Anuradhapura : 025-2236424</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Jaffna : 021-2223063</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Trincomalee : 026-2222261</p>
                        <p class="m-2" style="text-align:left;color: #fff; font-weight:600;">Vauniya : 024-2222261</p>
                    </div>
                </div>
            </div>
        </div>


<style>
  .btn11{
    border: 1px solid red;
    background-color: #ffffff;
    color: #000;
    border-radius: 40px;
  }
  .btn11:hover{
    background-color: red;
    color: #ffffff;
  }
</style>

<style>
    .font11{
        color: #ffffff;
        font-weight: 700;
        text-decoration: none;
    }
</style>

@endsection
