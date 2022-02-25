@extends('layouts.app')

@section('content')
  <div>
    <h1>Show</h1>
    <a href="{{ route('articles.edit', ['articleId' => $article['id']]) }}">
      編集
    </a>
    <a href="{{ route('articles.destroy', ['articleId' => $article['id']]) }}">
      削除
    </a>
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['body'] }}</p>
    <p>{{ $article->user['name'] }}</p>
  </div>
@endsection
