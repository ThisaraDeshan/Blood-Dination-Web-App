@extends('layouts.my')

@section('content')

<section class="hero">
    <div class="hero-text">

        <h5>Donate now</h5>
        <h4>Emergency Blood Donation</h4>
        <h1>Donate Now</h1>
        <p>Saving a life is a noble act that requires no heroic power, just a pint of your blood. By donating blood, you have the power to heal, to give hope, and to change someone's life forever. Your selfless act can provide a lifeline for someone in need, whether it's a patient undergoing surgery, a trauma victim, or someone battling cancer. So why not make a difference today? Donate blood and be a hero to someone in need. Your donation can save lives and make the world a better place.</p>
        <a href="{{route('donerpost')}}">Donor posts</a>
    </div>




<div class="container">
    <h1 style="color: white;">Create Dorner Post</h1>
    <form method="post" action="{{route('donerstore')}}" class="m-3">
        @csrf
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input required type="text" class="form-control" name="donername" placeholder="Enter Doner Name">
        </div>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input required type="text" class="form-control" name="doneraddress" placeholder="Enter Doner Address">
        </div>

        <div class="input-field">
            <i class="fas fa-user"></i>
            <input required type="text" class="form-control" name="donercontactnumber" placeholder="Enter Doner Contact Number">
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input required type="text" class="form-control" name="donerage" placeholder="Enter Doner Age">
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input required type="text" class="form-control mb-3" name="donerlocationlatitude" placeholder="Enter Doner City">
        </div>
        <div class="select-field">
            <i class="fas fa-tint" style="color: #000000;"></i>
            <select required class="form-select" name="donerbloodtype" aria-label="Default select example">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="AB">AB</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
        </div>
        <div class="input-field">
            <i class="fas fa-tint"></i>
            <input required type="text" class="form-control" name="donerposttitle" placeholder="Enter Doner Post title">
        </div>
        <div class="input-field">
            <i class="fas fa-tint"></i>
            <textarea required type="text" class="form-control" name="donerpostdescription" placeholder="Enter Doner Post Description" rows="8"></textarea>
        </div>



        <button type="submit" class="btn">Save & Create Donate Post</button>
    </form>
</div>



</section>

@endsection
