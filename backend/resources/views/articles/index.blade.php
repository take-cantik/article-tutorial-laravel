@extends('layouts.app')

@section('content')
  <div>
    <h1>Index</h1>
    <a href="{{ route('articles.create') }}">
      作成
    </a>
    @foreach($articles as $article)
      <a href="{{ route('articles.show', ['articleId' => $article['id']]) }}">
        {{$article['title']}}
      </a>
    @endforeach
  </div>
@endsection
