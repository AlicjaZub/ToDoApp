<?php


namespace ToDoList\Controllers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use ToDoList\Abstracts\Controller;
use ToDoList\Models\TaskModel;


class UpdateTaskStatusController extends Controller
{
        private TaskModel $model;

    public function __construct(TaskModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $result = $request->getParsedBody();
        if($result['completed']) {
            $result['completed'] = 1;
        } else {
            $result['completed'] = 0;
        }
        $this->model->updateTaskStatus($result['completed'], $result['id']);
        return $this->respondWithJson($response, ['success' => true]);
    }

}