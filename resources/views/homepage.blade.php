<!-- extending the main component inside the homepage, so I keep all the pages separated -->
@extends("templates.structure")

<!-- title section -->
@section('title', 'Home Page')

@section('shopPage')
    <div class="container-jumbotron"></div>
@endsection

@section("Maincontent")
    <div>
        <div class="container-jumbotron"></div>

        <div class="series-container">
            <div class="container">

                <div class="current-series row">
                    <div class="current-series-box">CURRENT SERIES</div>
                </div>

                <div class="games-container row">
                    
                    @foreach($games as $game)

                    <div class="game-box col-2">
                        <a href="{{ route('game', [ 'id' => $loop->iteration ]) }}">
                            <div class="img-game-box"><img src="{{ $game['thumb'] }}" alt="{{ $game['series'] }} 's Thumb"></div>
                            <h3>{{ strtoupper($game['series']) }}</h3>
                        </a>
                    </div>

                    @endforeach
                </div>
                
                <div class="button-container">
                    <button>LOAD MORE</button>
                </div>

            </div>

        </div>
    </div>

@endsection