{!! Form::label('title', 'タイトル') !!}
{!! Form::text('title', null) !!}
{!! Form::label('body', '本文') !!}
{!! Form::textarea('body', null) !!}
{!! Form::label('category', 'カテゴリー') !!}
{!! Form::number('category', null) !!}
{!! Form::label('authorId', 'ユーザーID') !!}
{!! Form::number('authorId', null) !!}
{!! Form::submit('登録') !!}