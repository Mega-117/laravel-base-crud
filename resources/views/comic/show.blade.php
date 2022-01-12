@extends('layouts.default')
@section('page_title' ,'home')
    


@section('main_content')
    <h1>pagina comic</h1>
    <div class="container">
        
            <ul>
                <li>{{ $comic['title'] }}</li>
                <li>{{ $comic['series'] }}</li>
            </ul>
            <a href="{{ route('comics.index') }} ">torna alla pagina comic</a>
        
    </div>
    
@endsection
