			<?php $this->load->view('page/header') ?>
			
			<!--siswa-->
	<div class="bg-putih skl-radius skl-shadow">
		<div class="col-md-12 garis">
			<div class="row">
				
				<div class="col-md-1 garis"><b>Nis</b></div>
				<div class="col-md-2 garis"><b>Photo</b></div>
				<div class="col-md-2 garis"><b>Nama</b></div>
				<div class="col-md-3 garis"><b>Alamat</b></div>
				<div class="col-md-2 garis"><b>tgl lahir</b></div>
				<div class="col-md-2 garis"><b>Wali</b></div>

				<?php foreach($siswa as $n):?>
				<div class="col-md-1 garis">011</div>
				<div class="col-md-2 garis">Photo</div>
				<div class="col-md-2 garis">ali baba</div>
				<div class="col-md-3 garis">yogyakarta</div>
				<div class="col-md-2 garis">desember 1993</div>
				<div class="col-md-2 garis">subroto</div>
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