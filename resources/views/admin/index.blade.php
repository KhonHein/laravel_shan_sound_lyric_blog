@extends('admin.master')
@section('title','AdminDashboard')
@section('content')
<!--Main Section Start-->
<div class="container-xxl py-5 mb-5">
    <button class="btn btn-dark ms-4" onclick="history.back()"><i class="fa-solid fa-left-long" class="backArrow"></i></button>
    <div class="container my-5 py-5 px-lg-5 w3-container w3-center w3-animate-zoom">
        <div class="row g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h4 class="text-black fw-bold my-3">Firstly, thank you for visiting to our blog.</h4>
                <p class="fontTimeNewItalic fs-3 fw-bold my-2 text-black shanniFont"> yDeVGifBulVauMh rgFokifjcMVqmOfB </p>
                    <p class="fontTimeNewItalic fs-5 fw-bold mt-2 text-black shanniFont">wDBeMVvdufhOmyfhoFufhiOf;[mifBvdufhvmb;wb;eFif;nloDj [myf[GifBnlcMV/</span>
                    egF;eMVvdufhxbB  wmif;yAef;vGifBnkefBapFBzdifBaiFaw ? wmif;vdufhvmb;zMoMcgFjaw ? wmif;vGufhvmb;ydefpMaw wFrfBrmbj rFifazFuef;nlcMV qmOfB /
                    cmOfyAef;ulVvGifBvGifB ,mrf;yAef;ulVcmOf;cmOf; wmif;yAef;ulVqMVqMV rM;wFrfBzwfwkpf;el;qGrf;ayFBcMVanM; /    
                    </p>
                <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free Quote</a>
                <button class="contactMeBtn btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Me </button>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid coverImg" src="{{ asset('img/coverImg.png') }}" alt="">
                <div class="contactMeDiv my-5 form-control mx-auto bg-secondary">
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-warning fs-3 fa-regular fa-circle-user"></i>:-  Hello Shanni  </p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-white fs-3 fa-regular fa-envelope"></i>:-  shannivocab@gmail.com </p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-danger fs-3 fa-solid fa-map-location-dot"></i>:-  Mandalay</p>
                    <p class="fontTimeNewItalic my-3 fs-5 fw-bold text-black"><i class="text-primary fs-3 fa-solid fa-mobile-screen"></i>:-  09+-------</p>
                   </div>
            </div>
        </div>
    </div>
</div>

<!--Main Section end -->
@endsection

