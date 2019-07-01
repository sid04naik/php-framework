<?php
class Tasks_controller extends Controller
{
	
    function __construct()
    {
        require GLOBAL_SYS_PATH.'models/tasks.php'; 
        $this->task = new Tasks();
    }

    function index()
    {
        $data['tasks'] = $this->task->showAllTasks();
        $this->set($data);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            if ($task->create($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $d["task"] = $task->showTask($id);

        if (isset($_POST["title"]))
        {
            if ($task->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>