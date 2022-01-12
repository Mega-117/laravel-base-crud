@extends('layouts.default')
@section('page_title' ,'home')

@section('main_content')
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" class="form-control" >
      <br>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="text" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection