@extends('layouts.app')

@section('content')
  @foreach($articles as $article)
    <h1>{{$articles}}</h1>
  @endforeach
@endsection
