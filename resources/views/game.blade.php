@extends("templates.structure")

@section('title', 'Game')

@section('shopPage')
    <div class="container-jumbotron"></div>
@endsection

@section('Maincontent')

<section>
    <div class="colored-container"></div>

    <div class="container">

        <div class="row">

            <div class="info-container col-8">

                <h1>{{ $games[$arrayIndex]['title'] }}</h1>

                <div class="green-container">
                    <div class="price-container">
                        <div class="price-content">U.S. Price: {{ $games[$arrayIndex]['price'] }}</div>
                        <div>AVAILABLE</div>
                    </div>
                    <div>
                        <button>CHECK Availability</button>
                    </div>
                </div>

                <p>{{ $games[$arrayIndex]['description'] }}</p>

            </div>
        
            <div class="adv-container col-4">
                <img src="/img/adv.jpg" alt="ADVERTISAMENT">
            </div>

        </div>
    </div>

    <div class="description-container">
        <div class="container">
            <div class="row">

                <div class="talent-container col-6">
                    <h2>Talent</h2>
                    <div class="artists-container">
                        <div>Art by:</div>
                        <p>
                            @foreach($games[$arrayIndex]['artists'] as $artist)
                                    {{$artist}}
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="specs-container col-6">
                    <h2>Specs</h2>
                    <div class="writers-container">
                        <div>Written by:</div>  
                        <p>
                            @foreach($games[$arrayIndex]['writers'] as $writer)
                            {{$writer}}
                            @endforeach
                        </p>
                    </div>
                </div>

            </div>

        </div>
        

    </div>

</section>


@endsection


