@extends("templates.structure")

@section('title', 'Game')

@section('shopPage')
    <div class="container-jumbotron"></div>
@endsection

@section('Maincontent')

<section>
    <div class="colored-container">
        <div class="container">
            <div class="thumb-box">
                <div>{{ $games[$arrayIndex]['type'] }}</div>
                <img src="{{ $games[$arrayIndex]['thumb'] }}" alt="">
                <div>VIEW GALLERY</div>
            </div>
        </div>
    </div>

    <div class="single-game-container container">

        <div class="row">

            <div class="info-container col-8">

                <h1>{{ $games[$arrayIndex]['title'] }}</h1>

                <div class="green-container">
                    <div class="price-container">
                        <div class="price-content">U.S. Price: {{ $games[$arrayIndex]['price'] }}</div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="check-button">
                        <button>CHECK Availability</button>
                    </div>
                </div>

                <p>{{ $games[$arrayIndex]['description'] }}</p>

            </div>
        
            <div class="adv-container col-4">
                <div>ADVERTISAMENT</div>
                <img src="/img/adv.jpg" alt="ADVERTISAMENT">
            </div>

        </div>
    </div>

    <div class="description-container">
        <div class="container">
            <div class="row">

                <div class="talent-container col-6">
                    <h2>Talent</h2>
                    <div class="artists-box">

                        <div>Art by:</div>
                        <!-- TODO: sostiutisci , dopo ogni artista -->
                        <p>
                            <a href="">
                                @foreach($games[$arrayIndex]['artists'] as $artist)
                                        {{$artist}}
                                @endforeach
                            </a>
                        </p>
                    </div>
                    
                    <div class="writers-box">
                        <div>Written by:</div>  
                            <p>
                                <a href="">
                                    @foreach($games[$arrayIndex]['writers'] as $writer)
                                    {{$writer}}
                                    @endforeach
                                </a>
                            </p>
                    </div>
                </div>

                <div class="specs-container col-6">
                    <h2>Specs</h2>

                    <div class="series-box">
                        <div>Series:</div>
                        <div>{{ $games[$arrayIndex]['series'] }}</div>
                    </div>

                    <div class="price-box">
                        <div>U.S Price:</div>
                        <div>{{ $games[$arrayIndex]['price'] }}</div>
                    </div>

                    <div class="on-sale-box">
                        <div>On Sale Date:</div>
                        <div>{{ $games[$arrayIndex]['sale_date'] }}</div>
                    </div>
                </div>

            </div>

        </div>
        

    </div>

</section>


@endsection


