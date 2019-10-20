@extends('layouts/front')
@section('sadrzaj')
@section('title')
    <title>Gallery</title>
@endsection
        <div class="container">
            <h2>Search results: </h2> <br>
            <div class="row">
                @foreach($img as $post)

                    <div class="col-md-3">
                        <div class="img-thumbnail shadow-sm">
                            <img src="{{asset('/img').'/'.$post->src}}">
                            <span class="category float-left mt-2"><a href="categories/{{$post->id_image}}">{{$post->title}}</a></span>
                            <span class="comments float-right mt-2">comments: 332</span>

                        </div>
                    </div>
                @endforeach
                {{$img->links()}}
            </div>
        </div>
    @endsection