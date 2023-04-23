
@extends('admin.master')
@section('title','Heillo Shanni')
@section('cssLink')
<!-- <link href="{{ asset('css/admin/home.css') }}" rel="stylesheet"> -->
@endsection
@section('content')
<!--Main Section Start-->
<div class="containerHome">
            <div class="left-pane border border-dark">
              <!-- Content for left pane goes here -->
             <div class="container">
                <nav class="stickyNavbar">
                <button class=" mx-auto btn btn-danger btn-sm text-black fw-bold tex-center" onclick="history.back()"><i class="fa-solid fa-left-long"></i></button>
                <button class="btn btn-dark m-2 " onclick="history.back()">Back</button>
                </nav>

                @foreach($categories as $c)
                <a href="{{ route('admin#electByCategory',$c->category_name) }}" onclick="showByCategory()" class="selectByCategory shadow-sm btn btn-secondary border rounded-4 my-2 d-block " ><p class="shanniFont fs-4">{{ $c->category_name }}</p></a>
                @endforeach

             </div>

            </div>
            <div class="right-pane ">

                    <!-- content session-->
                <div class="show-post-div container-fluid justify-content-around d-flex row mx-auto my-2">
                    @if($posts->count() == 0)
                        <div class="col-lg-3 col-md-4 col-sm-5 m-auto p-1 hoverOverTheImage">
                            <h4 class="my-5 text-center ">There is no post</h4>
                        </div>
                    @else
                    @foreach($posts as $p)
                    <a href="{{ route('admin#postDetails',$p->id) }}" class="myElement col-sm-6 col-md-4 col-lg-3 border border-left-0  rounded-2 m-2 justify-content-center text-center rightContentChildCiv hoverOver">
                        @if($p->image != null)
                        <img class="listImg rounded mt-1" src="{{  asset('storage/'.$p->image) }}" alt="" srcset="">
                        @else
                            @if(Auth::user()->gender === 'female')
                            <img class="listImg rounded mt-1" src="{{  asset('img/femalePostDefault.jpg') }}" alt="" srcset="">
                            @elseif(Auth::user()->gender === 'male')
                            <img class="listImg rounded mt-1" src="{{  asset('img/malePostDefault.png') }}" alt="" srcset="">
                            @else
                            <img class="listImg rounded mt-1" src="{{  asset('img/null.png') }}" alt="" srcset="">
                            @endif
                        @endif
                        <p class="text-black fw-bold shanniFont fs-4 text-decoration-none">{{ $p->title }}</p>
                        <audio src="{{ asset('storage/'.$p->sound) }}" controls class="my-2 myAudio" type="audio/mpeg" style="width:200px; height:30px;"></audio>
                    </a>
                    @endforeach
                    {{-- @foreach($posts as $p)
                        <div class="col-lg-3 col-md-4 col-sm-5 m-auto p-1 hoverOverTheImage">
                            <a href="{{ route('admin#postDetails',$p->id) }}" class="card mb-3 form-control border border-2 rounded-4">
                                @if($p->image != null)
                                <img class="card-img-top" src="{{ asset('storage/'.$p->image) }}" alt="">
                                @else
                                <img class="card-img-top" src="{{ asset('img/null.png') }}" alt="">
                                @endif

                                <div class="card-body">
                                <h5 class="card-title">{{ $p->title }}</h5>
                                <p class="card-text">
                                    {{ implode(' ', array_slice(str_word_count($p->description, 1), 0, 3)) }}
                                        @if (str_word_count($p->description) > 3)
                                                <p class="read-more-link">Read more</p>
                                        @endif
                                </p>
                                <audio src="{{ asset('storage/'.$p->sound) }}" controls style="width:200px;"></audio>
                                </div>
                            </a>
                        </div>
                    @endforeach --}}
                    @endif
                </div>

                <!-- Full Screen Search Start -->
                <form action="{{ route('admin#homePage') }}" method="GET"  class="modal fade" id="goToSearchModal" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                            <div class="modal-header border-0">
                                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex align-items-center justify-content-center">
                                <div class="input-group" style="max-width: 600px;">
                                    <input name="key" type="text" class="form-control text-white fs-4 bg-transparent border-light p-3 shanniFont " placeholder="wFrfBcMj">
                                    <button type="submit" class="btn btn-primary px-4"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Full Screen Search End -->

            </div>
        </div>
<!--Main Section end -->
@endsection





