<?php

	session_start();

	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$page = isset($_GET['page']) ? $_GET['page'] : false;
	//$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bank Mini | Website </title>
		
		<link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
			
		<script>
		// ++ SCRIPT
		</script>		
		
	</head>

	<body>

    <!--Content Header-->
		<div id="container">
			<div id="header">
				<a href="<?php echo BASE_URL."index.php"; ?>">
				<center>
					<img src="<?php echo BASE_URL."images/logo"; ?>" />
					</center>
				</a>
				
        <!--MENU UTAMA-->
				<div id="menu">
					<div id="user">
						<?php
							if($user_id){
								echo "Hi <b>$nama</b>,
								    <a href='".BASE_URL."index.php?page=my_profile'>My Profile</a>
									  <a href='".BASE_URL."logout.php'>Logout</a>";
							}else{
								echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
									 <a href='".BASE_URL."index.php?page=form_penyetoran'>Form Penyetoran</a>
									 <a href='".BASE_URL."index.php?page=form_permintaan'>Form Permintaan</a>";
							}
						?>
					</div>
				</div>
			</div>	
      
      <!--ISI CONTENT-->
			<div id="content">
				
				<?php
					$filename = "$page.php";
					
					if(file_exists($filename)){
						include_once($filename);
					}else{
					}
				?>
  
			</div>
			
      <!--FOOTER-->
			<div id="footer">
				<p>Bank-Mini_APS 2021</p>
			</div>
			
		</div>
	
	</body>
	
</html>