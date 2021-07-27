<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodolistFormController extends Controller
{
    public function index()
    {
        $todos=Todo::latest('id')->get();
        return view('todo.list'['todos'=$todos]);
    }
    public function createPage()
    {
        return view('todo_create');
    }
    public function create(Request $request)
    {
        $todo =new Todo();
        $todo ->title=$request->input('title');
        $todo ->content=$request->inout('content');
        $todo->priority=$request->input('priority');
        $todo->task_date= $request->task_date;
        $todo->task_name= $request->task_name;
        $todo->save();
        return redirect()->route('todo.show',['todo'=>$todos]);

    }
    public function edit(int $id)
    {
        return view('todo_edit',["todo"=>$todo]);
    }
    public function update(Save Todo $request,int $id)
    {
        $todo->title=$request=input('title');
        $todo->content=$request->input('content');
        $target->priority=$request->input('priority');
        $todo->save();
    public function confirm(int $id)
    {
        Todo->delete();
        return redirect()->route('todo.index');
    }
}

