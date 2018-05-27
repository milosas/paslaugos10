@extends('layout.master')
@section('content')
  {{-- {{dd($subcategory,$services)}} --}}
@foreach ($subcategory as $subcategor)
{{$subcategor->title}}
{{$subcategor->category_id}}
<hr>
<a href="{{route('services.index', 'subcategory')}}"></a>
@endforeach
@endsection
