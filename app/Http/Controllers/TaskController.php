<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display current user's tasks
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('home');
    }

    /**
     * Display current user's tasks
     *
     * @param  Request  $request
     * @return Response
     */
    public function all(Request $request)
    {
        $tasks = $request->user()->tasks;

        return $tasks;
    }

    /**
     * Add a task to users list
     *
     * @param  Request  $request
     * @return Response
     */
    public function add(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        $task = $request->user()->tasks()->create([
            'title' => $title,
            'description' => $description
        ]);

        return $task;
    }

    /**
     * Delete task from list
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function remove(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return ['success' => TRUE];
    }
}
