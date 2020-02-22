<?php
function task1(array $arrStr, bool $flag = false)
{
    $str = '';
    foreach ($arrStr as $item) {
        if ($flag) {
            $str .= "<p>$item</p>";
        } else {
            $str .= $item;
        }
    }
    echo $str;
}

function task2(string $operation, float ...$args)
{
    if (empty($args)) {
        $result = 'Нет данных для действия';
    } else {
        $result = $args[0];
    }
    for ($i = 1; $i < count($args); $i++) {
        if ($operation === '+') {
            $result += $args[$i];
        } elseif ($operation === '-') {
            $result -= $args[$i];
        } elseif ($operation === '*') {
            $result *= $args[$i];
        } elseif ($operation === '/') {
            $result /= $args[$i];
        } else {
            $result = 'Неопределенное действие';
            break;
        }
    }
    echo $result . '<br>';
}

function task3(int $row, int $col)
{
    if ($row < 0 || $col < 0) {
        echo 'Невозможно построить таблицу';
    } else {
        echo '<table border="1" cellspacing="0" cellpadding="3" bordercolor="#ccc">';
        for ($i = 1; $i <= $row; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $col; $j++) {
                echo '<td>' . $i * $j . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}

function task4()
{
    echo date('d.m.Y H:i');
    echo '<br>';
    echo mktime(0, 0, 0, 2, 24, 2016);
}

function task5(string $str, string $substr, string $repl)
{
    echo str_replace($substr, $repl, $str) . '<br>';
}

function task6_1($str)
{
    file_put_contents('test.txt', $str);
}

function task6_2($file)
{
    if (isset($file)) {
        echo file_get_contents($file);
    } else {
        echo 'File not found';
    }

}