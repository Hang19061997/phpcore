<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskModel;
use MVC\Models\TaskRepository;


class TasksController extends Controller
{
    protected $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository(new TaskModel());
    }

    function index()
    {

        $d['tasks'] = $this->taskRepository->getAll();
        // print_r($tasks->getAll());
        // echo "abjdf";
        // exit();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"])) {   
            $model= new TaskModel();
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);
            $taskRepository = new TaskRepository($model);
            if($taskRepository->add()) {
                header("Location: " . WEBROOT . "tasks/index");
            }    
        }

        $this->render("create");
    }

    function edit($id)
    {
        $d["task"] =  $this->taskRepository->get($id);

        if (isset($_POST["title"])) {   
            $model= new TaskModel();
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);
            
            $taskRepository = new TaskRepository($model);
            if($taskRepository->edit($id)) {
                header("Location: " . WEBROOT . "tasks/index");
            }    
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        // $task = new TaskModle();
        // $this->$taskRepository->delete($task);
        if ($this->taskRepository->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>