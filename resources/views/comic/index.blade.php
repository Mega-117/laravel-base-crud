@extends('layouts.default')
@section('page_title' ,'home')
    


@section('main_content')
    <h1>pagina comic</h1>
    <div class="container">
        <a href="{{ route('comics.create') }}">vai a pagina create per aggiungere </a>
        @foreach ($comics as $comic)
            <ul>
                <li><a href=" {{route('comics.show', $comic['id'])}} ">{{ $comic['title'] }}</a></li>
            </ul>
        @endforeach
    </div>
    
@endsection
