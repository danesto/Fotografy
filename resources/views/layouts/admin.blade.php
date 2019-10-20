@if(session()->has('admin'))
@include('partials/head')
@include('partials/admin_nav')
@include('partials/admin_side_nav')
@yield('adminContent')


@else
    <h1>You dont have privieleges on this page!</h1>
@endif