<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Task;

class TaskController extends Controller
{
    //
	public function index(Request $request)
	{
		if(!Session::has('tasks')) {
			Session::put('tasks', []);
		}

		$tasks = Session::get('tasks');
		return view('tasks', compact('tasks'));
	}

	public function addTask(Request $request) 
	{
		$request->validate([
			'taskName' => 'required|string|max:255'
		]);

		$tasks = Session::get('tasks', []);

		$nextId = count($tasks) > 0 ? max(array_column($tasks, 'id')) + 1 : 1;
		$newTask = new Task($nextId, $request->taskName, false);
		$tasks[] = (array) $newTask; 
	
		Session::put('tasks', $tasks);
	
		return redirect('/')->with('message', 'Task added successfully.');
	}

	public function toggleTask($id)
	{

		// dd('Toggling with ID' . $id);
		$tasks = Session::get('tasks', []);

		// Loop through tasks and toggle the matching task
		foreach ($tasks as &$task) {
			if ($task['id'] == $id) {
				$taskObj = new Task($task['id'], $task['name'], $task['completed']);
				$taskObj->toggle(); // Use the model method
				$task = (array) $taskObj; // Convert object back to array
				break;
			}
		}

		// Save the updated tasks back to session
		Session::put('tasks', $tasks);

		return redirect('/')->with('message', 'Task status updated.');
	}

	public function deleteTask($id) {
		 // Retrieve tasks from session
		 $tasks = Session::get('tasks', []);

		 $tasks = array_filter($tasks, fn($task) => $task['id'] != $id);

		 $tasks = array_values($tasks); // Reset array keys
		 foreach ($tasks as $index => &$task) {
			 $task['id'] = $index + 1; // Assign new sequential IDs
		 }
	 
		 // Re-index the array to prevent gaps in array keys
		 Session::put('tasks', array_values($tasks));
	 
		 return redirect('/')->with('message', 'Task deleted successfully.');
	}
}
