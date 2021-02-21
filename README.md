Для удобства просмотра добавлю решения одним лонгридом и тут.

1) Числа Фибоначчи

```<?php
$fib = [0, 1];

for($i = 1; $i < 64; $i++)
    $fib[] = $fib[$i] + $fib[$i-1];
 
$numbers = implode(",", $fib);
echo $numbers;
?>
```

2) Структура БД и SQL-запрос

![картинка](https://github.com//AnnaBlok/test/blob/main/second/структура.png "структура")

Запрос: 

```SELECT Name, COUNT(AuthorID) as Books
FROM BookAuthors
GROUP BY Name
HAVING SUM(AuthorID) <6;
```

Чтобы было видно, что запрос работает, изменила условия

![картинка](https://github.com//AnnaBlok/test/blob/main/second/sql.png)

3) Работа с классами

```<?php

class Rectangle
{
	public $height, $width;

	function square()
	{
		echo "Площадь данного прямоугольника: " . ($this->height * $this->width);
	}
}

/*$rect = new Rectangle;
$rect->height=10;
$rect->width=2;
/*$rect->square();*/

class Circle
{
	public $radius;

	function square()
	{
        $sq = pi() * pow(($this->radius), 2);
		echo "Площадь данного круга: " . round($sq, 2);
	}
}

class Triangle
{
	public $height, $base;

	function square()
	{
		echo "Площадь данного треугольника: " . (1 / 2 * $this->base * $this->height);
	}
}


function randomFigureSquare()
	{
		$randomFigure = rand(1, 3); {
		switch ($randomFigure) {
			case 1:
				$rect = new Rectangle;
				$rect->height=rand(1, 100); //установила 100 чтобы числа не были слишком большими
				$rect->width=rand(1, 100);
				//print_r($rect); //если нужно посмотреть, какой элемент был создан
				
				break;
			case 2:
				$cir = new Circle;
				$cir->radius=rand(1, 100);
				//print_r($cir);
				
				break;
			case 3:
				$trian = new Triangle;
				$trian->height=rand(1, 100);
				$trian->base=rand(1, 100);
				//print_r($trian);
				
				break;
		}
		}
	}

$randomFigureData = randomFigureSquare();

//последнюю задачу (пункт 3 задания 3) реализовать не удалось, т.к. не получилось передать в переменную рандомно созданный объект (для решения задачи не хватило времени)
//в планах было реализовать решение с помощью функций serialize() и unserialize() (как указано ниже)

/*$compressed = serialize($randomFigureData);

file_put_contents("objects.txt", $compressed);

$data = file_get_contents("objects.txt");
$dataUncompressed = unserialize($data);*/

//Для решения задачи с сортировкой планировалось создать массив с объектами класса и использовать функцию krsort() 
?>
```
