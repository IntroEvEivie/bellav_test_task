<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{route('index')}}" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="{{route('tasks')}}" class="nav-link px-2 text-secondary">Задачи</a></li>
        </ul>



        <div class="text-end">
          <button type="button" href="{{ route('user.login') }}"class="btn btn-outline-light me-2">Войти</button>
          <button type="button"href="{{ route('user.registration') }}" class="btn btn-warning">Регистрация</button>
        </div>
      </div>
    </div>
  </header>
