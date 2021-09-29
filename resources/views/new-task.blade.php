@extends('layouts.app')

@section('title_block')Главная страница@endsection

@section('content')
<h1>Новая задача</h1>

<form action="{{ route('new-task') }}" method="post">
  @csrf
  <div class="form-group mt-3">
    <label for="description">Задача</label>
    <input type="text" name="description" value="" placeholder="Введите задачу" id="description" class="form-control">
  </div>

  <div class="form-group mt-3">
    <label for="email">Email</label>
    <input type="text" name="email"value="" placeholder="Введите email" id="email" class="form-control">
  </div>

  <div class="form-group mt-3">
    <label for="email">Имя пользователя</label>
    <input type="text" name="name"value="" placeholder="Введите имя" id="name" class="form-control">
  </div>

  <button type="submit" class="btn btn-success mt-3">Добавить задачу</button>

</form>


@endsection
