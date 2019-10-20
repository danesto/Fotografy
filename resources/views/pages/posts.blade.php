@extends('layouts/admin')
@section('adminContent')
@section('title')
    <title>Posts</title>
@endsection
    <div class="col-md-8">


        <div class="col-md-12 p-0">
            @if(session('message'))
                <div class="alert-success p-3 w-100 border mb-4"><li>{{session('message')}}</li></div>
                        @endif
            @if(count($errors)>0)
                <div class="alert alert-danger p-2 w-100 border mb-4">
                    @foreach($errors->all() as $error)

                        <ul><li>{{$error}}</li></ul>

                    @endforeach
                </div>

            @endif
        </div>


        <div id="accordion">
            <div class="card">
                <div class="card-header bg-dark" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Upload post
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{action('ManageController@insertPost')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="file" value="Select image"   role="tooltip" data-toggle="tooltip" data-placement="right" title="File must be image" placeholder="description of image" name="file" class="border w-100 p-2 mb-3 tt">
                        <input type="text" placeholder="Value of alt attribute"  data-toggle="tooltip" data-placement="right" title="Alt attribute can't have more than 20 characters" placeholder="description of image" name="alt" class="border w-100 p-2 mb-3 tt">
                        <input type="text" data-toggle="tooltip" data-placement="right" title="Title can't have more then 50 characters" placeholder="Title of image" name="titlePost" class="border w-100 p-2 mb-3 tt">
                        <textarea name="desciriptionPost" id="posIt" class="border p-2 tt" data-toggle="tooltip" data-placement="right" title="Description must have maximum 255 charactes" placeholder="Description of image"></textarea>
                        <input type="submit" name="upload" value="Upload" class="btn btn-info w-100 p-2 mt-3" >
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <div id="accordion" class="mt-2">
            <div class="card">
                <div class="card-header bg-dark" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Delete posts
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        @foreach($posts as $post)
                                <div class="border mb-4 text-center">
                                <img src="{{asset('storage/img')}}/{{$post->src}}" class="img-thumbnail">
                                    <a class="text-info" href="posts/{{$post->id_image}}">Delete this user</a>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
