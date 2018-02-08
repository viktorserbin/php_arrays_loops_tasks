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
 * Работа с foreach
1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
 */
$web_technologies = array("html", "css", "php","jq");
echo "<strong> <p>foreach (\$web_technologies as \$value) </strong> </p><br />";
foreach ($web_technologies as $value) {
    echo "$value <br>";
}
echo "<br />";
/**
 * 2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
 * С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
 */
$numbers = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($numbers as $value) {
    $result = $result + $value;
}
echo "<strong> <p>Сумма элементов массива (1, 20, 15, 17, 24, 35) </strong> </p><br />";
echo "<p> $result </p>";
echo "<br />";
/**
 * 3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result.
 */
$numbers_sq = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($numbers_sq as $value) {
    $result = $result + ($value * $value);
}
echo "<strong> <p>Сумма квадратов элементов массива (26, 17, 136, 12, 79, 15) </strong> </p><br />";
echo "<p> $result </p>";
echo "<br />";
/**
 * Работа с ключами
4. Дан массив $arr. С помощью первого цикла foreach выведите на экран
 * столбец ключей, с помощью второго — столбец элементов.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "<strong> <p>array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')</strong> </p><br />";
echo "<strong> <p>С помощью первого цикла foreach выведите на экран столбец ключей</strong> </p><br />";
echo "<table>" ;
foreach ($arr as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "</tr>";
}
echo "</table>" ;
echo "<br />";
echo "<strong> <p>C помощью второго — столбец элементов.</strong> </p><br />";
echo "<table>" ;
foreach ($arr as $key => $value) {
    echo "<tr>" ;
    echo "<td>".$value."</td>";
    echo "</tr>" ;
}
echo "</table>" ;
echo "<br />";
echo "<strong> <p>Кличи и элементы в одной таблице</strong> </p><br />";
echo "<table>" ;
foreach ($arr as $key => $value) {
    echo "<tr>" ;
    echo "<td>".$key."</td>"."<td>".$value."</td>";
    echo "</tr>" ;
}
echo "</table>" ;
echo "<br />";
/**
 * 5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'.
 * С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
 */
$salary = array('Коля'=>200, 'Вася'=>300,'Петя'=>400);
echo "<strong> <p>array('Коля'=>200, 'Вася'=>300,'Петя'=>400)</strong> </p>";
echo "<strong> <p>'Коля — зарплата 200 долларов.</strong> </p><br />";
echo "<table>" ;
foreach ($salary as $key => $value) {
    echo "<tr>" ;
    echo "<td>".$key."</td>"."<td>"."Зарплата ".$value."</td>";
    echo "</tr>" ;
}
echo "</table>" ;
echo "<br />";
/**
 * 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив
 * $en, а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');
 */
unset($arr);
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
echo "<strong> <p>var_dump(\$arr)</strong> </p><br />";
print_r($arr);
echo "<br /><br />";
echo "<strong> <p>var_dump(\$en)</strong> </p><br />";
print_r($en);
echo "<br /><br />";
echo "<strong> <p>var_dump(\$ru)</strong> </p><br />";
print_r($ru);
echo "<br /><br />";
/**
 * 7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора
 * if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
 */
//unset($numbers);
echo "<strong> <p>Выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</strong> </p>";
echo "<strong> <p>array(2, 5, 15, 0, 4)</strong> </p>";
$numbers = array(2, 5, 15, 0, 4);
echo "<br />";
foreach ($numbers as $value) {
    if ($value>3 and $value<10) {
        echo  $value."<br />" ;
    }
}
echo "<br />";
/**
 * 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
 * С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.
 */
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$out_string = '';
foreach ($numbers as $value) {
    if ($out_string==''){
        $out_string = (string)$value;
    }
    elseif ($out_string!='') {
        $out_string .= "-" . (string)$value;
    }
}
echo "<strong> <p>Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.</strong> </p>";
echo "<strong> <p>С помощью цикла foreach создайте строку '\­1\­2\­3\­4\­5\­6\­7\­8\­9\­'.</strong> </p>";
echo "<br />";
echo $out_string;
echo "<br /><br />";
/**
 * Циклы while и for
 * 9. Выведите столбец чисел от 1 до 100.
 */
echo "<strong> <p>Выведите столбец чисел от 1 до 100.</strong> </p><br />";
$rows=100;
$value=1;
echo "<table>" ;
while($value<=$rows)  {
    echo "<tr>" ;
    echo "<td>".$value."</td>";
    echo "</tr>" ;
    $value++;
}
echo "</table>" ;
echo "<br />";
/**
 * 10. Выведите столбец чисел от 11 до 33.
 */
echo "<strong> <p>Выведите столбец чисел от 11 до 33.</strong> </p><br />";
$rows=33;
$value=11;
echo "<table>" ;
while($value<=$rows)  {
    echo "<tr>" ;
    echo "<td>".$value."</td>";
    echo "</tr>" ;
    $value++;
}
echo "</table>" ;
echo "<br />";
/**
 * 11. Выведите столбец четных чисел в промежутке от нуля до 100.
 */
