<?php
//1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
$myarray = array('html', 'css', 'php', 'js', 'jq');
foreach ($myarray as $k) {
	echo $k. '<br>'; 
}
//2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result
$array = array (1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($array as $k) {
	$result += $k;
}
echo $result . '<br>';
//3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
$array = [26, 17, 136, 12, 79, 15];
foreach ($array as $v){
	//$array += $v * $v;
	echo $v * $v.'<br>';

}
//4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
// +помощью второго — столбец элементов.</p>
// +$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$arr = array ('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
foreach ($arr as $key => $value){
	echo $key.' - '.$value.'<br>' ;
} 
//5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
 //+цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
 //+долларов.'.
$arr = ['Коля' => '200$', 'Вася' => '300$', 'Петя' => '400$'];
foreach ($arr as $key => $value){
	echo $key. ' - ' .$value. '<br>';
}
/*6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
 русские — в массив $ru.
 $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 $en = array('green', 'red','blue');
 $ru = array('зеленый', 'красный', 'голубой');*/
$arr = array ('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
 $en = array ('green', 'red', 'blue');
 $ru = array ('зеленый', 'красный', 'голубой');
 foreach ($arr as $key => $val){
 	echo "Key:$key, Value: $val <br>";
 /*	$en[] = $key;
 	$ru[] = $val;
 }
 var_dump($en);
 var_dump($ru); 
 echo '<br>';*/
/*7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
 +выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.*/
 $ar = [2, 5, 9, 15, 0, 4];
 foreach ($ar as $k) {
 if ($k > 3 && $k < 10) {
 	echo $k. '<br>';
 }
}
 /*8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
 +'­1­2­3­4­5­6­7­8­9­'.*/
 $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
 $str = '';
 foreach ($array as $key){
 	$str .= '-'.$key;
 }
 echo $str. '-' .'<br>';
 /*Циклы while и for
 9. Выведите столбец чисел от 1 до 100.*/
$i = 1;
while ($i <= 100) {
	echo $i, ' ';
	if ($i % 6 == 0){
      echo '<br>';
	}
	$i++;
	
}

/*for ($i = 1; $i <= 100; $i++){
		echo $i. '<br>';
	}*/
/*10. Выведите столбец чисел от 11 до 33.*/
$i = 11;
while ($i <= 33) {
	echo $i. '<br>';
	$i++;
}
 //11. Выведите столбец четных чисел в промежутке от нуля до 100.
 for ($i = 0; $i <= 100; $i += 2){
 	echo $i.'<br>';
 }
 /*12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
 +меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
 +этого (итерации — это количество проходов цикла), и запишите его в переменную $num.*/
 $a = 0;
 for($i = 1000; $i >= 50; $i = $i / 2) {
 	echo $i, '<br>';
 	$a++;
 }
 echo $a;
  /*$n = 1000;
  $i = 0;
  while ($n > 50) {
  	$n /= 2;
  	$i++;
  }
  echo $i. '<br>';
  //к-во итераций
  echo $n. '<br>';
  //число, которое получилось*/
  //13. Вывести таблицу умножения
  for($i = 1; $i <= 9; $i++){
  	echo '<div style = "width:120px;float:left;margin=20px">';
  	for($b = 1; $b <= 9; $b++){
  		  		echo $i, ' x ', $b, ' = ', $i*$b, '<br>';
  		  	}
  		  	"</div>";
  }
  /*14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
 +проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
 +выведите на экран 'Есть!', иначе выведите 'Нет!'.*/
 $array = [4, 2, 5, 19, 13, 0, 10];
 $e = [2, 3, 4];
 $result = 'Нет!';
 foreach ($array as $val){
 	if(in_array($val, $e)) {
 		$result = 'Есть!';
 		
 	}
 }
 echo $result;
/*15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
 +элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
 +5, 19, 13, 0, 10.*/
 $arr = [4, 2, 5, 19, 13, 0, 10];
 $count = 0;
 foreach ($arr as $i){
 	$count++;
 }
 echo $count;
 /*16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
 +выведите на экран столбец элементов массива, как показано на картинке.
 +1, 2, 3
 +4, 5, 6
 +7, 8, 9*/
 $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($array as $key => $value){
	if ($array % 3 == 0){
		echo $array. '<br>';
	}

}

 /*17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
 +месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/
 $month = ['june', 'july', 'august', 'september', 'october'];
  $a = 'august';
 foreach ($month as $k => $v){
 	if ($k == $a){
 		echo '<b>'.$v. '</b><br>';
 	}else{
 		echo $v. '<br>';
 	}
 }
 /*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 +выходные дни следует вывести жирным.*/
 $array = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
 foreach ($array as $key => $val){
    if ($key == 6 or $key == 7){
    	echo '<b>' .$val. '</b><br>';
    }else{
    	echo $val. '<br>';
    }
 }
 /*19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
 +текущий день выведите курсивом. Текущий день должен храниться в переменной $day*/
 $array = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
 $day = 1;
 foreach ($array as $key => $val){
    if ($key == $day){
    	echo '<b>' .$val. '</b><br>';
    } else {
    	echo $val.'<br>';
/*20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
 +рядов, а не 5.<br><br>
 +x<br>
 +xx<br>
 +xxx<br>
 +xxxx<br>
 +xxxxx*/
  $X = 'x';
 for ($i = 0; $i <= 20; $i++){
 	 	echo $X, '<br>';
 	 	$X .= 'x';
 }
/* 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.<br><br>
 +1<br>
 +22<br>
 +333<br>
 +4444<br>
 +55555*/
for($i = 1; $i <= 9; $i++) {
     for($y = 1; $y <= $i; $y++) {
         echo $i;
     }
     echo '<br>';
 }
 /*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
 +xx<br>
 +xxxx<br>
 +xxxxxx<br>
 +xxxxxxxx<br>
 +xxxxxxxxxx*/
 $X = 'xx';
 for ($i = 0; $i <= 20; $i++){
 	 	echo $X, '<br>';
 	 	$X .= 'xx';
 }
 /*23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
 +пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
 +2, 3, т. е. 6.</p>
 +По желанию можете сделать проверку на корректность введения данных пользователем.*/
 $number = "123";
$sum = 0;

for($i = 0; $i <= strlen($number); $i++) {
    $sum += $number[$i];
}
echo $number."<br/>";
echo $sum;
/*24. Вам нужно разработать программу, которая считала бы количество вхождений
 какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
 442158755745 встречается 4 раза.*/
 
 echo substr_count(59136542365, 5); //3
 //или
 $number = ['5', '9', '1', '3', '6', '5', '4', '2', '3', '6', '5'];
 print_r(array_count_values($number));
 //Array ( [5] => 3 [9] => 1 [1] => 1 [3] => 2 [6] => 2 [4] => 1 [2] => 1 ) 