<!-- extending the main component inside the homepage, so I keep all the pages separated -->
@extends("templates.structure")

<!-- title section -->
@section('title', 'Home Page')

@section("Maincontent")

    <div>
        <div class="container-jumbotron"></div>

        <div class="series-container">
            <div class="container">

                <div class="current-series row">
                    <div class="current-series-box">CURRENT SERIES</div>
                </div>

                <div class="row">
                    @foreach($games as $game)

                    <div class="game-box col-2">
                        <img src="{{ $game['thumb'] }}" alt="{{ $game['series'] }} 's Thumb">
                        <h3>{{ $game['series'] }}</h3>
                    </div>

                    @endforeach
                    
                </div>
            </div>

        </div>
    </div>

@endsection