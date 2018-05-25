@extends('layout.master')
@section('content')
  @if (session('message'))
  <div class="alert alert-success">
    {{session('message')}}
  </div>

@endif
<br>
<br>
<div class="row">

@foreach ($categories as $category)

<div class="col-sm-4 md-4" style="width: 18rem;">
  <img class="card-img-top" height="215" width="25" src="{{$category->image_url}}" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">{{$category->title}}</h5>
  <p class="card-text">{{$category->description}}</p>
  </div>
</div>
@endforeach
</div>
@endsection
