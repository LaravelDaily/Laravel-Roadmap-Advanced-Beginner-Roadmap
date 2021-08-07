<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use App\Models\Client;
use App\Models\Project;
use App\Notifications\TaskAssigned;
use App\Http\Requests\EditTaskRequest;
use App\Http\Requests\CreateTaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with(['user', 'client', 'project'])->filterStatus(request('status'))->paginate(20);

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $users = User::all()->pluck('full_name', 'id');
        $clients = Client::all()->pluck('company_name', 'id');
        $projects = Project::all()->pluck('title', 'id');

        return view('tasks.create', compact('users', 'clients', 'projects'));
    }

    public function store(CreateTaskRequest $request)
    {
        $task = Task::create($request->validated());

        $user = User::find($request->user_id);

        $user->notify(new TaskAssigned($task));

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        $users = User::all()->pluck('full_name', 'id');
        $clients = Client::all()->pluck('company_name', 'id');
        $projects = Project::all()->pluck('title', 'id');

        return view('tasks.edit', compact('task', 'users', 'clients', 'projects'));
    }

    public function update(EditTaskRequest $request, Task $task)
    {
        if ($task->user_id !== $request->user_id) {
            $user = User::find($request->user_id);

            $user->notify(new TaskAssigned($task));
        }

        $task->update($request->validated());

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
