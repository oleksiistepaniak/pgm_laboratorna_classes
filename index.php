<?php
include "OperatingSystemModel.php";

$operatingSystemsArray = [
    new OperatingSystemModel("Windows 11", "Операційна система", "1 GHz, 4 GB RAM", "20 GB"),
    new OperatingSystemModel("Ubuntu 22.04", "Операційна система", "2 GHz, 4 GB RAM", "25 GB"),
    new OperatingSystemModel("macOS Monterey", "Операційна система", "Apple M1, 4 GB RAM", "35 GB"),
];

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота №4</title>
    <style>
        body {
            font-family: "Calibri", sans-serif;
        }

        div {
            display: flex;
            flex-direction: column;
            gap: 1px;
            align-items: center;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div>
    <h1>Лабораторна робота №4 з навчальної дисципліни "Програмування глобальних мереж"</h1>
    <p>Тема: <b>Класи в мові PHP.</b></p>
    <p>Дата виконання:<b> <?= date("d.m.Y") ?></b></p>
    <p>Індивідуальне завдання: <b>Операційна система (11 варіант)</b></p>
    <p>ПІБ: <b>Степаняк Олексій Іванович</b></p>
    <p>Група: <b>КН-М924б</b></p>
</div>

<h2>Список операційних систем</h2>
<table>
    <thead>
    <tr>
        <th>Назва</th>
        <th>Тип</th>
        <th>Мінімальні вимоги</th>
        <th>Пам'ять</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($operatingSystemsArray as $os) {
        echo $os->displayInfo();
    }
    ?>
    </tbody>
</table>

</body>
</html>

