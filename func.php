<p>Задача 1. Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.</p>

<?php
	function square($num)
	{
		return $num * $num;
	}	
	echo square(2);
?>

<p>Задача 2. Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.</p>

<?php
	function sum($a, $b)
	{
		return $a + $b;
	}	
	echo sum(2, 3);
?>

<p>Задача 3. Сделайте функцию, которая отнимает от первого числа второе и делит на третье.</p>

<?php
	function diff($a, $b, $c)
	{
		return ($a - $b) / $c;
	}	
	echo diff(6, 2, 2);
?>

<p>Задача 4. Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.</p>

<?php	
	function weekday($num)
	{
		$week = [1 => 'понедельник', 2 => 'вторник', 3 => 'среда',4 => 'четверг', 5 => 'пятница', 6 => 'суббота', 7 => 'воскресенье'];
		return $week[$num];
	}	
	echo weekday(2);
?>
