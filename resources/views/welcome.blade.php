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













{{-- <div class="container">
    <div class="row">
        <div class="col-6">
            <a class="btn btn11 m-1 mb-4" href="{{route('adddonerpost')}}">Donate Blood</a>
        </div>
        <div class="col-6">
            <a class="btn btn11 m-1 mb-4" href="{{route('donerpost')}}">Search Blood</a>
        </div>
    </div>
</div>



<div class="container mb-4" style="background-color: red; width:100%; height:auto; border-radius:30px;">
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
    width: 100%;
    height: auto;
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>
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
    });
    });
</script> --}}



{{--
@endsection
 --}}
