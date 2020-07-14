<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=proje2;charset=utf8",'root','****');

	//echo "Veritabanı bağlantısı başarılı";

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>


karakter sorunu için 

<?php header('Content-Type: charset=utf-8'); ?>