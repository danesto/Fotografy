@extends('layouts/admin')
@section('adminContent')
@section('title')
    <title>User Manage</title>
@endsection

             <div class="col-md-9 mx-auto">
                 <table class="table">
                     <thead class="thead-dark">
                     <tr>
                         <th scope="col">First name</th>
                         <th scope="col">Last name</th>
                         <th scope="col">Email</th>
                         <th scope="col">Registered since</th>
                         <th scope="col">Role</th>
                         <th scope="col">Manage</th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach($users as $user)
                         <tr>
                             <th scope="row">{{$user->name}}</th>
                             <td>{{$user->lastname}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->updated_at}}</td>
                             <td>{{$user->role_name}}</td>
                             <td><a class="text-info" href="users/{{$user->id}}">Delete this user</a></td>
                         </tr>
                     @endforeach

                     </tbody>
                 </table>


             </div>
    </div>
    </div>

    @endsection
