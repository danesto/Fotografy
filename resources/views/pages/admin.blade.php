
@extends('layouts/admin')
@section('adminContent')
<div class="col-md-9 adminContent">
    @if(session()->has('admin'))

        <div class="col-md-4 img-thumbnail">
            <figure><img src="{{asset('storage/img/admin.png')}}" class="mw-100"> </figure>
        </div>
    <div class="col">
        <h6><span class="text-info">Admin: </span>{{session('admin')->name}} {{session('admin')->lastname}}</h6>
        <h6><span class="text-info">Email: </span> {{session('admin')->email}}</h6>
        <h6><span class="text-info">Admin since: </span> {{session('admin')->updated_at}}</h6>
        <h4 class="thead-dark">Privileges:</h4>
        <table class="table mt-3">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                <th scope="col">Insert</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">FULL</th>
                <td>YES</td>
                <td>YES</td>
                <td>YES</td>
            </tr>

            </tbody>
        </table>
    </div>
        @endif

</div>





@endsection

