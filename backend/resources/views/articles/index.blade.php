@extends('layouts.app')

@section('content')
  <div>
    <h1>Index</h1>
    <a href="{{ route('articles.create') }}">
      作成
    </a>
    @foreach($articles as $article)
      <h1>{{$article['title']}}</h1>
    @endforeach
  </div>
@endsection
