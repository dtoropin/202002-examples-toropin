<?php
require_once './src/functions.php';

//Задание #3.1
task1('data.xml');
echo '<hr>';

//Задача #3.2
$movies = [
    [
        "title" => "Rear Window",
        "director" => "Alfred Hitchcock",
        "year" => 1954
    ],
    [
        "title" => "Full Metal Jacket",
        "director" => "Stanley Kubrick",
        "year" => 1987
    ],
    [
        "title" => "Mean Streets",
        "director" => "Martin Scorsese",
        "year" => 1973
    ]
];
task2($movies);
echo '<hr>';

//Задача #3.3
task3('arrNumber.csv');
echo '<hr>';

//Задача #3.4
task4('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');