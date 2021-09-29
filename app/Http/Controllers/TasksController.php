<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Http\Controllers\Controller;
use App\Models\User;

class TasksController extends Controller
{
  /*
   public function allData(){
     //$tasks = new Tasks();
     $tasks = Tasks::paginate(3);
     //$tasks->setConnection('tasks');

     return view('tasks', ['tasks' => $tasks->all()]);
   }*/
   public function allData(){
      //$tasks =  DB::table('tasks')->simplePaginate(3);
      $tasks = DB::table('tasks')->orderBy('name')->simplePaginate(3);
      return view('tasks',['tasks'=>$tasks]);
   }
   public function sort_name(){
      //$tasks =  DB::table('tasks')->simplePaginate(3);
      $tasks = DB::table('tasks')->orderBy('name')->simplePaginate(3);
      return view('tasks',['tasks'=>$tasks]);
   }
   public function sort_email(){
      //$tasks =  DB::table('tasks')->simplePaginate(3);
      $tasks = DB::table('tasks')->orderBy('email')->simplePaginate(3);
      return view('tasks',['tasks'=>$tasks]);
   }
   public function sort_state(){
      //$tasks =  DB::table('tasks')->simplePaginate(3);
      $tasks = DB::table('tasks')->orderBy('state')->simplePaginate(3);
      return view('tasks',['tasks'=>$tasks]);
   }

   public function edit($id)
   {
     $tasks = new Tasks;
     return view('edit', ['task' => $tasks->find($id)]);
   }

   public function newTask(Request $req){
     $tasks = new Tasks();
     $tasks->description = $req->input('description');
     $tasks->email = $req->input('email');
     $tasks->state = 'Не выполнена';
     $tasks->name = $req->input('name');

     $tasks->save();

      return redirect()->route('tasks')->with('success', "Задача была добавлена");
   }


   public function updateTaskSubmit($id, Request $req) {

     $tasks = Tasks::find($id);
     $tasks->description = $req->input('description');
     $tasks->email = $req->input('email');
     $tasks->state = $req->input('state');
     $tasks->name = $req->input('name');

     $tasks->save();

     return redirect()->route('tasks')->with('success', "Задача была изменена");
   }

   public function deleteTask($id) {
     Tasks::find($id)->delete();
     return redirect()->route('tasks')->with('success', "Задача была удалена");
   }
}
