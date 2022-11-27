<?php

require_once "src/function.php";
echo "<h2>Task 1</h2>";

$text = ["test1", "zxc", "qwe", "123"];


echo $task1 = task1($text, true);
echo "<br>";

echo "<h2>Task 2</h2>";

echo task2("*", 1, 2, 5, 4);
echo "<br>";
echo task2("-", 9, 4, 5, 3);
echo "<br>";
echo task2("+", 1, 2,3, 4);

echo "<br>";

echo "<h2>Task 3</h2>";

task3(7, 7);

echo "<br>";
echo "<h2>Task 4</h2>";

task4();

echo "<br>";


echo "<h2>Task 5</h2>";

task5("К", "Три");

echo "<br>";

echo "<h2>Task 6</h2>";

file_put_contents( 'test.txt', 'Hello, again!');

task6("test.txt");

