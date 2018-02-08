<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 1</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
/**
23. Вам нужно разработать программу, которая считала бы сумму цифр
числа введенного пользователем. Например: есть число 123, то программа должна
вычислить сумму цифр 1, 2, 3, т. е. 6.
 */
$result = 0;
if ($_REQUEST){
    $my_number = trim($_REQUEST['my_number']);
    $my_number = str_replace ("-","", $my_number);
    $i=0;
    while($i < strlen($my_number)) {
        $result=$result+(int)$my_number{$i};
        $i++;
    }
    echo "Сумма цифр числа: <strong>{$result}</strong> <br />";
}

?>
<div>
    <p>Введите число</p>
    <form action="form_post.php" method="POST">
        <fieldset>
            <label for="my_number">Произвольное число</label>
            <input type="number" name="my_number" size="20" /><br />
        </fieldset>
        <br />
        <fieldset>
            <input type="submit" value="Отправить" />
            <input type="reset" value="Осистить" />
        </fieldset>
    </form>
</div>
</body>
</html>