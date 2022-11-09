@extends('layout')
<style>
    .Game_Container {
        margin-left: 5%;
        margin-top: 3%;
        margin-right: 4%;
        display: flex;
        flex-direction: column;
    }

    #leftSide {
        width: 100%;
        height: 50%;
        display: flex;
        flex-wrap: wrap;
        overflow: hidden;
    }

    #Game_Name {
        font-family: 'Franklin Gothic Medium';
        font-size: 300%;
        color: #white;
        -webkit-text-stroke: 0.1rem #010100;
    }

    #ratingBox {
        display: inline;
        border-radius: 0.25em;
        font-size: 200%;
        color: #010100;
        opacity: .7;
    }

    #imageGame {
        max-width: 100%;
        max-height: 100%;
        border-radius: 0.5em;
        margin: 5%;
    }

    .game_galary_top_middle {
        display: none;
    }

    #game_galary_bottom_pics_0 {
        border-style: solid;
    }

    #game_galary_top_middle_vid {
        display: block;
        border-style: none;
    }
    .game_title_info_container{
    height: fit-content;
    width: 100%;
    border-radius: 1em; /* don't change */
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    flex-direction: row;
  }
  .game_title_info_container_left{

  }
  .game_title_info_container_right{
    padding-left: 5%;
    padding-top: 1%;
    
  } 
  .game_title_info_container_right_bottom{
    padding-right: 1%;
  }
  .game_summary{
    font-size: 150%;
  }
  .game_release{
    font-size: 150%;
  }

</style>

@section('content')

<p class="pageTitle">Home Page</p>

<p style="margin-left: 10%">This Is Our CPCS403 Project Please Enjoy</p>

<p class="pageTitle" style="margin-top: 5%">recommended Games</p>

@foreach($games as $game)
    <div class="Game_Container">

        <div id="leftSide" name="leftSide" class="GameChild">
            <div class="game_title_info_container">
              <div class="game_title_info_container_left">
                <div style="height: 325px; width: 500px;">
                  <img id="imageGame" name="imageGame" src={{ $game['background_image'] }}>
                </div>
              </div>
              <div class="game_title_info_container_right">
                <div class="game_title_info_container_right_top">
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
                </div>
                <div class="game_title_info_container_right_bottom">
                  <p class="game_summary"> {{$gameExtra[0][0]}} </p>
                  <p class="game_release" style="display: inline"> Released: {{ $game['released'] }} </p>
                  @foreach(json_decode($game['parent_platforms'], true) as $platform)
                  <img class="game_card_info_platforms_icons" src={{asset('/images/icons/'.$platform['platform']['slug'].'.svg')}}
                  alt={{$platform['platform']['name']}}>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>

@endforeach 
@endsection

