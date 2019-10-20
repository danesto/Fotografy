<body class="bg-light">
<div class="container mt-5">
    <div class="row mb-5">
        <div class="col-md-6 logo mx-auto text-center my-auto">
            <h1 class="my-auto"><a class="text-dark logo" href="{{asset('index')}}">Fotografy</a></h1>
            <h2 class="text-danger">admins panel</h2>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('index')}}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('gallery')}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('register')}}">Register</a>
                </li>
                @if(session()->has('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('logout')}}">Logout</a>
                    </li>
                @endif

                @if(!session()->has('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('login')}}">Login</a>
                    </li>
                @endif
            </ul>




        </div>
    </nav>
</div>
