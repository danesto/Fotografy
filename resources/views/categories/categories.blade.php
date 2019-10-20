@extends('layouts/front')
@section('sadrzaj')
@section('title')
    <title>Post</title>
@endsection
<div class="container mt-5">
    {{ app('request')->input('id_i') }}

    <div class="row mx-auto">
        @foreach($image as $post)
            <div class="col-md-10 mx-auto">
                <h2 class="card-title">{{$post->title}}</h2>
                <figure><img src="{{asset('storage/img').'/'.$post->src}}" class="w-100 img-thumbnail"></figure>
                <span class="category float-left"><a href="city"></a></span>
            </div>  </div>
    <div class="row">
            <div class="col-md-12 mt-5">

                <div class="img-thumbnail shadow-sm border">
                {{$post->description}}
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mx-auto mt-5">
        <div class="col-md-12 p-0">
            @if(!session()->has('user') && !session()->has('admin'))
                <h1 class="alert alert-danger mb-5">Login or register to post a commment</h1>
            @endif

            @if(session()->has('user') or session()->has('admin'))
                    <h2>Post a comment:</h2>
            <form method="POST" action="FrontEndController@store">

                {{csrf_field()}}
                <input type="hidden" name="id_i" value="{{$id}}">

                <textarea name="comm" id="comm" class="border shadow-sm" placeholder="text goes here.."></textarea>
                <input type="submit" name="comment" value="Post" class="btn btn-info w-25 float-right">
            </form>
                @endif
        </div>
    </div>


    <h3>All comments:</h3>
    @foreach($comments as $comment)
        <div class="row mx-auto mt-4 border bg-white p-5">
            <div class="col-md-12 pl-0 mx-auto">
                <p class="text-info">username: {{$comment->username}}</p>
                    <p>{{$comment->text}}</p>

                <span class="text-black-50">{{$comment->created_at}}</span>

            </div>
        </div>
    @endforeach
</div>

    @endsection
