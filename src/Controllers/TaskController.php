<?php


namespace ToDoList\Controllers;


use ToDoList\Abstracts\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;
use ToDoList\Models\TaskModel;

class TaskController extends Controller
{
    private TaskModel $model;
    private PhpRenderer $renderer;

    public function __construct(TaskModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $tasks = $this->model->getTasks();
        return $this->renderer->render($response, 'index.php', ['tasks' => $tasks]);
    }


}