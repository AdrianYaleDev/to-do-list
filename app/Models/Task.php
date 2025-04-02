<?php
namespace App\Models;

class Task
{
    public $id;
    public $name;
    public $completed;

    public function __construct($id, $name, $completed = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->completed = $completed;
    }

	public function toggle()
	{
		$this->completed = !$this->completed;
	}
}