<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>KÝTAP ÝÞLEMLERÝ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <style>
.icon-bar {
            width: 100%;
           overflow: auto;
        }        
.icon-bar a:hover {
            background-color: blue;
        }

        
    </style>
</head>
<body>

 <div class="resim">
            <a class="active" href="anasayfa.php"><img src="logo1.png" style="width: 5%"></a>
        <span>    <h1 style="background: pink; width: 50% "  : ">Veritabaný Kitap Kayýt Ýþlemleri</h1></span>

            
        </div>

	
	<hr>
	<?php 
	if ($_GET['durum']=="ok") {
		
		echo "Ýþlem baþarýlý";

	} elseif ($_GET['durum']=="no") {

		echo "Ýþlem baþarýsýz";


	}

	?>
	<?php 
$bilgilerimsor=$db->prepare("SELECT * from bilgilerim where bilgilerim_id=:id");
	$bilgilerimsor->execute(array(
		'id' => $_GET['bilgilerim_id']
	));

	$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

	?>

	  <div  class="container mt-5">
 <div class="row">
  <div class="col-md-8">
	<div>
<p>FOTOÐRAF EKLEMEK ÝÇÝN ÖNCE DOSYAYA YÜKLEYÝNÝZ</p>

	<form action="index.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
	<form action="islem.php" method="POST">
	
		
		<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text" id="ig">   KÝTABIN ADI </span>		
	</div>
	<input type="text" required="" name="bilgilerim_ad">

</div>
<br> <br>
		
		<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text" id="ig">KÝTAP YAZARI</span>		
	</div>
	<input type="text" required="" name="bilgilerim_yazar" >
</div>
<br> <br>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text" id="ig"> KÝTP YAYINEVÝ </span>		
	</div>
	<input type="text" required="" name="bilgilerim_yayinevi" >
</div>
<br> <br>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text" id="ig">SAYFA SAYISI </span>		
	</div>
	<input type="text" required="" name="bilgilerim_ozet">
</div>
<br> <br>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text" id="ig"> KÝTABN  TÜRÜ     </span>		
	</div>
	<input type="text" required="" name="bilgilerim_tur">
</div>
<br> <br>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text" id="ig">KÝTAP RESÝÝM </span>		
	</div>
	<input type="text" required="" name="bilgilerim_foto">
	
	</div>
	<br><br><br>
		<button type="submit" name="insertislemi">Formu Gönder</button>


	</form>
	

	</div>
	</div>
	<div class="col-md-4" style="margin-top:10%;">
 
                  
                       <img src="koala.png" style="width: 90%" > 
                    <br><br>
	<form action="islem.php" method="POST">
<div>
<h3>DÜZENLEME</h3>
<div>
		kitabýn adýý :	<input type="text" required="" name="bilgilerim_ad" value="<?php echo $bilgilerimcek['bilgilerim_ad'] ?>">
		</div>
		<div>
	kitap yazarý:		<input type="text" required="" name="bilgilerim_yazar" value="<?php echo $bilgilerimcek['bilgilerim_yazar'] ?>">
		</div>
		<div>
		kitp yaynevi	<input type="text" required="" name="bilgilerim_yayinevi" value="<?php echo $bilgilerimcek['bilgilerim_yayinevi'] ?>">
		</div>
		<div>
		kitabýn sayf:	<input type="text" required="" name="bilgilerim_ozet" value="<?php echo $bilgilerimcek['bilgilerim_ozet'] ?>">
		</div>
		<div>
		kitabýn foto:	<input type="text" required="" name="bilgilerim_foto" value="<?php echo $bilgilerimcek['bilgilerim_foto'] ?>">
		</div>
		<div>
		kitabýn türü:	<input type="text" required="" name="bilgilerim_tur" value="<?php echo $bilgilerimcek['bilgilerim_tur'] ?>">
		</div>
		
</div>
		<input type="hidden" value="<?php echo $bilgilerimcek['bilgilerim_id'] ?>" name="bilgilerim_id">
		<button type="submit" name="updateislemi">Formu Düzenle</button>

	</form>
</div>
</div>

</div>

	


<?php
$target_dir = "C:/AppServ/www/yeni/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Dosya ". basename( $_FILES["fileToUpload"]["name"]). " yüklendi.";
    } else {
        
    }
}
?>
<script>
var x = document.getElementById("myImage");

</script>
	<br>

	<h4>Kayýtlarýn Listelenmesi</h4>
	<hr>

	<?php 

	

	?>


	<hr>
<table class="table table-hover" >
		<thead style="background: #a87293;" >  
			<tr>
			<th>S.NO</th>
			<th>ID</th>
			<th>Ad</th>
			<th>Yazar</th>
			<th>Yayýnevi</th>
			<th>Sayfa</th>
			<th>Foto</th>
			<th>Tur</th>
			</tr>
		</thead>
		<?php

		$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
		$bilgilerimsor->execute();

		$say=0;

		while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++ ?>
		
			<tr>
				<td><?php echo $say; ?></td>
			<td><?php echo $bilgilerimcek['bilgilerim_id'] ?></td>
			<td><?php echo $bilgilerimcek['bilgilerim_ad'] ?></td>
			<td><?php echo $bilgilerimcek['bilgilerim_yazar'] ?></td>
			<td><?php echo $bilgilerimcek['bilgilerim_yayinevi'] ?></td>
			<td><?php echo $bilgilerimcek['bilgilerim_ozet'] ?></td>
			<td><img src="<?php echo $bilgilerimcek['bilgilerim_foto'] ?>"style="width: 25%" ></td>
			<td><?php echo $bilgilerimcek['bilgilerim_tur'] ?> </td>
			<td align="center"><a href="islem.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>&bilgilerimsil=ok"><button>Sil</button></td></a>
			<td align="center"><a href="index.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>"><button>Düzenle</button></td></a>
			</tr>
		
<?php } ?>
	</table>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>