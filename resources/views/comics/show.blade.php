@extends('layouts.default')
@section('page_title' ,'home')
    


@section('main_content')
    <h1>pagina comic</h1>
    <div class="container">
        
            <ul>
                <li>{{ $comic['title'] }}</li>
                <li>{{ $comic['series'] }}</li>
            </ul>
            <div>
                <a href="{{ route('comics.index') }} ">torna alla pagina comic</a>
            </div>
            <div>
                <a href=" {{ route('comics.edit', $comic->id)}} ">modifica</a>
            </div>
            <div>
                <a href=" ">elimina</a>
            </div>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Cancella">
            </form>
    </div>
    
@endsection
