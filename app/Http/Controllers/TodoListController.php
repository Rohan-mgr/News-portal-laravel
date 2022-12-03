<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoList;

class TodoListController extends Controller
{
    public function saveTodo(Request $req) {
        $todoObj = new todoList();
        $todoObj->Title = $req->todoItem;
        $todoObj->user_id = auth()->user()->id;

        $image = $req->file('image');
        $response = $image->store('image', 'public');
        $file_path = asset('/storage/'. $response);
        
        $todoObj->image = $file_path;
        $todoObj->save();
        return redirect()->route('home');
    }

    public function deleteItem($id) {
        $todo = todoList::find($id);
        $todo->delete();
        return redirect()->route("home");
    }

    public function EditItem($id) {
        $todo = todoList::find($id); 
        if($todo === null) {
            return redirect()->route("home");
        }
        return view("edit", ['item' => $todo]);
    }

    public function updateItem(Request $req) {
        $id = $req->todoId;
        if($id === null) {
            return redirect()->route("home");
        }
        $todo = todoList::find($id);
        $todo->Title = $req->todoItem;
        $todo->save();
        return redirect()->route("home");
    }
}