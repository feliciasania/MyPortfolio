<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
    integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
    crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-white fw-bold hover-text" href="{{route('home')}}">My Portfolio</a>
            <button class="navbar-toggler text-uppercase fw-bold bg-dark text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav d-flex justify-content-end fw-bold">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-white hover-text-logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>
    <div class="body mt-6 container">
        <img src="{{ asset($content->image) }}" class="card-img-top" alt="">
        <div class="d-flex justify-content-end mt-5">
            <button type="button" class="btn btn-dark p-2"><i class="fas fa-plus"></i> Add Photo</button>
        </div>
        <div class="">
            <h1 class="fw-bold text-center mt-3 mb-0">{{ $content->name}}</h1>
            <p class="text-secondary text-center">{{$content->date}}</p>
        </div>
        <div class="pl-4 text-center">
            {{$content->deskripsi}}
        </div>
        
        <div class="row">
            
            <div class="col-4 mt-5">
                <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/image/male.png')}}" class="card-img-top" alt="...">
                    <div class="overlay">
                        <a href="#" class="text-decoration-none text-white mt-1 delete fw-bold">DELETE</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-4 mt-5">   
                <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/image/male.png')}}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-4 mt-5">
                <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/image/female.png')}}" class="card-img-top zoom" alt="..." id="myImg">
                </div>
            </div>
            <div class="col-4 mt-5">
                <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/image/background.jpeg')}}" class="card-img-top zoom" alt="..." id="myImg2">
                </div>
            </div>
            <div class="col-4 mt-5">
                <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/image/background.jpeg')}}" class="card-img-top" alt="...">
                </div>
            </div> --}}
        </div>
        {{-- preview --}}
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>
    </div>
    <footer class="bg-dark text-center text-white mt-5">
        <div class="container p-4 pb-0">
          <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button"
              ><i class="fab fa-google"></i
            ></a>
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
          </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="#">myportfolio.com</a>
        </div>
      </footer>
   
      <script src="{{asset('assets/js/script.js')}}"></script>
      {{-- js bootstrap --}}
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>