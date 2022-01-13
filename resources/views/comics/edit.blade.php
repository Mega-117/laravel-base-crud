@extends('layouts.default')
@section('page_title' ,'home')

@section('main_content')
<form action=" {{ route('comics.update',  $comic->id ) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label" >titolo</label>
      <input type="text" class="form-control" name="title" id="field_title"
      value=" {{ $comic->title }} ">
      <br>
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">serie</label>
      <input type="text" class="form-control" name="series" id="field_series"
      value="{{ $comic->series }}">
    </div>
    
    <button type="reset" class="btn btn-primary">Reset</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection