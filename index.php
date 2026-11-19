<?php

declare(strict_types=1);

require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Teacher.php';

$student = new Student('Сімба', 'simba@savanna.ua', 'КН-24');
$teacher = new Teacher('Рафікі', 'rafiki@savanna.ua', 'ООП та мудрість савани');

echo "Ім’я: " . $student->getName() . PHP_EOL;
echo "Email: " . $student->getEmail() . PHP_EOL;
echo "Роль: " . $student->getRole() . PHP_EOL;
echo "Група/Предмет: " . $student->getGroup() . PHP_EOL;

echo PHP_EOL;

echo "Ім’я: " . $teacher->getName() . PHP_EOL;
echo "Email: " . $teacher->getEmail() . PHP_EOL;
echo "Роль: " . $teacher->getRole() . PHP_EOL;
echo "Група/Предмет: " . $teacher->getSubject() . PHP_EOL;