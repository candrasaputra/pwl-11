<?php $this->load->view('page/header') ?>
<?php $this->load->view('page/agenda') ?>

	<div class="col-md-9">
			<div class="col-md-3 merah skl-radius-ats  txt-putih ">Berita Terbaru</div>
				<div class="col-md-9 skl-content "></div>						
				<div class="sambungfloat"></div>
					
					<div class="skl-content garis">
						<div class="row">
							<div class="col-md-4 "><img src="<?php echo base_url()?>assets/img/artikel/<?php echo $artikel->img_artikel?>" width="100%" height="20%"  alt="gambar"></div>
							<div class="col-md-8 ">
								<p><b><a href=""><?php echo $artikel->judul_artikel;?></a></b></p></br>
								<p>
								<?php echo $artikel->isi_artikel;?>.</b>
								</p>
								</div>
								<div class="sambungfloat"></div>
								</div>
								</div>					
							<div class="sambungfloat"></div>
							</div>

				<div class="sambungfloat"></div>
							</div>
<?php $this->load->view('page/footer') ?>	