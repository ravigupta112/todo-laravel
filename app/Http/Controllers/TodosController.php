<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;
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
        Session::flash('success', "todo crerated");
        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success', "todo deleted");
        return redirect()->back();
    }

    public function update($id)
    {
        $todo = Todo::find($id);


        return view('update')->with('todo', $todo);
    }

    public function complete($id)
    {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        
        Session::flash('success', "todo mark as completed");
        return redirect()->back();
    }

    public function save(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        Session::flash('success', "todo updated");
        return redirect()->route('todos');
    }

}
