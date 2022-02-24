@extends('layouts.app')

@section('content')
  <div>
    <h1>Create</h1>
    <div>
      {!!
        Form::open([
          'route' => 'articles.store',
        ])
      !!}
        @include('articles.form')
      {!! Form::close() !!}
    </div>
  </div>
@endsection
