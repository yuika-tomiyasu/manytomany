@extends('layouts.app')

@section('content')
 @include('users.users',$user->id, ['users'=>$users])
@endsection