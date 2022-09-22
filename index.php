<?php
require("components/test.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First web lab</title>
</head>
<body>
    <h1>Понамарев Степан Андреевич</h1>
    <h2>Группа P32151</h2>
    <h2>Вариант 1117</h2>
    <p>картинка/график/окошко</p>
    <img src="images\areas.png" alt="картинка графика">
    <p>результат попадания <?php echo hit_result($_POST['x'], $_POST['y'], $_POST['radius']) ?> !</p>
    <p>X: выпадающий список</p>
    <form method="post">"
    <select required name="x">
        <option>-3</option>
        <option>-2</option>
        <option>-1</option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    <p>Y: ввести самому</p>
    <p><input required type="text" name="y"></p>
    <p>R: кружочки есть пример на слайдах</p>
    <p>
        <input required type="radio" name="radius" value="1">1<br>
        <input type="radio" name="radius" value="2">2<br>
        <input type="radio" name="radius" value="3">3<br>
        <input type="radio" name="radius" value="4">4<br>
        <input type="radio" name="radius" value="5">5<br>
    </p>
    <p><input type="submit"></p>

    <table>таблица</table>
</body>
</html>