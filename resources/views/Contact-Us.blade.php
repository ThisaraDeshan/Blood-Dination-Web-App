@extends('layouts.my')

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

  .font11{
        color: #ffffff;
        font-weight: 700;
        text-decoration: none;
    }

</style>

@endsection
