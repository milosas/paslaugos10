@extends('layouts.master')
@section('content')
  <a class="btn btn-warning" href="{{route('admin.categoryCreate')}}">Sukurti Kategorija</a>
  <table class="table">
    <tr>
        <th class="thead-dark">Id</th>
        <th class="thead-dark">Title</th>
    </tr>
    @foreach ($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
    <td>{{$category->title}}</td>

    {{-- <td><a class="btn btn-success" href="{{route('mainEdit', $category)}}">EDIT</a></td> --}}
    <td><form class="" action="{{route('admin.categoryDelete',$category)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Ištrinti</button>

    </form></td>
    </tr>
    @endforeach
    </table>
@endsection
