<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=proje2;charset=utf8",'root','****');

	//echo "Veritaban� ba�lant�s� ba�ar�l�";

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>


karakter sorunu i�in 

<?php header('Content-Type: charset=utf-8'); ?>