@extends('layouts.my')

@section('content')


    <section class="hero">
        <div class="hero-text">
            <!-- <h5>#2 Trending</h5> -->
            <h4>Emergency Blood Donation</h4>
            <h1>Save Life</h1>
            <p>Saving a life is a noble act that requires no heroic power, just a pint of your blood. By donating blood, you have the power to heal, to give hope, and to change someone's life forever. Your selfless act can provide a lifeline for someone in need, whether it's a patient undergoing surgery, a trauma victim, or someone battling cancer. So why not make a difference today? Donate blood and be a hero to someone in need. Your donation can save lives and make the world a better place.</p>
            <h3 class="text-center text-light">Search Blood here!</h3><hr>
            <div class="form-group">
                <h4>Type Blood Type Or Location</h4>
                <input type="text" name="search" id="search" placeholder="Type Blood Type Or Location" class="form-control rounded-4" onfocus="this.value=''">
            </div>
            <div id="search_list"></div>
        </div>
        <div class="hero-img">
            <img src="{{asset('img/Blood-Donation-PNG-Pic.png')}}" alt="">

        </div>

    </section>

@endsection

