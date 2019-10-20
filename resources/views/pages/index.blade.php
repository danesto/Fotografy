@extends('layouts.front')
@section('sadrzaj')
@section('title')
    <title>Home</title>
@endsection
<div class="container mt-5">
    <div class="row text-center mx-auto">
        <div class="col-md-12 mx-auto">
            <div id="carouselExampleControls" class="carousel slide mx-auto" data-ride="carousel">
                <div class="carousel-inner mx-auto">
                    <div class="carousel-item active">
                        <img class="d-block w-100" height="540px" src="{{asset('img/slider/1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" height="540px" src="{{asset('img/slider/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" height="540px" src="{{asset('img/slider/3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row text-center mx-auto mt-5">
        <?php $count = 0; ?>
        @foreach($image as $post)
                <?php if($count == 8) break; ?>
        <div class="col-md-3">
            <div class="img-thumbnail mb-5">
                <img src="{{asset('storage/img').'/'.$post->src}}">
                <span class="category mt-2"><a href="categories/{{$post->id_image}}">{{$post->title}}</a></span>

            </div>
        </div>
                    <?php $count++; ?>
        @endforeach
    </div>
</div>
    @endsection
