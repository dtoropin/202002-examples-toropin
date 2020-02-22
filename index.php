<?php
require_once './src/functions.php';

//task #1
$arrText = [
    'Curabitur laoreet massa condimentum erat.',
    'Praesent tristique, lectus at vulputate.',
    'Nullam eu lectus ipsum. Fusce.',
    'Vivamus vel rutrum tortor, quis.'
];

task1($arrText);
echo '<br>___';
task1($arrText, true);
echo '<hr>';

//task #2
task2('+', 3, 4, 5);
task2('-', 3, 4, 5.2);
task2('*', 3, 4, 5);
task2('/', 3, 4, 5);
task2('s', 3, 4, 5);
task2('+', 3);
task2('+');
echo '<hr>';

//task 3#
task3(3, 3);
task3(-3, 3);
task3(5, 19);
echo '<hr>';

//task #4
task4();
echo '<hr>';

//task #5
$str1 = 'Карл у Клары украл Кораллы';
task5($str1, 'К', '');
$str2 = 'Две бутылки лимонада';
task5($str2, 'Две', 'Три');
echo '<hr>';

//task #6
task6_1('Hello again!');
task6_2('test.txt');