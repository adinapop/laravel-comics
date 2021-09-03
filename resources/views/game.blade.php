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
                
                <div class="talent-container">

                </div>

                <div class="specs-container">

                </div>

            </div>

        </div>
        

    </div>

</section>


@endsection


