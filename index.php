<?php
//DZ #0
require_once './config_DZ0.php';
$user_name = 'Igor';

if (1 == 1) {
    echo 'hi';
}

//DZ #1
$name = 'Денис';
$age = 46;

echo '<hr>';
echo "Меня зовут: ​$name";
echo '<br>';
echo "Мне $age лет";
echo '<br>';
echo '“!|\\/\'”\\';

//DZ #2
require_once './config_DZ2.php';
$paint_pic = TOTAL_PIC - (MARKER_PIC + PEN_PIC);

echo '<hr>';
echo 'Всего рисунков: ' . TOTAL_PIC;
echo '<br>';
echo 'Рисунков фломастерами: ' . MARKER_PIC;
echo '<br>';
echo 'Рисунков карандашами: ' . PEN_PIC;
echo '<br>';
echo "Рисунков красками - $paint_pic";

//DZ #3
$age = 66;

echo '<hr>';
if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} elseif ($age < 1 || $age > 100) {
    echo 'Неизвестный возраст';
}

//DZ #4
$day = 3;

echo '<hr>';
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}

//DZ #5
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'YML70',
    'speed' => 130,
    'doors' => 3,
    'year' => 2018
];

$opel = [
    'model' => '540',
    'speed' => 100,
    'doors' => 4,
    'year' => 2013
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

echo '<hr>';
foreach ($cars as $key => $value) {
    echo "CAR $key<br>";
    echo $value['model'] . ' ' . $value['speed'] . ' ' . $value['doors'] . ' ' . $value['year'] . '<br><br>';
}

//DZ #6
echo '<hr>';
echo '<table border="1" cellspacing="0" cellpadding="3" bordercolor="#ccc">';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $composition = $i * $j;
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "<td>($composition)</td>";
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo "<td>[$composition]</td>";
        } else
            echo "<td>$composition</td>";
    }
    echo '</tr>';
}
echo '</table>';