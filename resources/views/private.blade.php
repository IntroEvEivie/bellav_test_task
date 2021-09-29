@extends('layouts.app')

@section('title_block')Приватная страница@endsection

@section('content')
  <h1>Приватная страница</h1>
  <p>Сюда попадают только аутентифицированные пользователи</p>
@endsection

@section('aside')
  @parent
  <p>Дополнительный текст</p>
@endsection
