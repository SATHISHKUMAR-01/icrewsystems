<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $tasks = User::all();
        return view('welcome' ,['tasks' => $tasks]);
    }

    public function addTask(){
        return view('addTask');
    }

    public function saveTask(Request $request){
        User::create($request->all());
        return redirect()->back()->with('message','Task Created Successfully');
    }

    public function destroy($id)
    {
        $delete = User::findOrFail($id);        
        $delete->delete();
        return redirect()->back()->with('message','Task deleted');
    }

    public function update($id)
    {
        $info = User::findOrFail($id);       
        $details = [
            'id' =>   $info['id'],
            'Task' => $info['Task'],
            'Description' => $info['Description'],
            'Created' => $info['Created'],
            'End' => $info['End'],
        ];
        return view('update' , ['details' => $details]);
    }

    public function updateTask($id, Request $request)
    {
        
        $task = User::find($id);

        $task->Task = $request->Task;
        $task->Description = $request->Description;
        $task->Created = $request->Created;
        $task->End = $request->End;

        $task->save();

       return redirect()->back()->with('message','Updated Successfully');
    }
}
