<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo date('d-m-Y'); ?> - 20-11-2019</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
        include 'var.php';
        ?>
        <table class="table">
            <tr>
                <th>Сейчас:</th>
                <th>Нужно:</th>
                <th>Осталось:</th>
            </tr>
            <tr>
                <td>
                    <?php echo date('d-m-Y'); ?>
                </td>
                <td>
                    <?php

                        echo $desired_day, '-', $desired_month, '-', $desired_year; 
                    ?>
                </td>
                <td>
                    <?php
                        function month($a, $b) {
                            global $desired_month, $current_month, $day_left;

                            if($desired_month - $current_month == $a) {
                                echo ($day_left  + $b), '.д';
                            }
                        }


                        month(0, false);

                        month(1,30);
                        month(2,60);
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