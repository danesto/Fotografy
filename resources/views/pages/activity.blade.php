@extends('layouts.admin')
@section('adminContent')
@section('title')
    <title>Activites</title>
@endsection
    <div class="col-md-9 mx-auto">
        <p class="bg-info text-light p-2 text-capitalize">User's activities on website</p>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">User's email</th>
                <th scope="col">First name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Last login</th>
            </tr>
            </thead>
            <tbody>
            @foreach($act as $user)
                <tr>
                    <td>{{$user->email}}</td>
                    <th scope="row">{{$user->ime}}</th>
                    <td>{{$user->prezime}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <p class="bg-info text-light mt-5 p-2 text-capitalize">Comments Activities</p>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Comment</th>
                <th scope="col">User</th>
                <th scope="col">Posted at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($userComments as $s)
                <tr>
                    <td class="imageTD"><img src="{{url('storage/img/'.$s->src)}}"></td>
                    <th scope="row">{{$s->text}}</th>
                    <td>{{$s->username}}</td>
                    <td>{{$s->created_at}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


    @endsection