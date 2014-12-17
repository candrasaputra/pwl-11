			<?php $this->load->view('page/header') ?>
			<!--slider-->
			
			<!--profile-->
			<?php $this->load->view('page/agenda')?>
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
				<?php $this->load->view('page/info') ?>
				<div class="sambungfloat"></div>
			</div>
			
			<!--ini footer-->
			<?php $this->load->view('page/footer') ?>
		</div>
	</div>

	</body>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</html>