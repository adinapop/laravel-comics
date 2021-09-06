<!-- extending the main component inside the homepage, so I keep all the pages separated -->
@extends("templates.structure")

<!-- title section -->
@section('title', 'Home Page')

@section('jumbotron')
    <div class="container-jumbotron"></div>
@endsection

@section("main")
    <div>
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

@section('shopSection')
<div class="content-section">
    <div class="container">
        <div class="row">

            <div class="buy-info-container">
                <a href="">
                    <div class="icon-box"><img src="{{'/img/buy-comics-digital-comics.png'}}" alt="Digital Comics Icon"></div>
                    <span>DIGITAL COMICS</span>
                </a>
            </div>
                    
            <div class="buy-info-container">
                <a href="">
                    <div class="icon-box"><img src="{{'/img/buy-comics-merchandise.png'}}" alt="Digital Comics Icon"></div>
                    <span>DC MERCHANDISE</span>
                </a>
            </div>
                    
            <div class="buy-info-container">
                <a href="">
                    <div class="icon-box"><img src="{{'/img/buy-comics-subscriptions.png'}}" alt="Digital Comics Icon"></div>
                    <span>SUBSCRIPTIONS</span>
                </a>
            </div>
                    
            <div class="buy-info-container">
                <a href="">
                    <div class="icon-box"><img src="{{'/img/buy-comics-shop-locator.png'}}" alt="Digital Comics Icon"></div>
                    <span>COMIC SHOP LOCATOR</span>
                </a>
                </div>
                    
            <div class="buy-info-container">
                <a href="">
                    <div class="icon-box smaller"><img src="{{'/img/buy-dc-power-visa.svg'}}" alt="Digital Comics Icon"></div>
                    <span>DC POWER VISA</span>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
