<?php


namespace ToDoList\Controllers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use ToDoList\Abstracts\Controller;
use ToDoList\Models\TaskModel;

class NewTaskController extends Controller
{
    private TaskModel $model;

    public function __construct(TaskModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $result = $request->getParsedBody()['newTask'];
        if (empty($result)) {
            return $response->withHeader('Location', '/?error=1');
        } elseif (strlen($result) > 100) {
            return $response->withHeader('Location', '/?error=2');
        } else {
            $this->model->addTask($request->getParsedBody()['newTask']);
            return $response->withHeader('Location', '/');
        }
    }
}