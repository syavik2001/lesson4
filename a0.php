<meta charset="utf-8">
<?php
//$urok="Урок 22";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name']))	{$name		= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['email']))	{$email		= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['text']))	{$text		= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($_POST['sab']))	{$sab		= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
if (isset($name) ) {
$name1=stripslashes($name);
$name1=htmlspecialchars($name);
}
if (isset($email) ) {
$email1=stripslashes($email);
$email1=htmlspecialchars($email);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="syavik2001@gmail.com";
// текст письма 
$note_text="Name : $name \r\n Email : $email \r\n Message : $text";

if (isset($name)  &&  isset ($sab) ) {
mail($address,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<p style='color:#009900;'><b>$name</b> your message has been sent successfully. <br> THX.</p>";
}
?>