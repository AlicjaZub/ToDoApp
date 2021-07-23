<?php


namespace ToDoList\Factories;


use Psr\Container\ContainerInterface;
use ToDoList\Controllers\NewTaskController;

class NewTaskControllerFactory
{
    public function __invoke(ContainerInterface $container): NewTaskController
    {
        $model = $container->get('TaskModel');
        return new NewTaskController($model);
    }
}