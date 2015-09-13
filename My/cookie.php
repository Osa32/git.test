<?php
//встановлення кук
	// Устанавливаем Cookie 'test' со значением 'Hello' на один час:
	setcookie("test","Hello",time()+3600);
	// При следующем запросе скрипта выводит 'Hello', тобто спочатку кука встановлюється
	//відповідно глобальному супермасиву ніяке значення недоступне.
	//при наступному виконанні скріпта, вже буде встановлена кука, і вона відповідно
	//підтягнеться в суперглобальний масив.
	echo $_COOKIE['test'];

//лічильник входів з допомогою кук, чомусь працює криво
	if (isset($_COOKIE['my'])) {
	$a = $_COOKIE['my'] + 1;
	}
	else $a = 0;
	setcookie('my',$a);
	echo "Ви зайшли ".$_COOKIE['my']." разів";

//використовуючи тернарний оператор
	$a = (isset($_COOKIE['my'])) ? $_COOKIE['my']+1 : 0;

	setcookie('my',$a);
	echo $_COOKIE['my'];

//видалення кук
	SetCookie("Test","");
	//для цього достатньо встановити ідентичну куку з пустим параметром

//перебір значень масиву
	// Устанавливаем массив Cookies:
	setcookie("arr[0]",'перша кука');
	setcookie("arr[1]",'друга кука');
	setcookie("arr[2]",'третя кука');
	//потрібно запамятати, що $_COOKIE['arr'] - це є масив

	if (isset ($_COOKIE['arr'])) {
		foreach ($_COOKIE['arr'] as $key => $value) {
			echo $key." - ".$value."<br>";
		}
	}
?>