<?php
require("components/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First web lab</title>
    <script type="text/javascript" src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/old.css">
</head>
<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo">
                <h1>Лабораторная работа №1</h1>
            </div>
            <div class="contact">
                <h1>Понамарев Степан Андреевич</h1>
                <h2>Группа P32151</h2>
                <h2>Вариант 1117</h2>
            </div>
        </div>
    </div>

    <div class="content_container">
        <div class="graph_wrapper">
            <div class="graph_header">
                <p>картинка графика</p>
            </div>
            <img src="images\areas.png" alt="картинка графика">

            <canvas id="graph"></canvas>
        </div>


        <div class="content_container result_wrapper">
            <p>результат: <?php echo (hit_result()) ?>.</p>
        </div>



        <div class="form_wrapper">
            <form id="form-input-variables" method="post">
                <div class="x_input_wrapper">
                    <label for="x_input"> X:</label>
                        <select id="x_input" required name="x_param">
                            <option>-3</option>
                            <option>-2</option>
                            <option>-1</option>
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    <br>
                </div>
                <div class="y_input_wrapper">
                    <label for="y_input"> Y:</label>
                    <input id="y_input" required type="text" name="y_param" placeholder="{-5...5}">
                </div>

                <p>R: кружочки есть пример на слайдах</p>
                <p>
                    <label>
                        <input checked required type="radio" name="r_param" value="1">
                    </label>1<br>
                    <label>
                        <input type="radio" name="r_param" value="2">
                    </label>2<br>
                    <label>
                        <input type="radio" name="r_param" value="3">
                    </label>3<br>
                    <label>
                        <input type="radio" name="r_param" value="4">
                    </label>4<br>
                    <label>
                        <input type="radio" name="r_param" value="5">
                    </label>5<br>
                </p>
                <p><input type="submit"></p>
            </form>
        </div>




        <div class="table_wrapper">
            <table id="history">
                <tr>
                    <th>Request time</th>
                    <th>Execution time</th>
                    <th>Data</th>
                    <th>Respond</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>
        </div>
    </div>
    <ol>
        <li> элемент номер раз</li>
        <li> элемент номер два</li>
    </ol>
    <span id="span">Нажми на меня</span>

    <p><label>
        <ul id="ul"></ul>
    </label>some shиt</p>





</body>
</html>


