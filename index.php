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


                        month(0, false);// x = 0; y = false

                        month(1,30); // x = 1;y = 30
                        month(2,60); // и тд
                        month(3,90);
                        month(4,120);
                        month(5,150);
                        month(6,180);
                        month(7,210);
                        month(8,240);
                        month(9,270);
                        month(10,300);
                        month(11,330);
                    ?>
                </td>
            </tr>
        </table>

    
</body>
</html>
