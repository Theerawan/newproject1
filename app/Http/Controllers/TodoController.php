<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return $todos;
    }

    public function show($id){
        $todo = Todo::find($id);
        return $todo;
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return "ลบสำเร็จ";
    }
}
