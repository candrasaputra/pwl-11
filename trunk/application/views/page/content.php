
		<?php $this->load->view('page/agenda')?>
				<div class="col-md-6">
					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Berita Terbaru</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>

					<?php foreach($artikel as $n):?>
					<div class="skl-content garis">
						<div class="row">
							<div class="col-md-4 "><img src="<?php echo base_url()?>assets/img/artikel/<?php echo $n->img_artikel?>" width="100%" height="20%"  alt="gambar"></div>
						<div class="col-md-8 ">
							<p><b><a href="<?php echo base_url()?>home/tampil/<?php echo $n->id_artikel?>"><?php echo $n->judul_artikel?></a></b></br></p>
							<p>
								<?php 
									$string = $n->isi_artikel;
									$string = word_limiter($string, 60);
								 ?>
								<?php echo $string;?> <a href="<?php echo base_url()?>home/tampil/<?php echo $n->id_artikel?>">read more..</a></b>
							</p>
						</div>
						<div class="sambungfloat"></div>
						</div>
					</div>
					<?php endforeach?>

				</div>	
				<?php $this->load->view('page/info') ?>