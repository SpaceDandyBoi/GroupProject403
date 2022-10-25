@extends('layout')

<style>
    .Game_Container {
        margin-left: 5%;
        margin-top: 3%;
        margin-right: 4%;
    }

    #topSide {
        width: 100%;
        height: 50%;
        display: flex;
        flex-wrap: wrap;
    }

    #Game_Name {
        font-family: 'Franklin Gothic Medium';
        font-size: 500%;
        color: #EF3B2D;
        -webkit-text-stroke: 0.1rem #010100;
    }

    #ratingBox {
        display: inline;
        border-radius: 10%;
        font-size: 200%;
        color: #010100;
    }

    #imageGame {
        width: 60%;
    }
</style>



@section('content')
    <div class="Game_Container">

        <div id="topSide" name="topSide" class="GameChild">

            <div style="flex: 1;">
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
                    style="background-color: {{ $rating_color }}; border: 2px solid {{ $rating_color }};">
                    {{ $game['rating'] }}
                </div>
                <br>
                <img id="imageGame" name="imageGame" src={{ $game['background_image'] }}>
                <p>Released: {{ $game['released'] }}</p>
            </div>

            <div style="flex: 2;">
            </div>

        </div>

        <div id="downSide" name="downSide" class="GameChild">
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
        </div>
    </div>
@endsection
