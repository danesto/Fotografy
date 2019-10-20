@extends('layouts/front')
@section('sadrzaj')
@section('title')
    <title>Register</title>
@endsection
<div class="container mt-5">

    <div class="row mx-auto">

        <div class="col-md-5 mx-auto">
            @if($errors)

                @foreach($errors->all() as $error)
                   <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
            @endif
        <h3 class="text-info bg-white mb-3 border p-2 shadow-sm text-center">Register for free</h3>
            <form method="POST" action="{{ action('ManageController@store') }}" class="border p-2 shadow-sm bg-white register-form">
                {{csrf_field()}}
                <input type="text" name="name" placeholder="First Name" class="w-100 border">
                <input type="text" name="lastname" placeholder="Last name"  class="w-100 border">
                <input type="text" name="username" placeholder="username"  class="w-100 border">
                <input type="password" name="password" placeholder="Password"  class="w-100 border">
                <input type="text" name="email" placeholder="E-mail" class="w-100 border">
                <input type="submit" name="register" placeholder="Register" class="btn btn-info w-100 border">
            </form>
        </div>
    </div>
</div>

    @endsection