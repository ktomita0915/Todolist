<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodolistFormController extends Controller
{
    public function index()
    {
        $todos=Todo::orderBy('id','asc')->get();
        return view('todo_list', ["todos"=>$todos]);
    }
    public function createPage()
    {
        return view('todo_create');
    }
    public function create(Request $request)
    {
        $todo =new Todo();
        $todo->task_date= $request->task_date;
        $todo->task_name= $request->task_name;

    }
    public function editPage($id)
    {
        $todos=Todo::find($id);
        return view('todo_edit',["todo"=>$todo]);
    }
    public function edit(Request $request)
    {
        Todo::find($request->id)->update([
            'task_date' =>$request->task_date,
            'task_name' =>$request->task_name,
        ]);
        return redirect('/');
    }
    public function delete(Request $id)
    {
        Todo::find($id)->delete();
        return redirect('/');
    }
}

