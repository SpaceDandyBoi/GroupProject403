<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
  <title>
    Laravel Demo
  </title>
  <style type="text/css">
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
    .header {
      background-color: rgb(45, 45, 45);
      height: 5cm;
    }
    .top_header{
      height: 70%;
      justify-content: start;
      align-items: flex-start;
      flex-wrap: wrap;
    }
    .header_top_logo {
      float: left;
      width: fit-content;
      overflow:hidden;
    }
    .header_top_logo_pic {
      overflow:hidden;
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
      text-align: center;
      height: 100%;
      flex-grow: 100;
    }
    h1 {
      margin: 0 auto;
      margin-top: 15px;
      
    }
    
      /* Navbar container */
    .navbar {
      overflow: hidden;
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    /* Links inside the navbar */
    .navbar a {
      font-size: 150%;
      float: left;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* The dropdown container */
    .dropdown {
      float: left;
      overflow: hidden;
    }
    .dropbtn:hover{
      cursor: pointer;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
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
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: red;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    } 
    .content {
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
      font-size: 300%;
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
      clear:both;
    }


    
.logoutbtn {
  background-color: #fff;
  border: 1px solid #d5d9d9;
  border-radius: 8px;
  box-shadow: rgba(213, 217, 217, .5) 0 2px 5px 0;
  box-sizing: border-box;
  color: #0f1111;
  cursor: pointer;
  display: inline-block;
  font-family: "Amazon Ember",sans-serif;
  font-size: 13px;
  line-height: 29px;
  padding: 0 10px 0 11px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  width: 100px;
}

.logoutbtn:hover {
  background-color: #f7fafa;
}

.logoutbtn:focus {
  border-color: #008296;
  box-shadow: rgba(213, 217, 217, .5) 0 2px 5px 0;
  outline: 0;
}
.GtableBox{
    align-content: center; 
    text-align: center; 
    margin-left: 25%; 
    margin-right: 25%;
  }
  table, th, td{
    border:1px solid black;
  }
  tr:hover {
    background-color: rgb(192, 0, 0);
    color: black;
  }
  th{
    background-color: aquamarine;
    color: black;
  }
    

</style>
    
</head>
<body>
  <div class='header'>
    <div class='top_header'>

      <div class="header_top_login_register">

        @auth  
                  
        <span style="text-transform:uppercase" > {{auth()->user()->name}} </span>
        
        <form method="post" action="/logout"> 
          @csrf
          <div>
            <button type="submit" class="logoutbtn"> logout </button>
          </div>
        </form>
        
        @else


        <h3 class='header_top_login_register_links'>
          <a href="/login"> Login </a>
        </h3>
        <h3 class='header_top_login_register_links'>
          <a href="/register"> Register </a>
        </h3>

        @endauth
      </div>

      <div class='header_top_logo'>
        <img alt="logo" class='header_top_logo_pic' usemap="#Mmap" src="{{asset('/images/logo.png')}}"/>
        <map name="Mmap" id="Mmap">
          <area shape="default" href="/" alt="homePage"/>
        </map>
      </div>

      <div class='header_top_title'>
        <h1 class='header_title_text'> Game Show </h1>
      </div>

      <div class="search-container">
        <form action="/search">
          <div>
            <div style="">
              <input type="text" name="search" id="search" style="font-size: 70%; "/>
              <button type="submit" id="searchBitton" style="font-size: 60%;  background-color: #e7e7e7;  border: none; color: black; text-align: center; text-decoration: none; display: inline-block;" >Search</button>
            </div>
          </div>
        </form>
      </div>

      <div class="navbar" style="margin-left:20%;">
        <a href="/">Home</a>

        <div class="dropdown">
          <button class="dropbtn" onclick="location.href='/games/1'">Games
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content">
            <a href="/highestRatedGames">Highest Score</a>
            <a href="/mostPopularGames">Most Popular</a>
            <a href="/longestGames">Time</a>
          </div>

        </div>

        <a href="/charts">Charts</a>

        <a href="/feedback">Feedback</a>

        <a href="/contactUs">Contact Us</a>

        <div class="dropdown">
          <button class="dropbtn" onclick="location.href=''">Developers
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content">
            <a href="/resume/Khalid_Alghamdi">Khalid Al-Ghamdi</a>
            <a href="/resume/Anas_Baubaid">Anas Baubaid</a>
            <a href="/resume/Abdullah_Fadaq">Abdullah Fadaq</a>
            <a href="/resume/Mohammed_Alzahrani">Mohammed Alzahrani</a>
          </div>

        </div>

        <a href="http://abaubaid.info/blog/">Blog</a>
        
      </div> 

    </div>
  </div>
  
  <div class='content'>
    @yield('content')
  </div>

  <div class='footer'>
    <img src="https://www.w3.org/Icons/valid-xhtml10" alt="xhtml validation"/>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
      <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
    </a>
</div>

</body>
</html>
