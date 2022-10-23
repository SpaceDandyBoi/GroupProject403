@extends('layout')

@section('content')

<h1 style="margin-left: 20px;">
  New and Trending Games
</h1>
<div class="game_card_container">
  @foreach($games as $game)
  @if(count($game) > 3)
  <div class="game_card">
    <img class='game_card_pic' src={{$game['background_image']}}>
    <div class="game_card_info">
      <div class="game_card_info_platforms">
        @foreach($game['parent_platforms'] as $platform)
        <img class="game_card_info_platforms_icons" src={{asset('/images/icons/'.$platform['platform']['slug'].'.svg')}}
        alt={{$platform['platform']['name']}}>
        @endforeach
      </div>
      <?php
      if($game['rating'] >= 4.5) {$rating_color = '#57e32c';}
      elseif ($game['rating'] >= 4) {$rating_color = '#b7dd29';}
      elseif ($game['rating'] >= 3.5) {$rating_color = '#ffe234';}
      elseif ($game['rating'] >= 3) {$rating_color = '#ffa534';}
      else {$rating_color = '#ff4545';}
      ?>
      <div class="game_card_info_rating" style="background-color: {{$rating_color}};">
        <h3 class="game_card_info_rating_text"> {{$game['rating']}} </h3>
      </div>
    </div>
    <div class="game_card_info_title">
      <h2 class='game_card_info_title_text'>
        <a href="/game/{{$game['id']}}">{{$game['name']}} </a>
      </h2>
    </div>
  </div>
  @endif
  @endforeach
</div>


@endsection