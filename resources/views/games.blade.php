@extends('layout')

@section('content')

<p class="pageTitle"">
  {{$heading}}
</p>
<div class="game_card_container">
  @foreach($games as $game)
  <div class="game_card">
    <img class='game_card_pic' src={{$game['background_image']}}>
    <div class="game_card_info">
      <div class="game_card_info_platforms">
        @foreach(json_decode($game['parent_platforms'], true) as $platform)
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
        <a class="underline_link" href="/game/{{$game['slug']}}">{{$game['name']}} </a>
      </h2>
    </div>
  </div>
  @endforeach
</div>

<div style="align-content: center; text-align: center; ">
  <?php
  $curPageName = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $curPageName = substr($curPageName, strrpos($curPageName, '/') + 1);
  $int = (int)$curPageName;
  $previous;
  $next;
  if($int-1>0){
      $previous = $int-1;
  }else {
      $previous = $int;
  }
  if ($int+1<=500) {
      $next = $int+1;
  }else {
      $next = $int;
  }
  $Sprevious= "/games/{$previous}";
  $Snext= "/games/{$next}";
  
  
?>

<a href={{$Sprevious}} class="round">&#8249;</a>
<a href={{$Snext}} class="round">&#8250;</a>
</div>


@endsection
