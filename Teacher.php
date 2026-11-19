<?php

declare(strict_types=1);

require_once __DIR__ . '/User.php';

class Teacher extends User
{
    private string $subject;

    public function __construct(string $name, string $email, string $subject)
    {
        parent::__construct($name, $email);
        $this->subject = $subject;
    }

    public function getRole(): string
    {
        return 'Викладач';
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }
}