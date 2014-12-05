	
<?php $this->load->view('page/header') ?>
<?php $this->load->view('page/slider') ?>

<div class="bg-putih skl-radius skl-shadow">
Ini merupakan buku tamu, silahkan isikan buku tamu disini:
<br/>

<form action="<?php echo site_url('bukutamu/proses_tambah_bukutamu'); ?>" method="POST">
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

<div>
<?php foreach($bukutamu as $n):?>
	<div><b><?php echo $n->nm_bt?></b></div>    
    <div>
    	<?php echo $n->tgl_bt?>
   		 <br/>
    	<?php echo $n->isi_bt?>
    	<br/>
    </div>
    
<?php endforeach?>
</div>
</div>

<?php $this->load->view('page/footer') ?>
