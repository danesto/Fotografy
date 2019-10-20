@extends('layouts.front')

@section('sadrzaj')
    @section('title')
        <title>Author</title>
        @endsection

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('storage/img/author.png')}}" class="w-100">
            </div>

            <div class="col-md-9">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Education</th>
                        <th scope="col">Index</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Danilo</th>
                            <td>Stojanovic</td>
                            <td>dane.sto@gmail.ocm</td>
                            <td>ICT College, university of Belgrade</td>
                            <td>184/16</td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>




    @endsection