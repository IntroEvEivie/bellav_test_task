@extends('layouts.app')

@section('title_block')Главная страница@endsection

@section('content')
<h1>Обновление записи</h1>

<form action="{{ route('edit-task-submit', $task->id) }}" method="post">
  @csrf

  <div class="form-group mt-3">
    <h4>Номер задачи: {{ $task->id }}</h4>
    <label for="description">Задача</label>
    <input type="text" name="description" value="{{ $task->description }}" placeholder="Введите задачу" id="description" class="form-control">
  </div>

  <div class="form-group mt-3">
    <label for="email">Email</label>
    <input type="text" name="email"value="{{ $task->email }}" placeholder="Введите email" id="email" class="form-control">
  </div>

  <div class="form-group mt-3">
    <label for="email">Имя пользователя</label>
    <input type="text" name="name"value="{{ $task->name }}" placeholder="Введите имя" id="name" class="form-control">
  </div>

  <div class="form-group mt-3">
    <label for="stat">Статус</label>
    <input type="text" name="state" value="{{ $task->state }}" placeholder="Статус" id="state" class="form-control">
  </div>

  <button type="submit" class="btn btn-success mt-3">Обновить</button>

</form>


@endsection
