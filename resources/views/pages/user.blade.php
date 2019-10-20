@include('partials/head')
@include('partials/nav');

@if(session()->has('user'))
<div class="container">
    <div class="row">
        <div class="col-md-3">

                <h2 class="text-info">#{{session('user')->username}}</h2>
                <figure><img src="{{asset('storage/img/user.png')}}" class="mw-100"></figure>
                <p class="bg-white border shadow-sm p-3">{{session('user')->name}}</p>
                <p class="bg-white border shadow-sm p-3">{{session('user')->lastname}}</p>
                <p class="bg-white border shadow-sm p-3">{{session('user')->email}}</p>
        </div>
        <div class="col-md-8 offset-1">
            <h3 class="text-info">Photographies you commented on:</h3>
            @foreach($userComments as $com)
                <div class="img-thumbnail sized_image col-md-12 mt-5">

                    <figure><img src="{{asset('storage/img')}}/{{$com->src}}"> </figure>
                    <div class="">{{$com->description}}</div>
                </div>

                @endforeach

        </div>
    </div>
</div>

@endif;
</body>
</html>