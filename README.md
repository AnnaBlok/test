Для удобства просмотра добавлю решения одним лонгридом и тут.

1) Числа Фибоначчи

```<?php
$fib = [0, 1];

for($i = 1; $i < 64; $i++)
    $fib[] = $fib[$i] + $fib[$i - 1];
 
$numbers = implode(", ", $fib);
echo $numbers;
```

2) Структура БД и SQL-запрос

![картинка](https://github.com/AnnaBlok/test/blob/main/second/структура.png "структура")

Запрос: 

```SELECT Name, COUNT(AuthorID) as Books
FROM BookAuthors
GROUP BY Name
HAVING SUM(AuthorID) <6;
```

Чтобы было видно, что запрос работает, изменила условия

![картинка](https://github.com/AnnaBlok/test/blob/main/second/sql.png "запрос")

3) Работа с классами

```
<?php

class Rectangle
{
	public $height, $width;

	function square()
	{
		$sq = $this->height * $this->width;
		return $sq;
	}
	function __construct($height, $width) 
	{
        $this->height = $height;
        $this->width = $width;
    }
}

class Circle
{
	public $radius;

	function square()
	{
        $sq = round(pi() * pow(($this->radius), 2), 2);
		return $sq;
	}
	function __construct($radius) 
	{
        $this->radius = $radius;
    }
}

class Triangle
{
	public $height, $base;

	function square()
	{
		$sq = 1 / 2 * $this->base * $this->height;
		return $sq;
	}
	function __construct($height, $base) 
	{
        $this->height = $height;
        $this->base = $base;
    }
}

function randomFigureSquare()
{
	$randomFigure = rand(1, 3);
		
	switch ($randomFigure) {
		case 1:
			$rect = new Rectangle(rand(1, 100), rand(1, 100));
			return $rect;
		case 2:
			$cir = new Circle(rand(1, 100));
			return $cir;
		case 3:
			$trian = new Triangle(rand(1, 100), rand(1, 100));
			return $trian;
		}
}

$randomFigureData = randomFigureSquare();
$compressed = serialize($randomFigureData);

file_put_contents("objects.txt", $compressed . "\n", FILE_APPEND);

$fileArr = file('objects.txt');


for ($i = 0; $i < count($fileArr); $i++) {
	$fileArr[$i] = array ('object' => unserialize($fileArr[$i]), 'square' => unserialize($fileArr[$i])->square());	
}

usort($fileArr, function($a, $b) {
    return ($b['square'] - $a['square']);
});

echo'<pre>', print_r($fileArr), '</pre>'; //можно использовать var_dump, но так более удобночитаемо и нет лишней информации
```
