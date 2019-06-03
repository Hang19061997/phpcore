<?php
namespace MVC\Models;

use MVC\Config\Database;
use MVC\Models\TaskModel;
use MVC\Models\TaskResourceModel;

class TaskRepository 
{
    private $taskResourceModel;

    public function __construct(TaskModel $model)
    {
        $this->taskResourceModel = new TaskResourceModel($model);
    } 
    public function add()
    {
        // $this->model = $model;
        return  $this->taskResourceModel->save();
    }

    public function get($id)
    {
    	return $this->taskResourceModel->get($id);
    }

    public function getAll()
    {
    	return $this->taskResourceModel ->getAll();
    }

    public function edit($id)
    {
        return $this->taskResourceModel->edit($id);
    }

    public function delete($id)
    {
    	return $this->taskResourceModel->delete($id);
    }
}