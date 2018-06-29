@extends('layouts.app')

@section('content')

@auth

  <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    
@else
    {!! link_to_route('login', 'ログインはこちら') !!}
    

@endauth
@endsection
