@extends('layouts.app')

@section('content')
  <div>
    <h1>Edit</h1>
    <div>
      {!!
        Form::model(
          $article,
          [
            'method' => 'put',
            'route' => ['articles.update', 'articleId' => $article['id']],
          ]
        )
      !!}
        @include('articles.form')
      {!! Form::close() !!}
    </div>
  </div>
@endsection
