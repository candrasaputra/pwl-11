
<div class="bg-putih skl-radius skl-shadow">
				<div class="col-md-3">

					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Agenda</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<!--<div class="skl-content">agenda</div>-->
					<div class="skl-content garis ">
						<div class="row">
							<div class="col-md-12">
							<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="40%" align="left">
							
								<?php foreach($agenda as $n):?>
								<a href="" target="new">&rsaquo;&rsaquo; <?php echo $n->judul_agenda?></a></br>
								<?php endforeach?>

							</marquee>
							</div>
							<div class="sambungfloat"></div>
						</div>
					</div>
				</div>	
				<div class="col-md-6">
					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Berita Terbaru</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>

					<?php foreach($artikel as $n):?>
					<div class="skl-content garis">
						<div class="row">
							<div class="col-md-4 "><img src="<?php echo base_url()?>assets/img/artikel/<?php echo $n->img_artikel?>" width="100%" height="20%"  alt="gambar"></div>
						<div class="col-md-8 ">
							<p><b><a href="#"><?php echo $n->judul_artikel?></a></b></br></p>
							<p>
								<?php echo $n->isi_artikel?></b>
							</p>
						</div>
						<div class="sambungfloat"></div>
						</div>
					</div>
					<?php endforeach?>

				</div>	
				<div class="col-md-3">
					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Info</div>
					<div class="col-md-8 skl-content "></div>
					<div class="sambungfloat"></div>
					
					<div class="skl-content garis">
						<div class="row">
						<div class="col-md-12">

							<?php foreach($info as $n):?>
							<p>&radic; <?php echo $n->tgl_info?> <?php echo $n->judul_info?></p>
							<?php endforeach?>

						</div>

						<div class="sambungfloat"></div>
						</div>
					</div>
				</div>
				<div class="sambungfloat"></div>
			</div>