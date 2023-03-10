<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::latest()->paginate(5);

        return view('tasks.index', compact('tasks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',

        ]);

        $taskId = taskId();

        $hash = randomString();

        $task = new Task();
        $task->task_id = $taskId;
        $task->title = $request->title;
        $task->user_hash = $request->user;
        $task->product_hash = $request->product;
        $task->version = $request->version;
        $task->prio_hash = $request->prio;
        $task->status_hash = $request->status;
        $task->type_hash = $request->type;
        $task->description = $request->description;
        $task->task_hash = $hash;
        $task->save();

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show($hash)
    {
        $task = Task::where('task_hash', $hash)->first();

        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit($hash)
    {
        $task = Task::where('task_hash', $hash)->first();

        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hash)
    {

        $request->validate([
            'title' => 'required',
        ]);

        Task::where('task_hash', $hash)->update([
            'title' => $request->title,
            'user_hash' => $request->user,
            'product_hash' => $request->product,
            'version' => $request->version,
            'prio_hash' => $request->prio,
            'status_hash' => $request->status,
            'type_hash' => $request->type,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($hash)
    {
        $task = Task::where('task_hash', $hash)->first();
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }
}
