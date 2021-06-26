@extends('layouts.template-app')

@section('page_heading', "")

@section('content')
    <h1 class="font-weight-bold text-primary text-center text-uppercase mb-1">
        Selamat Datang, <br>
        {{ Auth::user()->name }}
    <h1>
@endsection