echo "<strong> <p>Выведите столбец четных чисел в промежутке от нуля до 100</strong> </p><br />";
$rows=50;
$value=0;
echo "<table>" ;
while($value<=$rows)  {
    echo "<tr>" ;
    $output=$value*2;
    echo "<td>".$output."</td>";
    echo "</tr>" ;
    $value++;
}
echo "</table>" ;
echo "<br />";
/**
 * 12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
 * Какое число получится? Посчитайте количество итераций, необходимых для этого
 * (итерации — это количество проходов цикла), и запишите его в переменную $num.
 */
$n = 1000;
$fin_value = 50;
$k = 0;
while($n>$fin_value)  {
    $n=$n/2;
    $k++;
}
echo "<strong> <p>Дано число \$n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.</strong> </p><br />";
echo "Полученое число: ".$n.", количеств итераций: ".$k."<br /><br />";
/**
 * 13. Вывести таблицу умножения
 */
$cols=10;
$rows=10;
$tr=1;
echo "<strong> <p>Вывести таблицу умножения</strong> </p><br />";
echo "<table border='1'>" ;

while($tr<=$rows){
    echo "<tr>" ;
    $td=1;
    while ($td<=$cols){
        echo "<td>".$td."*".$tr." = ".$tr*$td."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo "</table>" ;
echo "<br />";
/**
 * 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
 * С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со
 * значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.
 */
$numbers = array(1, 2, 5, 19, 13, 0, 10);
$e = 5;
echo "<strong> <p>array(1, 2, 5, 19, 13, 0, 10)</strong> </p><br />";
echo "<strong> <p>проверьте есть ли в массиве элемент со значением \$e, равном $e</strong> </p><br />";
echo "<strong> <p>Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'. </strong> </p><br />";
foreach ($numbers as $value) {
    if ($value==$e){
        echo "<p>Есть!</p>";
    }
    elseif ($value!=$e){
        echo "<p>Нет!</p>";
    }
}
echo "<br />";
/**
 * 15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива.
 * Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.
 */
$numbers = array(4, 2, 5, 19, 13, 0, 10);
$count=0;
foreach ($numbers as $value) {
    $count++;
}
echo "<strong> <p>Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10 </strong> </p><br />";
echo "<p>В массиве {$count} елементов.</p><br />";
/**
 * 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
 * С помощью цикла foreach и оператора if выведите на экран столбец элементов массива,
 * как показано на картинке.
 * 1, 2, 3
 * 4, 5, 6
 * 7, 8, 9
 */
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count=0;
echo "<strong> <p><br />Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.<br />
С помощью цикла foreach и оператора if выведите на экран столбец элементов массива,<br />
 как показано на картинке. <br />
 1, 2, 3<br />
 4, 5, 6<br />
 7, 8, 9<br />
 </strong> </p><br />";
foreach ($numbers as $value) {
    $count++;
    echo $value.' ';
    if ($count>2) {
        echo "<br />";
        $count=0;
    }
}
echo "<br />";
/**
 * 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 * Текущий месяц должен храниться в переменной $month.
 */
$year = array(
        1 => "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
);
$month = rand (1,12);
echo "<strong> <p><br />Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.<br />
Текущий месяц должен храниться в переменной \$month ($month).</strong> </p><br />";
foreach ($year as $key => $value) {
    if ($key==$month ){
        echo "<strong>".$value."</strong><br />";
    }
    elseif ($key!=$month ){
        echo $value."<br />";
    }
}
echo "<br />";
/**
 * 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни
 * следует вывести жирным.
 */
$week = array(
    1 => "Понедельник",
    "Вторник",
    "Среда",
    "Четверг",
    "Пятница",
    "Суббота",
    "Воскресенье",
);
$weekend = 6;
echo "<strong> <p><br />Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни<br />
следует вывести жирным.</strong> </p><br />";
foreach ($week as $key => $value) {
    if ($key>=$weekend ){
        echo "<strong>".$value."</strong><br />";
    }
    elseif ($key!=$weekend ){
        echo $value."<br />";
    }
}

echo "<br />";
/**
 * 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 */
$day = rand (1,7);
echo "<strong> <p><br />Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, <br />
а текущий день выведите курсивом. Текущий день должен храниться в переменной \$day ($day).</strong> </p><br />";
foreach ($week as $key => $value) {
    if ($key==$day ){
        echo "<strong>".$value."</strong><br />";
    }
    elseif ($key!=$day ){
        echo $value."<br />";
    }
}
echo "<br />";
/**
 * 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
x
xx
xxx
xxxx
xxxxx
 *
 */
$rows= 20 ;
$p = "";
$x = 1;
echo "<strong> <p>Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.</strong><br /><br /></p>";
do {
    $p .= "x";
    echo "{$p} <br />";
    $x++;
} while ($x <= $rows);
echo "<br />";
/**
 * 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
1
22
333
4444
55555
 */
$rows= 9 ;
$x = 1;
echo "<strong> <p>Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.</strong><br /><br /></p>";
do {
    $p = "";
    for ($i=1; $i <=$x; $i++){
        $p.=(string)$x;
    }
    echo "{$p}<br />";
    $x++;
} while ($x <= $rows);
echo "<br />";
/**
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
 */
$rows= 5 ;
$p = "";
$x = 1;
echo "<strong> <p>Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.</strong><br /><br /></p>";
do {
    $p .= "xx";
    echo "{$p} <br />";
    $x++;
} while ($x <= $rows);
echo "<br />";
?>
</body>
</html>