@extends('layouts/front')
@section('sadrzaj')
@section('title')
    <title>Login</title>
@endsection
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-5 mx-auto text-center">
                @if(session()->has('user'))
                    <h2 class="text-info text-justify">You are already logged in</h2>

                @else
                <h3 class="shadow-sm bg-white border p-2 text-info">Login:</h3>
                <form action="{{ action('LoginController@login') }}" method="post" class="border bg-white p-2">
                    {{csrf_field()}}

                    <input type="text" name="email" placeholder="email" class="border w-100 mb-3 p-2">

                    <input type="password" name="pass" class="border w-100 mb-3 p-2" placeholder="password">
                    <input type="submit" class="btn btn-info w-100" name="login" value="login">

                </form>
            </div>
        </div>
    </div>


    @endif
    @endsection