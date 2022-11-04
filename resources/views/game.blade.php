@extends('layout')
<?php use \App\Http\Controllers\GameController;
      $pics = json_decode($game['short_screenshots'], true);
      $jsonPics = GameController::DecodePics($pics);
      ?>
<style>
  .Game_Container {
      margin-left: 5%;
      margin-top: 3%;
      margin-right: 4%;
      overflow:hidden;
  }

  #leftSide {
      width: 100%;
      height: 50%;
      display: flex;
      flex-wrap: wrap;
      overflow:hidden;
  }

  #Game_Name {
      font-family: 'Franklin Gothic Medium';
      font-size: 300%;
      color: #white;
      -webkit-text-stroke: 0.1rem #010100;
  }

  #ratingBox {
      display: inline;
      border-radius: 10%;
      font-size: 200%;
      color: #010100;
      opacity: .7;
  }

  #imageGame {
    max-width:100%;
    max-height:100%;
  }
  .game_galary_top_middle{
    background-image: url({{$pics[0]['image']}})
  }
  #game_galary_bottom_pics_0{
    border-style: solid;
  }
  
</style>
<script type="text/javascript">
  var jsonPics = "{{$jsonPics}}";
  jsonPics = jsonPics.substring(1);
  Pics = jsonPics.split(",");
  picNum = 0;
  picArr = Pics.length-1;
  prevPic = 0;
  function UpdateGalary(action) {
    if(action == "next"){
      if((picNum + 1) > picArr){
        picNum = 0;
      } else {
        picNum = picNum + 1;
      }
    } else if(action == "previous"){
      if((picNum - 1) < 0){
        picNum = picArr;
      } else {
        picNum = picNum - 1;
      }
    } else {
      
      picNum = parseInt(action);
      
    }
    document.getElementById("game_galary_bottom_pics_"+prevPic).style = "border-style: none";
    document.getElementById("game_galary_bottom_pics_"+picNum).style = "border-style: solid";
    document.getElementById("game_galary_top_middle").style = "background-image: url("+Pics[picNum]+")";
    prevPic = picNum;
    
  };
</script>


@section('content')
  <div class="Game_Container">

      <div id="leftSide" name="leftSide" class="GameChild">

          <div style="flex: 1; overflow:hidden;">
              <span id="Game_Name" name="Game_Name">
                  {{ $game['name'] }}
              </span>
              <?php
              if ($game['rating'] >= 4.5) {
                  $rating_color = '#57e32c';
              } elseif ($game['rating'] >= 4) {
                  $rating_color = '#b7dd29';
              } elseif ($game['rating'] >= 3.5) {
                  $rating_color = '#ffe234';
              } elseif ($game['rating'] >= 3) {
                  $rating_color = '#ffa534';
              } else {
                  $rating_color = '#ff4545';
              }
              
              ?>
              <div id="ratingBox" name="ratingBox"
                  style="background-color: {{ $rating_color }}; border: 2% solid {{ $rating_color }};">
                  {{ $game['rating'] }}
              </div>
              <br>
              <div style="height: 325px; width: 500px;">
                <img id="imageGame" name="imageGame" src={{ $game['background_image'] }}>
              </div>
              <p>Released: {{ $game['released'] }}</p>
          </div>

          <div style="flex: 2;">
          </div>
        </div>
        <div id="rightSide" name="rightSide" class="GameChild">
          <div class="game_galary">
            <div class="game_galary_top">
              <div class="game_galary_top_left">
                <img class="game_galary_top_arrows" src={{asset('/images/icons/rounded_left_arrow.svg')}} onclick="UpdateGalary('previous')">
              </div>
              <div class="game_galary_top_middle" id="game_galary_top_middle">
                <div class="game_galary_top_middle_pic" id="game_galary_top_middle_pic">
                </div>
              </div>
              <div class="game_galary_top_right">
                <img class="game_galary_top_arrows" src={{asset('/images/icons/rounded_right_arrow.svg')}} onclick="UpdateGalary('next')">
              </div>
            </div>
            <div class="game_galary_bottom">
              @foreach($pics as $key=>$pic)
                <img class="game_galary_bottom_pics" id="{{'game_galary_bottom_pics_'.$key}}" src="{{$pic['image']}}" onclick="UpdateGalary('{{$key}}')">
              @endforeach
            </div>
          </div>
        </div>
    </div>
@endsection