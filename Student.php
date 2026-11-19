<?php

declare(strict_types=1);

require_once __DIR__ . '/User.php';

class Student extends User
{
    private string $group;

    public function __construct(string $name, string $email, string $group)
    {
        parent::__construct($name, $email);
        $this->group = $group;
    }

    public function getRole(): string
    {
        return 'Студент';
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function setGroup(string $group): void
    {
        $this->group = $group;
    }
}