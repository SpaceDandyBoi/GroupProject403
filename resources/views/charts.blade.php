@extends('layout')

@section('content')

<p class="pageTitle">
  {{$heading}}
</p>
<div class="GtableBox" >
  <table style="width:100%">
    <tr>
      <th>Game Name</th>
      <th>Number of Downloads</th>
      <th>Rating</th>
      <th>Platforms</th>
    </tr>
    @foreach($games as $game)
    <tr>
      <td><a class="underline_link" href="/game/{{$game['slug']}}">{{$game['name']}} </a></td>
      <td>{{$game['added']}}</td>
      <?php
      if($game['rating'] >= 4.5) {$rating_color = '#57e32c';}
      elseif ($game['rating'] >= 4) {$rating_color = '#b7dd29';}
      elseif ($game['rating'] >= 3.5) {$rating_color = '#ffe234';}
      elseif ($game['rating'] >= 3) {$rating_color = '#ffa534';}
      else {$rating_color = '#ff4545';}
      ?>
      <td style="color: {{$rating_color}}">{{$game['rating']}}</td>
      <td>
      @foreach(json_decode($game['parent_platforms'], true) as $platform)
      <img class="game_card_info_platforms_icons" src="{{asset('/images/icons/'.$platform['platform']['slug'].'.svg')}}"
      alt="{{$platform['platform']['name']}}">
      @endforeach
    </td>
    </tr>
    @endforeach
  </table>
</div>


@endsection