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









{{--
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4">
            <a href="{{route('donerpost')}}" style="width:100%;" class="btn btn11 mb-4"><b>Doner Posts</b></a>
        </div>
        <div class="col-4">

        </div>

        <div class="col-4">

        </div>
        <div class="col-4 header mb-3" style="text-align: center; font-size:30px; font-family:; background-color:grey; color:#ffffff; border-radius:20px;">
            <p>Fill Your Information Below</p>
        </div>
        <div class="col-4">

        </div>

        <div class="col-md-4">

        </div> --}}

{{--         <div class="col-md-4" style="border:1px solid black; border-radius:40px; ">

            <form method="post" action="{{route('donerstore')}}" class="m-3">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Doner Name</label>
                  <input required type="text" class="form-control" name="donername" placeholder="Enter Doner Name">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Doner Address</label>
                  <input required type="text" class="form-control" name="doneraddress" placeholder="Enter Doner Address">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contact Number</label>
                    <input required type="text" class="form-control" name="donercontactnumber" placeholder="Enter Doner Contact Number">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Doner Age</label>
                    <input required type="text" class="form-control" name="donerage" placeholder="Enter Doner Age">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Doner location</label>
                    <input required type="text" class="form-control mb-3" name="donerlocationlatitude" placeholder="Enter Doner City">
{{--                     <input required type="text" class="form-control" name="donerlocationlongitude" placeholder="Enter Doner Location Longitude"> --}}
                  {{-- </div>
                  <div class="mb-3">
                    <label  class="form-label">Doner Blood Type</label>
                    <select required class="form-select" name="donerbloodtype" aria-label="Default select example">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="AB">AB</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                      </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Doner Post Title</label>
                    <input required type="text" class="form-control" name="donerposttitle" placeholder="Enter Doner Post title">
                  </div>
                    <div class="mb-3">
                      <label  class="form-label">Doner Post Description</label>
                      <textarea required type="text" class="form-control" name="donerpostdescription" placeholder="Enter Doner Post Description" rows="8"></textarea>
                    </div>

                <button type="submit" class="btn btn11">Save & Create Donate Post</button>
              </form>
        </div>

        <div class="col-md-4">

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
        </div> --}}


{{-- <style>
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
  </style>  --}}

@endsection
