			<?php $this->load->view('page/header') ?>
			<!--slider-->
			
			<!--profile-->
			<div class="bg-putih skl-radius skl-shadow">
				<div class="col-md-3">

					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Agenda</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<!--<div class="skl-content">agenda</div>-->
					<div class="skl-content garis">
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
				<div class="col-md-6 ">
					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Profile Sekolah</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<div class="skl-content garis">
						<div class="row">
							<div class="col-md-12 ">
								<?php 
									echo $profile->judul_profile;
									echo "<br/><br/>";
									echo $profile->isi_profile;
								?>
							</div>
						<div class="sambungfloat"></div>
						</div>
					</div>
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
			
			<!--ini footer-->
			<?php $this->load->view('page/footer') ?>
		</div>
	</div>

</body>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</html>