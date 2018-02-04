<?php require_once"core/init.php";

 

	$error="";

	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$data_blok=data_blok_id($id);
		$row=mysqli_fetch_assoc($data_blok);

		$blok=$row['blok'];
	}


	if (isset($_POST['submit'])) {
		$blok=$_POST['blok'];
			
			$edit=edit_blok($id,$blok);
			if ($edit) {
				header('location:data_blok.php');
			}else{
				die('cek koneksi');
			}
		}
?>
<!DOCTYPE html>
<html>

	<?php require_once"view/head.php"; ?>

<body>

<?php require_once"view/menu.php"; ?>


	<!-- konten -->
	<div id="content">

		<div id="content-isi">
			<p>EDIT DATA BLOK<p>
				<div class="garis"></div>
				
					<form action="" method="post">
						<input type="input" name="blok" value="<?= $blok ?>" required>
						<div style="color: red; font-size: 20px; "><?= $error ?></div>
						<input type="submit" name="submit" class="btn btn-success" value="EDIT BLOK">
					</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>