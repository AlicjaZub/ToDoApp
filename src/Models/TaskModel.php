<?php


namespace ToDoList\Models;


class TaskModel
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks()
    {
        $query = $this->db->prepare('SELECT `id`, `task_name`, `completed` FROM `tasks` ORDER BY `completed` DESC');
        $query->execute();
        return $query->fetchAll();

    }

    public function addTask(string $task_name)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`task_name`, `completed`) VALUES (:task_name, 0)');
        $query->execute([
            ':task_name' => $task_name,
        ]);
    }

    public function updateTaskStatus($value, $id)
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = :value WHERE `id` = :id');
        $query->execute([
            ':value' => $value,
            ':id' => $id
        ]);
    }
}

