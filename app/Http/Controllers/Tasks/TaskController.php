<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\TasksRequest;
use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();
        return view('pages.tasks', compact('tasks'));
    }

    public function store(TasksRequest $request)
    {
        $user_id = 1;

        Tasks::query()->create([
            'title' => $request->title,
            'user_id' => $user_id,
        ]);
        return redirect()->back()->with('success', 'تسک اضافه شد');
    }

    public function show($task_id)
    {
        $task = Tasks::find($task_id);
        return view('pages.tasks_update', compact('task'));
    }

    public function update(TasksRequest $request, $task)
    {
        $validate_data = $request->validated();
        $task = Tasks::findOrFail($task);
        $task->update([
            'title' => $validate_data['title']
        ]);
    
        return redirect()->route('tasks_show')->with('success', 'تسک با موفقیت ویرایش شد.');
    }

    public function destroy(Tasks $task_id)
    {
        $task_id->delete();
        return redirect()->route('tasks_show')->with('success', 'تسک با موفقیت حذف شد.');
    }

}
