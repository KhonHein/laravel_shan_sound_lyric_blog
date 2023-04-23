@extends('admin.master')
@section('title','Hello Shanni')
@section('content')
<!--Main Section Start-->
<div class="container-xxl py-2 mb-2">
    <button class="btn btn-dark ms-4" onclick="history.back()"><i class="fa-solid fa-left-long" class="backArrow"></i></button>
    <div class="container my-2 py-2 px-lg-5 w3-container w3-center w3-animate-zoom">
        <div class="row g-5 py-2">
        @if (Session::has('updateSuccess'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Dear {{ Auth::user()->name }} !</strong>{{ Session::get('updateSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
                <table>
                    <tr>
                        <th class=" m-2 text-black fw-bold">Id</th>
                        <th class=" m-2 text-black fw-bold">Category name</th>
                        <th class=" m-2 text-black fw-bold"> Edit/Update</th>
                        <th></th>
                    </tr>
                    <tbody>

                        @foreach($categories as $c)
                        <form action="{{ route('admin#updateCategory') }}" method="POST" class="row g-5 py-5 d-flex">
                         @csrf
                        <tr class="my-2">
                            <td class =" m-2 text-black fw-bold m-2 text-black fw-bold shanniFont fs-4">{{ $c->id }}</td>
                            <td class =" m-2 text-black fw-bold m-2 text-black fw-bold shanniFont fs-4">{{ $c->category_name }}</td>
                            <td class =" m-2 text-black fw-bold m-2 text-black fw-bold  fs-4">
                                <input name="categoryName" class="m-2 text-black border rounded-3 shanniFont fs-4 fw-bold" value="{{ $c->category_name }}" style="width:150px;" required />
                                <button type=""submit class="btn btn-dark btn-outline-danger">save&change</button>
                            </td>
                            <td>
                                <a href="{{ route('admin#deleteCategroy',$c->id) }}" alert="" class="">
                                <i class="fa-solid fa-trash-can fs-5 text-danger"></i>
                                </a>
                            </td>
                            <input name="categoryId" type="hidden" value{{ $c->id }}/>
                        </tr>
                        </form>
                        @endforeach

                    </tbody>
                </table>
        </div>
    </div>
</div>
<!--Main Section end -->
@endsection

