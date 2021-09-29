@extends('layouts.app')

@section('title_block')Главная страница@endsection

@section('content')
<h1 class="mb-3">Список задач</h1>

<a href="{{ 'sort_name()'  }}"><button class="btn btn-info mb-4 px-4"><b>Новая задача</b></button></a><br>
<button href="{{route('new-task') }}" class="btn btn-link">Имя</button>
<button class="btn btn-link">Email</button>
<button class="btn btn-link">Статус</button>
@foreach($tasks as $task)
  <div class="alert alert-info">
    <h5 class="mb-4">Номер задачи: {{ $task->id }}</h5>
    <h4 class="mb-4">Задача: {{ $task->description }}</h4>
    <p class="mb-1"><b>Статус:</b> {{ $task->state}} / <b>Пользователь:</b> {{ $task->name }} / <b>Email:</b> {{ $task->email }}</p>


    <a href="{{ route('edit-task', $task->id) }}"><button class="btn btn-warning px-3">Редактировать</button></a>
    <a href="{{route('task-delete', $task->id) }}"><button class="btn btn-danger px-3">Удалить</button></a>
  </div>
@endforeach
  <div class="pagination">
    {{$tasks->links()}}
  </div>





@endsection
