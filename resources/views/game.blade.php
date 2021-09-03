@extends("templates.structure")

@section('title', 'Game')

@section('shopPage')
    <div class="container-jumbotron"></div>
@endsection

@section('Maincontent')

<section>
    <div class="colored-container"></div>

    <div class="container">

        <div class="row col-10">

            @dump($games[arrayIndex])

            <div class="adv-container"></div>

        </div>
    </div>

</section>


@endsection


