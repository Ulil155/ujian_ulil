@extends('layouts.template-app')

@section('page_heading', "Home")

@section('content')
<head>
<style>
div.bg {
 background-image: url("/img/untag-surabaya-1.jpg");
 background-color: #cccccc;
 width: 100%;
 height: 100%;
 display: flex; flex-direction: column; justify-content: center; align-items: center;
}
.main-wrapper { height: 100vh; }
</style>
</head>
<div id="content" class="d-flex flex-column bg">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="">
            <div class="">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h1><div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                           {{ Auth::user()->name }}
                        </div><h1>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection