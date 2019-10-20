@extends('layouts.front')

@section('sadrzaj')
@section('title')
    <title>About</title>
@endsection

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('storage/img/about.jpg')}}" class="w-100 h-100">
            </div>
            <div class="col-md-7">
                <h2>About us</h2>
                We create powerful imagery that sells. We are a small business run by Helen & Andrew Perris. Andrew specialises in Food, Lifestyle, Catalogue & Interiors Photography. Helen heads up the studio and product photography with a background in design.
                We cover photography projects from conception to production – including art direction, styling, design advice, retouching and location sourcing. We’re a small team, heavy on experience with the benefit of a wide network of experienced photographers and retouchers who work with us on a regular basis. From small to high volume, we create affordable high end solutions for all business sizes – start-up to significantly sized!
            </div>
        </div>
    </div>


    @endsection