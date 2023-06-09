@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Home
@endsection

@section( 'mainContent' )

@foreach( $movies as $element)
    <h4>{{ $element['title'] }}</h4>
@endforeach
@endsection