@extends('layouts.app')

@section('title_block')Регистрация@endsection

@section('content')
  <h1 class="col-6 offset-1 mb-4">Регистрация</h1>
  <form class="col-6 offset-1 border rounded" method="POST" action="{{ route('user.registration')}}">
    @csrf

    <div class="form-group">
      <label for="email" class="col-form-label-lg">Ваш email</label>
      <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="password" class="col-form-label-lg">Пароль</label>
      <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mt-4">
      <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Зарегистрироваться</button>
    </div>
  </form>
@endsection

@section('aside')
  @parent
  <p>Дополнительный текст</p>
@endsection
