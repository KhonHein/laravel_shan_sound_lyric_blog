<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @yield('cssLink')
    <!-- Favicon -->
    {{-- <link href="img/favicon.ico" rel="icon"> --}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/admin/index.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-secondary p-0">
        <!-- Navbar Start -->
        <div class="container-xxl position-relative p-0" >
            <nav class=" bg-secondary navbar sticky navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <h3 class="text-black fw-bold d-flex m-auto">Hello Shanni</h3>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarCollapse">
                    @if (Route::has('login'))
                    <div class="sm:fixed mx-3 my-1  sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Register</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </nav>
            <div class="mainDiv d-flex justify-content-around row">
                <!--Main Section Start-->
                <div class="col-md-5 my-5 mx-auto">
                    <a href="https://web.facebook.com/sai.bwathmara.9/" target="_blank" >
                        <img class="khonImg Hein border rounded-5 rounded-circle" src="{{ asset('img/khon.jpg') }}" alt="">
                        <img class="Certi border rounded-2" src="{{ asset('img/certi.jpg') }}" alt="" style="width:500px; height:auto;">
                    </a>
                    <div class="fontTimeNewItalic text-white fs-3 seeCerti"><button class="btn border rounded-5">see cover</button></div>
                    <div class="fontTimeNewItalic text-white fs-3 hideCerti"><button class="btn border rounded-5">hide cover</button></div>
                    <p class="fontTimeNewItalic fs-3 fw-bold my-2 text-black shanniFont"> yDeVGifBulVauMh rgFokifjcMVqmOfB </p>
                    <p class="fontTimeNewItalic fs-5 fw-bold mt-2 text-black shanniFont">wDBeMVvdufhOmyfhoFufhiOf;[mifBvdufhvmb;wb;eFif;nloDj [myf[GifBnlcMV/</span>
                    egF;eMVvdufhxbB  wmif;yAef;vGifBnkefBapFBzdifBaiFaw ? wmif;vdufhvmb;zMoMcgFjaw ? wmif;vGufhvmb;ydefpMaw wFrfBrmbj rFifazFuef;nlcMV qmOfB /
                    cmOfyAef;ulVvGifBvGifB ,mrf;yAef;ulVcmOf;cmOf; wmif;yAef;ulVqMVqMV rM;wFrfBzwfwkpf;el;qGrf;ayFBcMVanM; /    
                    </p>
                    <!-- //date and time -->
                    <div class="form-control bg-secondary d-flex justify-content-center">
                        <h3 class="text-black fw-bold d-flex m-auto todayDate shanniFont"></h3>
                        <button class="text-black fw-bold fs-3 btn btn-outline-warning border-rounded border-white m-auto todayTime shanniFont"></button>
                    </div>
                </div>
                <div class="col-md-5 my-5 mx-auto text-center text-black">
                    <h3 class="text-black fs-1 fw-bold mt-2 d-inline-block shanniFont">rgF okifj cMV </h3>
                   <h4 class="text-black fs-3 fw-bold mt-2">Well Come To Hello Shanni</h4>
                   <p class="fontTimeNewItalic fs-4 fw-bold mt-2">This is my hello shanni testion project .</p>
                   <p class="fontTimeNewItalic fs-4 fw-bold mt-2 shanniFont">nif;ueD;arF;oFrf; oifjavFxlyfrM;auMV cgmrf;omifnusHmpHmnGefaw wFrfBolifrM;oDjebBcMVaeMj</p>
                   
                   <div class="my-3 mx-auto">
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black">Register Sing up or Login  And visit to my personal website. </p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black">If you have some any Idea , you can leave some comment .</p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black">If you have some project , you can contact me to join your team .</p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black">Thanks.</p>
                   </div>
                   <p class="fontTimeNewItalic fs-3 fw-bold my-2 text-warning">At first , if you didn't succeed, call it version 1.0;</p>
                   <button class="welcomeContact btn btn-outline-light mt-5 py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Me </button>
                   <div class="welcomeContactDiv form-control mt-3 mx-4 bg-secondary">
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-warning fs-3 fa-regular fa-circle-user"></i>:-  Hello Shanni Team </p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-white fs-3 fa-regular fa-envelope"></i>:-  example@gmail.com </p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-danger fs-3 fa-solid fa-map-location-dot"></i>:- Mandalay</p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-primary fs-3 fa-solid fa-mobile-screen"></i>:- 09+------</p>
                   </div>
                </div>
                <!--Main Section end -->
            </div>

        </div>
    </div>
        <!-- Navbar  End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
<!-- JQuery link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/admin/index.js') }}"></script>
</html>


