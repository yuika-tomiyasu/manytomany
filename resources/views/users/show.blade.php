@extends('layouts.app')

@section('content')
<div>{{$user->name}}</div>
<div class = 'follow'>
    {{!!Form::submit('Follow', ['class' => 'btn btn-primary btn-block'])!!}}
</div>
@endsection