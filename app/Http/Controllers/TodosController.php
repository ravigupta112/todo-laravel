<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{

    public function index()
    {
        $allTodos = Todo::all();
         return view('todos')->with('todos', $allTodos);
    }
    
    
    public function store(Request $request)
    {
//        dd($request->all());
        
        $todoModel = new Todo();
        $todoModel->todo = $request->todo;
        $todoModel->save();
        
        return redirect()->back();
    }
}
