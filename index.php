<?php
require("components/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First web lab</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <script type="text/javascript" src="js/libraries/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/script.js" defer></script>
<!--    <script type="text/javascript" src="js/test.js" defer></script>-->
    <!--    шрифт-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header">
            <ul class="head_list">
                <li>Понамарев Степан Андреевич</li>
                <li>Группа P32151</li>
                <li>Вариант 1117</li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="graph_wrapper">
<!--            <canvas id="graph"></canvas>-->
            <img src="images\graph.jpg" alt="картинка графика">
        </div>

        <div class="result_wrapper">
<!--            <p id="result">результат: --><?php //echo (hit_result()) ?><!--.</p>-->
            <p id="result">результат: no.</p>
        </div>

        <div class="form_wrapper">

            <form id="form-input-variables" method="post">
                <span>Входные значения: </span>
                <div class="input_wrapper">
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
                </div>

                <div class="input_wrapper">
                    <label for="y_input" id="y_label"> Y:</label>
                    <input id="y_input" required type="text" name="y_param" placeholder="{-5...5}">
                </div>

                <div class="input_wrapper">

                    <label> R:</label>
                    <input checked required type="radio" name="r_param" value="1">
                    <label>1</label>

                    <input type="radio" name="r_param" value="2">
                    <label>2</label>

                    <input type="radio" name="r_param" value="3">
                    <label>3</label>

                    <input type="radio" name="r_param" value="4">
                    <label>4</label>

                    <input type="radio" name="r_param" value="5">
                    <label>5</label>
                </div>
                <div class="button_group">
                    <input type="button" id="send_request" class="submit_button" value="Enter data">
                </div>
<!--                <p><input id="send_request_old" type="submit"></p>-->
            </form>
        </div>


        <div class="table_wrapper">
            <table id="history">
                <tr>
                    <th>Время запроса</th>
                    <th>X</th>
                    <th>Y</th>
                    <th>R</th>
                    <th>Результат</th>
                </tr>
<!--                <tr>-->
<!--                    <td>0</td>-->
<!--                    <td>0</td>-->
<!--                    <td>0</td>-->
<!--                    <td>0</td>-->
<!--                    <td>0</td>-->
<!--                </tr>-->
            </table>
        </div>
    </div>
</body>
</html>
