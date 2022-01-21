@extends('layout.main')

@section('main-content')
    <div class="container p-5">
        <div class="row">
            @foreach( $movies as $movie ) 
                <div class="col-2 card m-3 p-2 text-center">
                    <h3>{{$movie->title}}</h3>
                    <h3>{{$movie->original_title}}</h3>
                    <h3>{{$movie->nationality}}</h3>
                    <h3>{{$movie->date}}</h3>
                    <h3>{{$movie->vote}}</h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection