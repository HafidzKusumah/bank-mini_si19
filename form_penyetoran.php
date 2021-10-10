<div id="container-user-akses">

	<form action="<?php echo BASE_URL."proses_penyetoran.php--"; ?>" method="POST">
	
		<?php
			
			if($notif == "require"){
				echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>"
			}
		?>
		
		<center><h1>FORM PENYETORAN</h1></center>
		<!--FORM-->
		<div class="element-form">
			<label>NAMA PEMILIK REKENING</label>
			<p><i>Name Of Account Holder</i></p>
			<span><input type="text" name="" value="" /></span>
		</div>
		
		<div class="element-form">
			<label>NO. TELP. PENYETOR</label>
			<p><i>Phone Number</i></p>
			<span><input type="text" name="" value="" /></span>
		</div>

		<div class="element-form">
			<label>ALAMAT</label>
			<p><i>Depositor's Address</i></p>
			<span><textarea name="" value""></textarea></span>
		</div>

		<label> <b>Jenis Rekening </b></label>
		<select class="element-form">
			<option selected>JENIS REKENING</option>
			<option value="1">GIRO / Checking Account</option>
			<option value="2">TABUNGAN / Savings</option>
			<option value="3">PINJAMAN / Loan</option>
		  </select>

		<div class="element-form" >
			<label>NO. REKENING </label>
			<p><i>Account Number</i></p>
			<span><input type="text" name="" value="" /></span>
		</div>

		<label> <b>  Jenis Transaksi </b></label>
		<select class="element-form">
			<option selected>JENIS TRANSAKSI</option>
			<option value="1">LOKAL / Local</option>
			<option value="2"> ANTAR CABANG / Interbranch</option>
		  </select>

		  <div class="element-form">
			<label>Tanda Tangan Penyetor</label>
			<p><i>Upload Tanda Tangan Penyetor</i></p>
			<span><input type="file" id="myfile" name="myfile" value=""><br><br></span>
		</div>


		  	<label> <b> Jenis Mata Uang </b></label>
			<select class="element-form">
			  <option selected>MATA UANG</option>
			  <option value="1">RUPIAH / Local Currency</option>
			  <option value="2">VALUTA ASING / Foreign Currency</option>
			</select> 

		<div class="element-form">
			<span><input type="submit" value="SEND" /></span>
		</div>	
	
	</form>

	<!--END FORM-->
	
</div>