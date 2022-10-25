<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>
    Laravel Demo
  </title>
  <style>
    body {
      background-color: rgb(35, 35, 35);
      color: white;
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
      text-decoration: underline;
    }
    .header {
      background-color: rgb(45, 45, 45);
      height: 5cm;
    }
    .top_header{
      height: 70%;
    }
    .header_top_logo {
      float: left;
    }
    .header_top_logo_pic {
    }
    .header_top_title {
      display: inline-block;
      font-size: 30pt;
      width: 75%;
      text-align: center;
      margin: 0;
    }
    .header_top_title_text {
      margin: 0;
    }
    .header_links {
      height: fit-content;
      width: 75%;
      display: inline-block;
      margin: auto;
      text-align: center;
    }
    .header_links_text {
      margin-right: 15px;
      display: inline-block;

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
      border-radius: 3%;
    }
    .game_galary_top {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      height: 10cm;
    }
    .game_galary_top_left {
      height: 90%;
      width: 20%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_middle {
      height: 90%;
      width: 60%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_middle_pic{
      height: 100%;
    }
    .game_galary_top_right {
      height: 90%;
      width: 20%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_arrows {
      height: 25%;
      opacity: 0.5;
    }
    .game_galary_bottom {
      display: flex;
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
    }
    
  </style>
</head>
<body>
  <div class='header'>
    <div class='top_header'>
      <div class='header_top_logo'>
        <img class='header_top_logo_pic' src={{asset('/images/logo.png')}}>
      </div>
      <div class='header_top_title'>
        <h1 class='header_title_text'> Laravel Demo </h1>
      </div>
    </div>
    <div class='header_links'>
      <h2 class='header_links_text'>
        <a href='/'> Home </a>
      </h2>
      <h2 class='header_links_text'>
        <a href='/1'> Games </a>
      </h2>
      <h2 class='header_links_text'>
        <a href=''> Charts </a>
      </h2>
      <h2 class='header_links_text'>
        <a href=''> Blog </a>
      </h2>
    </div>
  </div>
  <div class='content'>
    @yield('content')
  </div>
</body>
</html>
