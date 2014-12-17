			<?php $this->load->view('page/header') ?>
			
			<!--siswa-->
	<div class="bg-putih skl-radius skl-shadow">
		<div class="col-md-12">
			<div class="row skl-radius">
				
				<div class="col-md-1 garis merah txt-putih"><b>Nis</b></div>
				<div class="col-md-2 garis merah txt-putih"><b>Nama</b></div>
				<div class="col-md-2 garis merah txt-putih"><b>Jenis Klamin</b></div>
				<div class="col-md-3 garis merah txt-putih"><b>Alamat</b></div>
				<div class="col-md-2 garis merah txt-putih"><b>tgl lahir</b></div>
				<div class="col-md-2 garis merah txt-putih"><b>Wali</b></div>

				<?php foreach($siswa as $n):?>
				<div class="col-md-1 padding-9 garis-bwh-m"><?php echo $n->nik_siswa ?></div>
				<div class="col-md-2 padding-9 garis-bwh-m"><?php echo $n->nm_siswa ?></div>
				<div class="col-md-2 padding-9 garis-bwh-m"><?php echo $n->jk_siswa ?></div>
				<div class="col-md-3 padding-9 garis-bwh-m"><?php echo $n->alamat_siswa ?></div>
				<div class="col-md-2 padding-9 garis-bwh-m"><?php echo $n->tgl_lahir_siswa ?></div>
				<div class="col-md-2 padding-9 garis-bwh-m"><?php echo $n->wali_siswa ?></div>
				 <?php endforeach?>
			</div>


			
		</div>
		<div class="sambungfloat"></div>
			<!--ini footer-->
			
	</div>
	<?php $this->load->view('page/footer') ?>

</body>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</html>