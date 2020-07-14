<?php 

require_once 'baglan.php';


if (isset($_POST['insertislemi'])) {
	
	

	$kaydet=$db->prepare("INSERT into bilgilerim set
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_yazar=:bilgilerim_yazar,
		bilgilerim_yayinevi=:bilgilerim_yayinevi,
		bilgilerim_ozet=:bilgilerim_ozet,
		bilgilerim_foto=:bilgilerim_foto,
		bilgilerim_tur=:bilgilerim_tur
		");

	$insert=$kaydet->execute(array(

		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_yazar' => $_POST['bilgilerim_yazar'],
		'bilgilerim_yayinevi' => $_POST['bilgilerim_yayinevi'],
		'bilgilerim_ozet' => $_POST['bilgilerim_ozet'],
		'bilgilerim_foto' => $_POST['bilgilerim_foto'],
		'bilgilerim_tur' => $_POST['bilgilerim_tur']
	));

	

	if ($insert) {
		
		//echo "kayýt baþarýlý";

		Header("Location:index.php?durum=ok");
		exit;

	} else {

		//echo "kayýt baþarýsýz";
		Header("Location:index.php?durum=no");
		exit;
	}



}


if (isset($_POST['updateislemi'])) {
	
	$bilgilerim_id=$_POST['bilgilerim_id'];

	$kaydet=$db->prepare("UPDATE bilgilerim set
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_yazar=:bilgilerim_yazar,
		bilgilerim_yayinevi=:bilgilerim_yayinevi,
		bilgilerim_ozet=:bilgilerim_ozet,
		bilgilerim_foto=:bilgilerim_foto,
		bilgilerim_tur=:bilgilerim_tur
		where bilgilerim_id={$_POST['bilgilerim_id']}
		");

	$insert=$kaydet->execute(array(

		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_yazar' => $_POST['bilgilerim_yazar'],
		'bilgilerim_yayinevi' => $_POST['bilgilerim_yayinevi'],
		'bilgilerim_ozet' => $_POST['bilgilerim_ozet'],
		'bilgilerim_foto' => $_POST['bilgilerim_foto'],
		'bilgilerim_tur' => $_POST['bilgilerim_tur']
	));

	

	if ($insert) {
		
		//echo "kayýt baþarýlý";

		Header("Location:index.php?durum=ok&bilgilerim_id=$bilgilerim_id");
		exit;

	} else {

		//echo "kayýt baþarýsýz";
		Header("Location:index.php?durumno&bilgilerim_id=$bilgilerim_id");
		exit;
	}



}

if ($_GET['bilgilerimsil']=="ok") {
	

	$sil=$db->prepare("DELETE from bilgilerim where bilgilerim_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['bilgilerim_id']
	));

	if ($kontrol) {
		
		//echo "kayýt baþarýlý";

		Header("Location:index.php?durum=ok");
		exit;

	} else {

		//echo "kayýt baþarýsýz";
		Header("Location:index.php?durum=no");
		exit;
	}


}

?>