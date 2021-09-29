<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){

      if(Auth::check()){
        return redirect(route( name: 'user.private'));
      }


    $validateFields = $request->validate([
      'email' => 'required|email',
      'password' => 'required|min:5'
    ]);

    if(User::where('email', $validateFields['email'])->exists()){
      return redirect(route( name: 'user.registration'))->withErrors([
        'email' => 'Такой пользователь уже зарегистрирован'
      ]);
    }

    $user = User::create($validateFields);
    if($user){
      Auth::login($user);
      return redirect(route( name: 'user.private'));
    }

    return redirect(route( name: 'user.login'))->withErrors([
      'formError' => 'Произошла ошибка при сохранении пользователя'
    ]);

    }
}
