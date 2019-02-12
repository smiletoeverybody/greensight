<?php
if (isset($_POST["firstName"]) && isset($_POST["secondName"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["repeatPass"]) && $_POST["pass"]==$_POST["repeatPass"]) { 
	//Массив пользователей
	$users = array( 
		array("Mike", "Stevenson", "mike@gmail.com", "qazwsx"),
		array("Kate", "Melton", "kitty@gmail.com", "qwerty"),
		array("Pitt", "Flinth", "flinpit@gmail.com", "123qwe"),
		array("Kianu", "Rives", "onnion@gmail.com", "qaz123wsx")
	);
	
	$emails = array();
	foreach($users as $subArr)
	{
		array_push($emails, $subArr[2]);
	} 
	
	if(! in_array($_POST["email"], $emails))
	{
	
    	$result = array(
    	'firstName' => $_POST["firstName"],
    	'secondName' => $_POST["secondName"],
		'email' => $_POST["email"],
		'pass' => $_POST["pass"],
    ); 
	
	$logFile = "whitelist.html";
	$logFileHandle = fopen($logFile, 'a');
	fwrite($logFileHandle, 'Имя: '.$_POST["firstName"].'<br>Фамилия: '.$_POST["secondName"].'<br>e-mail: '.$_POST["email"].'<br>Пароль: '.$_POST["pass"].'<br><br>');
	fclose($logFileHandle);
	
    echo "true"; 
	}
	else {
		echo "user";
	}
}
else{
	echo "Error";	
}
?>