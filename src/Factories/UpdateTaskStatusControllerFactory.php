<?php


namespace ToDoList\Factories;


use Psr\Container\ContainerInterface;
use ToDoList\Controllers\UpdateTaskStatusController;


class UpdateTaskStatusControllerFactory
{
    public function __invoke(ContainerInterface $container): UpdateTaskStatusController
    {
        $model = $container->get('TaskModel');
        return new UpdateTaskStatusController($model);
    }
}