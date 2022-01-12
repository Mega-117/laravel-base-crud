@extends('layouts.default')
@section('page_title' ,'home')
    


@section('main_content')
    <h1>homepage</h1>
    <a href="{{ route('comics.index') }}">vai a pagina comic</a>
@endsection
