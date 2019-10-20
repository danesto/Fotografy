@extends('layouts/front')
@section('sadrzaj')
@section('title')
    <title>Gallery</title>
@endsection
<div class="container mt-5">
        {{--@foreach($comments as $comment)--}}
            {{--{{$comment  }}--}}
            {{--@endforeach--}}
        {{--<form action="{{ action('FrontEndController@ ') }}" method="GET">--}}
            {{--<span class="ml-4">Filter:</span>--}}
            {{--<select name="category" class="border-0 mr-4">--}}
            {{--@foreach($categories as $category)--}}
                    {{--<option  value="{{$category->type}}">{{$category->type}}</option>--}}
            {{--@endforeach--}}
            {{--</select>|--}}
            {{--<span class="ml-4">Order by:</span>--}}
            {{--<select class="border-0 ml-4" name="order">--}}
                {{--<option>A-Z</option>--}}
                {{--<option>Z-A</option>--}}
                {{--<option>Comments</option>--}}
            {{--</select>--}}
            {{--<input class="btn btn-light border ml-4" type="Submit" name="filter" value="Search">--}}
        {{--</form>--}}



    {{--<div class="row bg-white shadow-sm mx-auto border mt-2">--}}
        {{--<div class="col-md-2 pr-0"><h3>Sort by:</h3></div>--}}
        {{--<div class="col-md-9 my-auto pl-0">--}}
            {{----}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@if(session('user'))--}}
        {{--{{dd(session('user'))}}--}}
    {{--@endif--}}


        {{--@if(session()->has('user'))--}}
            {{--{{session('user')}}--}}
            {{--@endif--}}
        {{----}}
    <div class="row">
        <div class="col-md-12">
            <form method="GET" action="{{ action('FrontEndController@image') }}">
                {{csrf_field()}}
                <div class="col-md-5 text-right float-right">
                    <span class="font-weight-light">Search images: </span>
                    <input type="text" name="s" class="border">
                    <input type="submit" name="search" class="btn btn-info">

                </div>
            </form>
        </div>
    </div>

    <div class="row text-center mt-4 mx-auto">

            @foreach($image as $post)

                <div class="col-md-3">
                    <div class="img-thumbnail shadow-sm mb-5">
                     <img src="{{asset('storage/img').'/'.$post->src}}">
                        <span class="category mt-2"><a href="categories/{{$post->id_image}}">{{$post->title}}</a></span>



                    </div>
                </div>
            @endforeach

    </div>
<div class="navigatePagination col-md-2">

    {{ $image->links() }}
</div>
</div>

    @endsection
