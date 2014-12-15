
<?php $this->load->view('page/header') ?>


<div class="bg-putih skl-radius skl-shadow">
	<div class="col-md-12">
		<div class="col-md-2 merah skl-radius-ats  txt-putih ">Buku Tamu (Guestbook)</div>
		<div class="col-md-10 skl-content "></div>
		
		<div class="padding-9">
			<?php foreach($bukutamu as $n):?>
			<div class="">
				<b><?php echo $n->nm_bt?></b>
			</div>
			   
   			<div class="">
    			<?php echo $n->tgl_bt?>
   		 		<br/>
    			<?php echo $n->isi_bt?>
    			<br/>
    		</div>
    
			<?php endforeach?>
		</div>
	</div>


<div class="col-md-12"></br>
		<div class="col-md-3 merah skl-radius-ats  txt-putih ">Silahkan, Isikan buku tamu Disini :</div>
		<div class="col-md-9 skl-content "></div>
<div class="padding-9">
<form action="<?php echo site_url('bukutamu/proses_tambah_bukutamu'); ?>" method="POST"></br>
	<label>Nama: </label><br/>
	<input type="text" name="nama" required/>
	<br/>

	<label>Email: </label><br/>
	<input type="email" name="email" required/>
	<br/>

	<label>Web: </label><br/>
	<input type="text" name="web" />
	<br/>

	<label>Pesan: </label><br/>
	<textarea name="isi" required ></textarea>
	<br/>
	<br/>
	<input type="submit" value="Kirim" />
</form>
<br/>
</div>
</div>
<div class="sambungfloat"></div>

</div>

<?php $this->load->view('page/footer') ?>
