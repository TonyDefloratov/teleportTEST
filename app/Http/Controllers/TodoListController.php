<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        $todo_lists = TodoList::all();
        return view('list', compact('todo_lists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        TodoList::create($data);
        return back();
    }

    public function destroy(TodoList $todo_lists)
    {
        $todo_lists->delete();
        return back();
    }
}
