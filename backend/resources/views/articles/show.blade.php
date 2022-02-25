@extends('layouts.app')

@section('content')
  <div>
    <h1>Show</h1>
    <a href="{{ route('articles.edit', ['articleId' => $article['id']]) }}">
      編集
    </a>
    {!! Form::open(['method'=>'delete', 'route' => ['articles.destroy', $article['id']] ]) !!}
      {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['body'] }}</p>
    <p>{{ $article['authorName'] }}</p>
  </div>
@endsection
