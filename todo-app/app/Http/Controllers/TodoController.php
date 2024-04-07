<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
       $todos= Todo::all();
        return view('todos.index',['todos'=>$todos]);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
    //   dd($request);
    $data=$request->validate([
        'title' => 'required|string|',
        'description' => 'required|string|min:5|max:500',
     
       
    ]);
  $newtodo = Todo::create($data);
  return redirect()->route('todos.index')->with('success','Todo Add Successfully');
    }
 
    public function edit(Todo $todo)
{
    return view('todos.edit',['Todo'=>$todo]);


}   

public function update($id, Request $request)
{
    $data = $request->validate([
        'title' => 'required|string',
        'description' => 'required|string|min:5|max:500'
    ]);

    // Retrieve the specific todo item from the database using the provided $id
    $todo = Todo::find($id);

    if (!$todo) {
        return redirect()->route('todos.index')->with('error', 'Todo not found');
    }

    $todo->update($data);

    return redirect()->route('todos.index')->with('success', 'Data updated successfully');
}


    public function delete($id){
       $data = Todo::find($id);
       $data->delete();
       return redirect()->route('todos.index')->with('success','Todo Deleted sucessfully');
    }
}
