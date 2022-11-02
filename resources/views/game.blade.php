@extends('layout')
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
</style>



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
                <img class="game_galary_top_arrows" src={{asset('/images/icons/left_arrow.svg')}}>
              </div>
              <div class="game_galary_top_middle">
                <img class="game_galary_top_middle_pic" src={{json_decode($game['short_screenshots'], true)[1]['image']}}>
              </div>
              <div class="game_galary_top_right">
                <img class="game_galary_top_arrows" src={{asset('/images/icons/right_arrow.svg')}}>
              </div>
            </div>
            <div class="game_galary_bottom">
              @foreach(json_decode($game['short_screenshots'], true) as $pic)
                <img class="game_galary_bottom_pics" src="{{$pic['image']}}">
              @endforeach
            </div>
          </div>
        </div>
    </div>
@endsection