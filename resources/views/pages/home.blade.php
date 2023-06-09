@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Home
@endsection

@section( 'mainContent' )

<div class="contianer">
    <div class="row justify-content-center">
        @foreach( $movies as $element)

        <div class="col-12 col-md-4 col-lg-4 card">
            <h4>{{ $element['title'] }}</h4>
            <h6>original title: {{ $element['original_title'] }}</h6>
            <span class="d-block">{{ $element['nationality'] }}</span>
            <span class="d-block">{{ $element['date'] }}</span>
            <span class="d-block">voto: {{ $element['vote'] }}</span>
        </div>
        @endforeach
    </div>
</div>


@endsection