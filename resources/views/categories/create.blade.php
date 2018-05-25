@extends('layouts.master')
@section('content')
<h1 class="ftco-heading ftco-animate mb-3">Sukurti Kategorija</h1>
<br>
<form class=""  action="{{route('admin.category.store')}}" method="post">
@csrf
<a href="{{route('admin.category.store')}}">Atgal</a>
<input value="{{old('title')}}" name="title" class="form-control form-control-lg {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" placeholder="title">
  @if ($errors->has('title'))
  <span class="invalid-feedback">
    <strong>{{$errors->first('title')}}</strong>
  </span>
@endif
<input value="{{old('image_url')}}" name="image_url" class="form-control form-control-lg {{ $errors->has('image_url') ? ' is-invalid' : '' }}" type="text" placeholder="image_url">
  @if ($errors->has('image_url'))
  <span class="invalid-feedback">
    <strong>{{$errors->first('image_url')}}</strong>
  </span>
@endif
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Sukurti Kategorija</button>
    <br>
  </form>

  @endsection
