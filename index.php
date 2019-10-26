<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo date('d-m-Y'); ?> - 20-11-2019</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
        include 'var.php'; // Подключил переменные
        ?>
        <table class="table">
            <tr>
                <th>Сейчас:</th>
                <th>Нужно:</th>
                <th>Осталось:</th>
            </tr>
            <tr>
                <td>
                    <?php echo date('d-m-Y'); ?> // С помощью функции date вывел текущую дату
                </td>
                <td>
                    <?php

                        echo $desired_day, '-', $desired_month, '-', $desired_year;  // Вывел переменные с датой дэдлайна
                    ?>
                </td>
                <td>
                    <?php
                        function month($x, $y) { // Создал функцию с двумя аргументами - x,y
                            global $desired_month, $current_month, $day_left; // Пометил,что используються глобальные переменные

                            if($desired_month - $current_month == $x) { // Если из нужного месяца вычесть нынешний месяц = x   Будет выполняться следующий код
                                echo ($day_left  + $y), '.д'; // Количество оставшихся дней($day_left) + y
                            }
                        }


                    static $month_day = 0;
                    $month_day = $month_day + 30;

                    month();

                    for( $i = 1;$i < 11; $i++ ) {
                        month($i,$month_day);
                    }
                    ?>
                </td>
            </tr>
        </table>


</body>
</html>
