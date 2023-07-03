<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emergency blood donation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/doner.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="footer.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
<body>

    <header>
        <a href="./" class="logo">Blood Donation</a>

        <ul class="navlist">
            <li><a href="{{route('index')}}">Donate Now</a></li>
            <li><a href="{{route('donerpost')}}">Search Blood</a></li>
            <li><a href="{{route('aboutus')}}">About Us</a></li>
            <li><a href="{{route('contactus')}}">Contact Us</a></li>

        </ul>

        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item m-2">
                        <a class="nav-link btn" href="{{ route('login') }}" style="font-size: 15px; font-weight:700;">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item m-2">
                        <a class="nav-link btn" href="{{ route('register') }}" style="font-size: 15px; font-weight:700;">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" style="font-weight: 700;" href="">{{ __('Notifications') }}</a>

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

    <main class="py-4">
        @yield('content')
    </main>

    <div class="container mt-4 mb-4" style=" border-radius:30px;">
        <div class="row">
                <div class="col-12">
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



                <div class="col-12">
                    <div class="m-5" style=" border: 2px solid #fff; border-radius:30px;">
                        <h1 class="title m-4" style=" text-align:center; color: #fff; font-weight:700;">If There Is A Problem?</h1>
                        <p class="m-2" style="  text-align:center; color: #fff; font-weight:600;">If there is any problem after donating blood and you develop a Non-Communicable disease withi two weeks , contact the parshad Blood Center you have joined or the blood bank of the nearest Hospital.</p>
                    </div>
                </div>
                    <div class="col-12">
                        <div class="m-5" style=" border: 2px solid #fff; border-radius:30px;">
                            <h1 class="title m-4" style=" text-align:center; color: #fff; font-weight:700;">Contact Numbers</h1>
                            <p class="m-2" style=" text-align:center; color: #fff; font-weight:600;">National Blood Center : 011-2369931-4</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Kaburugamuwa : 011-2227232</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Kandy : 081-2222261</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Badulla : 055-2222121</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Ampara : 063-2223914</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Chilaw : 032-2223261</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Hambanthota : 047-2222016</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Kalutara : 034-2236529</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Kurunegala : 037-2229617</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Karapitiya : 091-2226066</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Maharagama : 011-2849525</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Peradeniya : 081-2388261</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Ragama : 011-2960535</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Rathnapura : 045-2226592</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Anuradhapura : 025-2236424</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Jaffna : 021-2223063</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Trincomalee : 026-2222261</p>
                            <p class="m-2" style="text-align:center;color: #fff; font-weight:600;">Vauniya : 024-2222261</p>
                        </div>
                    </div>
            </div>
    </div>



    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-facebook-box-line"></i></a>
        <a href="#"><i class="ri-whatsapp-line"></i></a>
    </div>

    <div class="scroll-down">
        <a href=""><i class="ri-arrow-down-s-fill"></i></a>

    </div>
    <section class="footer">
        <div class="social">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-snapchat"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
        <ul class="list">
          <li>
            <a href="{{route('index')}}">Donate now</a>
          </li>
          <li>
            <a href="{{route('donerpost')}}">Search Blood</a>
          </li>
          <li>
            <a href="{{route('aboutus')}}">About Us</a>
          </li>
          <li>
            <a href="{{route('contactus')}}">Contact Us</a>
          </li>
          <li>
            <a href="#">Privacy Policy</a>
          </li>
        </ul>
        <p class="copyright">All rights reserved @ 2023</p>
      </section>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/app.js')}}"></script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANnMyu3xUZrGeN_RAQFTqApGqdQ0RrRpE&callback=myMap"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>
