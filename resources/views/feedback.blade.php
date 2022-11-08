<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>
    Laravel Demo
  </title>
  <style>
    body {
      background-color: rgb(35, 35, 35);
      color: white;
      font-family:'verdana';
    }
    .game_card_container{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: flex-start;
      padding-left: 20px;
      padding-right: 20px;
    }
    .game_card {
      background-color: rgb(45, 45, 45);
      border-radius: 20px;
      padding: 3px;
      padding-left: 0;
      padding-right: 0;
      margin: 20px;
      width: 300px;
      height: fit-content;
      vertical-align: top;
    }
    .title {
      text-align: center;
    }
    h3 a {
      font-size:20px;
      font-weight: bold;
    }
    a {
      color: white;
      text-decoration: none;
    }
    a:hover {
      text-decoration: none;
    }
    .underline_link{
      text-decoration: none;
    }
    .underline_link:hover {
      text-decoration: underline;
    }
    ._header {
      background-color: rgb(45, 45, 45);
      height: 5cm;
    }
    .top_header{
      height: 70%;
      display: inline-flexbox;
      justify-content: start;
      align-items: flex-start;
      flex-wrap: wrap;
    }
    .header_top_logo {
      float: left;
      width: fit-content;
    }
    .header_top_logo_pic {
    }
    .header_top_login_register {
      float: right;
      margin: 0;
      height: 100%;
    }
    .header_top_login_register_links {
      display: inline-block;
      padding: 5px;
      margin: 5px;
      transition-duration: 0.3s;
    }
    .header_top_login_register_links:hover {
      background-color:#EF3B2D;
    }
    .header_top_title {
      font-size: 30pt;
      margin-left:13%;
      text-align: center;
      height: 100%;
      flex-grow: 100%;
    }
    h1 {
      margin: 0 auto;
      margin-top: 15px;
      
    }
    
      /* Navbar container */
    ._navbar {
      overflow: hidden;
      font-family: Arial;
    }

    /* Links inside the navbar */
    ._navbar a {
      font-size: 150%;
      float: left;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* The dropdown container */
    ._dropdown {
      float: left;
      overflow: hidden;
    }
    ._dropbtn:hover{
      cursor: pointer;
    }

    /* Dropdown button */
    ._dropdown ._dropbtn {
      font-size: 150%;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit; /* Important for vertical align on mobile phones */
      margin: 0; /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    ._navbar a:hover, ._dropdown:hover ._dropbtn {
      background-color: red;
    }

    /* Dropdown content (hidden by default) */
    ._dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    ._dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    ._dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    ._dropdown:hover ._dropdown-content {
      display: block;
    } 
    ._content {
    }
    .game_card_pic {
      width: 100%;
      float: inline-start;
      border-radius: 20px;
    }
    .game_card_info_title_text {
      margin-left: 10px;
      margin-right: 10px;
    }
    .game_card_info {
      height: fit-content;
    }
    .game_card_info_platforms {
      display: inline-block;
      width: fit-content;
      height: fit-content;
      padding: 5px;
      padding-left: 10px;
      padding-bottom: 0;
    }
    .game_card_info_rating {
      background-color: rgb(255, 255, 255);
      border-radius: 5px;
      height: 25px;
      width: 33px;
      float: right;
      padding: 3px;
      margin: 5px;
      margin-right: 10px;
      margin-bottom: 0;
    }
    .game_card_info_title {
      display: block;
      height: fit-content;

    }
    .game_card_info_rating_text{
      margin: auto;
      color:rgb(35, 35, 35);
      text-align: center;
    }
    .game_card_info_platforms_icons {
      display: inline;
      height: 20px;
      margin: 2px;
    }
    .game_galary{
      background-color: rgba(0, 0, 0, 0.3);
      border-radius: 1em; /* don't change */
      height: fit-content;
      margin-bottom: 1cm;
    }
    .game_galary_top {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      margin-top: 1cm;
      height: 90vh;
    }
    .game_galary_top_left {
      height: 90%;
      width: 10%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_middle {
      height: 90%;
      width: 80%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
      margin-top: 3em;
    }
    .game_galary_top_middle_pic{
      height: 100%;
    }
    .game_galary_top_right {
      height: 90%;
      width: 10%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_arrows {
      height: 5em;
      opacity: 0.5;
      margin-top: 5em;
      padding: 5px;
      border-radius: 1em;
      border-style: none;
    }
    .game_galary_top_arrows:hover {
      border-style: solid;
      cursor: pointer;
    }
    .game_galary_bottom {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      height: 3cm;
      width: 100%;
    }
    .game_galary_bottom_pics {
      height: 80%;
      border-radius: 5px;
      margin: 5px;
    }
    .game_galary_bottom_pics:hover {
      border-style: solid;
      cursor: pointer;
    }
    .round{
      font-size: 200%;
      padding: 0.5% 1%;
    }
    .round:hover{
      background-color: #ddd;
      color: black;
    }
    .search-container {
      float: right;
      font-size: 270%;
    }
    .pageTitle{
      margin-top: 3%;
      margin-left: 5%;
      font-size: 300%
    }
    .footer {
      background-color: rgb(45, 45, 45);
      height: 2cm;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 3%;
    }
    

</style>
    
</head>
<body>
  <div class='_header'>
    <div class='top_header'>

      <div class="header_top_login_register">
        <h3 class='header_top_login_register_links'>
          <a href=''> Login </a>
        </h3>
        <h3 class='header_top_login_register_links'>
          <a href=''> Register </a>
        </h3>
      </div>

      <div class='header_top_logo'>
        <img class='header_top_logo_pic' src={{asset('/images/logo.png')}}>
      </div>

      <div class='header_top_title'>
        <h1 class='header_title_text fw-bold display-1 ms-2'> Game Show </h1>
      </div>

      <div class="search-container me-2">
        <form action="/search">
          <input type="text" placeholder="Search.." name="search" style="font-size: 70%">
        </form>
      </div>

      <div class="_navbar" style="margin-left: 40%;">
        <a href="/">Home</a>

        <div class="_dropdown">
          <button class="_dropbtn" onclick="location.href='/games/1'">Games
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="_dropdown-content">
            <a href="/highestRatedGames">Highest Score</a>
            <a href="/mostPopularGames">Most Popular</a>
            <a href="/longestGames">Time</a>
          </div>

        </div>

        <a href="/feedback">Feedback</a>
        <a href="http://abaubaid.info/blog/">Blog</a>
      </div> 

    </div>
  </div>
  
  <div class='content'>
    <h1 class="mt-3 ms-2 text-light">Feedback</h1>

    <section class="text-light p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card bg-dark p-5">
                        <div class="card-header text-start h2 mb-2">Your Feedback is valued</div>
                        <div class="card_body">
                            @if(Session::has("message_sent"))
                                <div class= "alert alert-success" role="alert">
                                    {{Session::get("message_sent")}}
                                </div>
                            @elseif(Session::has("error"))
                               <div class= "alert alert-danger" role="alert">
                                {{Session::get("error")}}
                            </div>
                            @else
                            <form name = "myform" id="myform" action= "{{route('storeFeedback')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>Personal Info</div>
                                <fieldset style="border: 2px solid white" class="mb-3">
                                    <div class="form-group m-3 col-6 float-left">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="first_name"  class="form-control" />
                                        <span id="fname-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3 col-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" />
                                        <span id="lname-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3 col-6">
                                        <p>Gender:<p>
                                        <input type="radio" id="genderM" name="gender"  value="male"  class="form-check-input"/>
                                        <label for="name">Male</label>
                                        <input type="radio" id="genderF" name="gender"  value="female" class="form-check-input" />
                                        <label for="name">Female</label>
                                        <span id="gender-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" />
                                        <span id="email-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control" />
                                        <span id="phone-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">Country</label>
                                        <select name="country" id="country" class="form-select" aria-label="Default select example">
                                            <option selected value=""></option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="United State">United State</option>
                                            <option value="United Kindom">United Kindom</option>
                                            <option value="Germany">Germany</option>
                                            <option value="UAE">United Arab Emirates</option>
                                            <option value="Japan">Japan</option>
                                        </select>
                                        <span id="country-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">State</label>
                                        <input type="text" name="state" id="state" class="form-control" />
                                        <span id="state-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">City</label>
                                        <input type="text" name="city" id="city" class="form-control" />
                                        <span id="city-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">Adress</label>
                                        <input type="text" name="address" id="address" class="form-control" />
                                        <span id="address-error" class="text-danger"></span>
                                    </div>
                                </fieldset>
                                <div>Feedback</div>
                                <fieldset style="border: 2px solid white" class="mb-3">
                                    <div class="form-group m-3">
                                        <p>Message Categories</P>
                                        <label for="name">Complaint</label>
                                        <input type="checkbox" id ="complaint" name="Categories[]"  value="complaint" class="form-check-input me-2">
                                        <label for="name">suggestion</label>
                                        <input type="checkbox" id ="suggestion" name="Categories[]"  value="suggestion" class="form-check-input me-2">
                                        <label for="name">Tech Support</label>
                                        <input type="checkbox" id ="support" name="Categories[]"  value="support" class="form-check-input">
                                        <span id="cat-error" class="text-danger"></span>
                                    </div>
                                    
                                    <div class="form-group m-3">
                                        <label for="name">Subject</label>
                                        <input type="text" name="subject" id="subject" class="form-control">
                                        <span id="subject-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="msg">Message</label>
                                        <textarea name="msg" id="msg" class="form-control"></textarea>
                                        <span id="msg-error" class="text-danger"></span>
                                    </div>
                                </fieldset>
                                <div class="text-center mb-3">
                                    <button type="submit" class="btn btn-primary postion-center">Submit</button>
                                    <div id="submit-error" class="text-danger"></div>
                                </div>
                            </form>
                            @endif
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>

  <footer class='footer'>
    <img src="https://www.w3.org/Icons/valid-xhtml10">
    <img src="https://jigsaw.w3.org/css-validator/images/vcss-blue">
  </footer>

</body>
</html>

