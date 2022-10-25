@extends('layout')

@section('content')

<div class="game_galary">
  <div class="game_galary_top">
    <div class="game_galary_top_left">
      <img class="game_galary_top_arrows" src={{asset('/images/icons/left_arrow.svg')}}>
    </div>
    <div class="game_galary_top_middle">
      <img class="game_galary_top_middle_pic" src={{$game['short_screenshots'][1]['image']}}>
    </div>
    <div class="game_galary_top_right">
      <img class="game_galary_top_arrows" src={{asset('/images/icons/right_arrow.svg')}}>
    </div>
  </div>
  <div class="game_galary_bottom">
    @foreach($game['short_screenshots'] as $pic)
      <img class="game_galary_bottom_pics" src="{{$pic['image']}}">
    @endforeach
  </div>
</div>
@endsection