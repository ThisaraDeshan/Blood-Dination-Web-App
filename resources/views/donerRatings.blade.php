<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emergency blood donation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/doner.css')}}">
    <link rel="stylesheet" href="{{asset('css/ratings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    </head>
<body>

    <header>

            <a style="text-shadow: 4px 4px 10px #000000;" href="{{route('neederhome')}}" class="logo">Blood Donation</a>

        <ul class="navlist">

            <li><a style="text-shadow: 4px 4px 10px #000000;" href="{{route('bestDonors')}}">Best Donors</a></li>
            <li><a style="text-shadow: 4px 4px 10px #000000;" href="{{route('neederhome')}}">Search Blood</a></li>
            <li><a style="text-shadow: 4px 4px 10px #000000;" href="{{route('neederAbout')}}">About Us</a></li>
            <li><a style="text-shadow: 4px 4px 10px #000000;" href="{{route('neederContact')}}">Contact Us</a></li>

        </ul>

        <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item m-2">
                                            <a class="nav-link btn mr-4" href="{{ route('login') }}" style="font-size: 15px; font-weight:700; color:#fff;">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item m-2">
                                            <a class="nav-link btn mr-4" href="{{ route('register') }}" style="font-size: 15px; font-weight:700; color:#fff;">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle mr-4" style="font-size: 15px; font-weight:700; color:#fff;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">



                                            <a class="dropdown-item" style="font-weight: 700;" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>


    </header>

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

    <div class="container px-1 py-5 mx-auto">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
                <div class="card">
                    <div class="row justify-content-left d-flex">
                        <div class="col-md-4 d-flex flex-column">
                            <div class="rating-box">
                                <h1 class="pt-4">{{ number_format($ratingAvg,2) }}</h1>
                                <p class="">out of 5</p>
                            </div>
                            <div>
                                <span class="fa fa-star star-active mx-1"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="rating-bar0 justify-content-center">
                                <table class="text-left mx-auto">
                                    <tr>
                                        <td class="rating-label">Excellent  &nbsp;&nbsp;&nbsp;</td>
                                        <td><span>&#8658;</span>&nbsp;&nbsp;</td>
                                        <td class="text-right" style="margin-left:10px; font-weight:bold;">{{$value5}}</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Good  &nbsp;&nbsp;&nbsp;</td>
                                        <td><span>&#8658;</span>&nbsp;&nbsp;</td>
                                        <td class="text-right" style="margin-left:10px; font-weight:bold;">{{$value4}}</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Average  &nbsp;&nbsp;&nbsp;</td>
                                        <td><span>&#8658;</span>&nbsp;&nbsp;</td>
                                        <td class="text-right" style="margin-left:10px; font-weight:bold;">{{$value3}}</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Poor  &nbsp;&nbsp;&nbsp;</td>
                                        <td><span>&#8658;</span>&nbsp;&nbsp;</td>
                                        <td class="text-right" style="margin-left:10px; font-weight:bold;">{{$value2}}</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Terrible  &nbsp;&nbsp;&nbsp;</td>
                                        <td><span>&#8658;</span>&nbsp;&nbsp;</td>
                                        <td class="text-right" style="margin-left:10px; font-weight:bold;">{{$value1}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row d-flex">
                        <div class="d-flex flex-column">
                            <h3 class="mt-2 mb-0">{{$user->name}}</h3>
                            <div>
                            <p class="text-left">
                                <span class="fa fa-star star-active ml-3"></span>
                                <span class="text-muted">{{number_format($ratingAvg,2)}}</span>
                            </p>
                            </div>
                        </div>
                    </div>
                    @foreach ($posts as $post )
                    <div class="row text-left" style="border:solid #FFA2A0 2px; border-radius:20px; margin-bottom:10px;">
                        <h4 class="blue-text mt-3">{{$post->review}}</h4>
                        <p>Rated {{$post->rating}}/5</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 style="color: #000000;">DONER RATINGS & REVIEWS</h1>
        <div class="row p-3">
            <form action="{{route('addRating',$user->id)}}" method="POST">
                @csrf
            <label class="label" for="" style="font-weight: 700;">Rate Doner Here</label>

            <select class="form-select" name="rating" style="width:13%;" aria-label="Default select example">
                <option value="1">
                    ⭐
                </option>
                <option value="2">
                    ⭐⭐
                </option>
                <option value="3">
                    ⭐⭐⭐
                </option>
                <option value="4">
                    ⭐⭐⭐⭐
                </option>
                <option value="5">
                    ⭐⭐⭐⭐⭐
                </option>
            </select>


                <div class="input-field">
                    <label for="" style="font-weight: 700;">Doner Review Comment</label>
                    <textarea id="reviewComment" type="text" class="form-control"  name="reviewComment" required rows="10" placeholder="Enter Your Doner Review Comment..."></textarea>
                </div>
                <button  type="submit" class="btn">Submit Doner Review</button>
            </form>
        </div>
    </div>


    <div class="container mt-4 mb-4" style=" border-radius:30px;">
        <div class="row">
                <div class="col-12">
                    <div class="" style="    box-shadow: 0px 5px 40px rgba(0, 0, 0, 0.5); border: 2px solid #fff; border-radius:30px;">
                        <h1 class="title m-4" style=" text-align:center; color: #000000; text-shadow: 4px 4px 10px #000000; font-weight:700;">If You Want Donate Blood</h1>
                        <p class="" style=" text-align:center; text-shadow: 4px 4px 10px #000000;  color: #fff; font-weight:600;">Between 18 & 55 years of Age ,</p>
                        <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Weight more than 50Kg ,</p>
                        <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">It has been 4 months since the previous blood donation ,</p>
                        <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Blood hemoglobin level 12.5g/dl or more , </p>
                        <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Not pregnant ,</p>
                        <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Healthy ,</p>
                        <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">It has been at least 3 months since returning to SriLanka after Travelling abroad ,</p>
                        <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Free from risky behavior ,</p>
                        <p class="" style="font-size:30px; text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:700;">Being a person is essential.</p>
                    </div>
                </div>



                <div class="col-12">
                    <div class="mt-5" style="    box-shadow: 0px 5px 40px rgba(0, 0, 0, 0.5); border: 2px solid #fff; border-radius:30px;">
                        <h1 class="title" style=" text-align:center; color: #000000; text-shadow: 4px 4px 10px #000000; font-weight:700;">If There Is A Problem?</h1>
                        <p class="" style="  text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">If there is any problem after donating blood and you develop a Non-Communicable disease withi two weeks , contact the parshad Blood Center you have joined or the blood bank of the nearest Hospital.</p>
                    </div>
                </div>
                    <div class="col-12">
                        <div class="mt-5" style="    box-shadow: 0px 5px 40px rgba(0, 0, 0, 0.5); border: 2px solid #fff; border-radius:30px;">
                            <h1 class="title" style=" text-align:center; color: #000000; text-shadow: 4px 4px 10px #000000; font-weight:700;">Contact Numbers</h1>
                            <p class="" style=" text-align:center; text-shadow: 4px 4px 10px #000000;  color: #fff; font-weight:600;">National Blood Center : 011-2369931-4</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Kaburugamuwa : 011-2227232</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Kandy : 081-2222261</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Badulla : 055-2222121</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Ampara : 063-2223914</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Chilaw : 032-2223261</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Hambanthota : 047-2222016</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Kalutara : 034-2236529</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Kurunegala : 037-2229617</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Karapitiya : 091-2226066</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Maharagama : 011-2849525</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Peradeniya : 081-2388261</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Ragama : 011-2960535</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Rathnapura : 045-2226592</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Anuradhapura : 025-2236424</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Jaffna : 021-2223063</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Trincomalee : 026-2222261</p>
                            <p class="" style="text-align:center; text-shadow: 4px 4px 10px #000000; color: #fff; font-weight:600;">Vauniya : 024-2222261</p>
                        </div>
                    </div>
            </div>
    </div>



    <div class="icons">
        <a style="text-shadow: 4px 4px 10px #000000;" href="#"><i class="ri-instagram-line"></i></a>
        <a style="text-shadow: 4px 4px 10px #000000;" href="#"><i class="ri-facebook-box-line"></i></a>
        <a style="text-shadow: 4px 4px 10px #000000;" href="#"><i class="ri-whatsapp-line"></i></a>
    </div>

    <div class="scroll-down">
        <a style="text-shadow: 4px 4px 10px #000000;" href=""><i class="ri-arrow-down-s-fill"></i></a>

    </div>
    <section class="footer">
        <div class="social">
          <a style="text-shadow: 4px 4px 10px #000000;" href="#"><i class="fab fa-instagram"></i></a>
          <a style="text-shadow: 4px 4px 10px #000000;" href="#"><i class="fab fa-snapchat"></i></a>
          <a style="text-shadow: 4px 4px 10px #000000;" href="#"><i class="fab fa-twitter"></i></a>
          <a style="text-shadow: 4px 4px 10px #000000;" href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
        <ul class="list">
          <li>
            <a style="text-shadow: 4px 4px 10px #000000;" href="{{route('donerpost')}}">Search Blood</a>
          </li>
          <li>
            <a style="text-shadow: 4px 4px 10px #000000;" href="{{route('aboutus')}}">About Us</a>
          </li>
          <li>
            <a style="text-shadow: 4px 4px 10px #000000;" href="{{route('contactus')}}">Contact Us</a>
          </li>
          <li>
            <a style="text-shadow: 4px 4px 10px #000000;" href="#">Privacy Policy</a>
          </li>
        </ul>
        <p style="color: #000000; text-shadow: 4px 4px 10px #000000;" class="copyright">All rights reserved @ 2023</p>
      </section>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/app.js')}}"></script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>


{{-- <div class="wrapper p-3">
    <input type="checkbox" name="rating" value="5" />
    <label for="st1"></label>
    <input type="checkbox" name="rating" value="4" />
    <label for="st2"></label>
    <input type="checkbox" name="rating" value="3" />
    <label for="st3"></label>
    <input type="checkbox" name="rating" value="2" />
    <label for="st4"></label>
    <input type="checkbox" name="rating" value="1" />
    <label for="st5"></label>
</div> --}}
