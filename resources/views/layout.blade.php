<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  @yield('head')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>
    Laravel Demo
  </title>
  
    
</head>
<body style="background-color: rgb(35, 35, 35); font-family:'verdana';">
<div class="row">
  <nav class="navbar navbar-expand-md navbar-dark" style="background:rgb(45, 45, 45)">
    <div class="container-fluid">
    

      <div class="col-md-3 col-6">
        <a class="navbar-brand" href="/">
         <img class='' src="{{asset('/images/logo.png')}}">
        </a>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class='navbar-brand text-center mb-3 '>
            <h1 class='text-white display-3'> Game Show </h1>
        </div>

        <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">

            <li class="navbar-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/games/1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Games
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/highestRatedGames">Highest Score</a></li>
                <li><a class="dropdown-item" href="/mostPopularGames">Most Popular</a></li>
                <li><a class="dropdown-item" href="/longestGames">Time</a></li>
              </ul>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="/">Charts</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/feedback">Feedback</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="http://abaubaid.info/blog/">Blog</a>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-md-3">
        <div class="text-end g-3 mb-5 pb-5 me-2">
          <button type="button" class="btn btn-dark">Login</button>
          <button type="button" class="btn btn-dark">Register</button>
        </div>

        <form class="d-flex" role="search" action="/search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light me-2" type="submit">Search</button>
        </form>
      </div>

    </div>

    

  </nav>
</div>
<!--
  <nav class='navbar navbar-expand-lg bg-dark text-white'>
    <div class='container-fluid'>

      <div class='navbar-brand'>
        <img class='' src="{{asset('/images/logo.png')}}">
      </div>

      <div class='navbar-brand'>
        <h1 class='text-white'> Game Show </h1>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <div class="search-container">
        <form action="/search">
          <input type="text" placeholder="Search.." name="search" style="font-size: 70%">
        </form>
 

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 40%;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>  
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu text-white">
              <li><a class="dropdown-item" href="/highestRatedGames">Highest Score</a></li>
              <li><a class="dropdown-item" href="/mostPopularGames">Most Popular</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/longestGames">Time</a></li>
            </ul>
          </li>

          

          <li class="nav-item text-white">
            <a class="nav-link" href="/">Charts</a>
          </li>

          <li class="nav-item text-white">
            <a class="nav-link" href="http://abaubaid.info/blog/">Blog</a>
          </li>
        </ul>
      </div> 

  
      <div class="header_top_login_register">
        <h3 class='header_top_login_register_links'>
          <a href=''> Login </a>
        </h3>
        <h3 class='header_top_login_register_links'>
          <a href=''> Register </a>
        </h3>
      </div>



    </div>
</nav>
-->
  
  <div class='content'>
    @yield('content')
  </div>

  <footer class='footer center ' style="background-color: rgb(45, 45, 45); height: 2cm; display: flex; justify-content: center; align-items: center; margin-top: 3%;">
    <img src="https://www.w3.org/Icons/valid-xhtml10">
    <img src="https://jigsaw.w3.org/css-validator/images/vcss-blue">
  </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
@stack('js')
</body>
</html>
