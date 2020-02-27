<?php

function task1(string $fileName)
{
    $fileData = file_get_contents('data/' . $fileName);
    $order = new SimpleXMLElement($fileData);

    echo '<p>';
    echo '<b>Order #' . $order->attributes()->PurchaseOrderNumber . '</b><br>';
    echo '<small>' . $order->attributes()->OrderDate . '</small>';
    echo '</p>';

    echo '<table border="1" cellspacing="0" cellpadding="3" bordercolor="#ccc" width="300"><tr>';
    foreach ($order->Address as $addr) {
        echo '<td>';
        echo '<p><i>' . $addr->attributes()->Type . '</i></p><hr>';
        echo '<p><b>' . $addr->Name->__toString() . '</b></p>';
        echo '<span>' . $addr->Street->__toString() . '</span><br>';
        echo '<span>' . $addr->City->__toString() . '</span><br>';
        echo '<span>' . $addr->State->__toString() . '</span><br>';
        echo '<span>' . $addr->Zip->__toString() . '</span><br>';
        echo '<span>' . $addr->Country->__toString() . '</span><br>';
        echo '</td>';
    }
    echo '</tr></table>';

    echo '<p style="text-decoration:underline;">Products:</p>';
    echo '<ol>';

    $total = 0;
    foreach ($order->Items->Item as $item) {
        echo '<li>';
        echo '<p><b>"' . $item->ProductName->__toString() . '" #' . $item->attributes()->PartNumber . '</b></p>';
        echo '<span>' . $item->Quantity->__toString() . ' piece,</span> ';
        echo '<span>$' . $item->USPrice->__toString() . '</span><br>';
        if ($item->Comment) {
            echo '<p><i>Comment: ' . $item->Comment->__toString() . '</i></p>';
        }
        if ($item->ShipDate) {
            echo '<p><i>Ship Date: ' . $item->ShipDate->__toString() . '</i></p>';
        }
        echo '</li>';
        $total += (float)$item->USPrice->__toString() * (float)$item->Quantity->__toString();
    }
    echo '</ol>';
    echo '<p><b>Total: $' . $total . '</b></p>';

    echo '______';
    echo '<p><i>Attention:</i> ' . $order->DeliveryNotes->__toString() . '</p>';
}

function task2($array)
{
    file_put_contents('data/output.json', json_encode($array));

    $newData = [];
    $data = json_decode(file_get_contents('data/output.json'), true);
    foreach ($data as $item) {
        if ((int)rand(0, 1)) {
            unset($item['year']);
        }
        array_push($newData, $item);
    }
    file_put_contents('data/output2.json', json_encode($newData));

    // сравнение
    $array1 = json_decode(file_get_contents('data/output.json'), true);
    $array2 = json_decode(file_get_contents('data/output2.json'), true);
    $result = [];

    for ($i = 0; $i < count($array1); $i++) {
        array_push($result, array_diff_assoc($array1[$i], $array2[$i]));
    }

    foreach ($result as $item) {
        if (!empty($item)) {
            echo 'year - ' . $item['year'] . '<br>';
        }
    }
}

function task3($fileName)
{
    $arrNum = (function () {
        $i = 0;
        $arr = [];
        while ($i < 50) {
            $arr[$i] = rand(1, 100);
            $i++;
        }
        return $arr;
    })();

    $newFile = fopen('data/' . $fileName, 'w');
    fputcsv($newFile, $arrNum, ';');
    fclose($newFile);

    $readFile = fopen('data/' . $fileName, 'r');
    if ($readFile) {
        $result = 0;
        foreach (fgetcsv($readFile, 1024, ';') as $item) {
            if ($item % 2 === 0) {
                $result += $item;
            }
        }
        echo 'Сумма всех четных чисел: ' . $result;
        fclose($readFile);
    } else {
        echo 'File not found';
    }
}

function task4($link)
{
    $fileData = file_get_contents($link);
    $data = json_decode($fileData, true);
    echo 'Title: ' . $data['query']['pages']['15580374']['title'] . '<br>';
    echo 'PageId: ' . $data['query']['pages']['15580374']['pageid'];
}