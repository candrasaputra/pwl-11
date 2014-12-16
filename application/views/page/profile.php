			<?php $this->load->view('page/header') ?>
			<!--slider-->
			
			<!--profile-->
			<div class="bg-putih skl-radius skl-shadow">
				<div class="col-md-3">

					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Agenda</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<!--<div class="skl-content">agenda</div>-->
					<div class="skl-content">
						<div class="row">
							<div class="col-md-12 ">
							<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="40%" align="left">
								<a href="" target="new">>>Pentas Seni tengah semester</a></br>
								<a href="" target="new">>>Teritorial Drama Musical di gedung panca wati bakti</a></br>
								<a href="" target="new">>>Debat English Contest se-eks kresidenan besuki dan tapal kuda region</a></br>
								<a href="" target="new">>>Pentas Seni tengah semester</a></br>
								<a href="" target="new">>>Teritorial Drama Musical di gedung panca wati bakti</a></br>
								<a href="" target="new">>>Debat English Contest se-eks kresidenan besuki dan tapal kuda region</a></br>
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
					<div class="skl-content">
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
					
					<div class="skl-content">
						<div class="row">
							<div class="col-md-4 garis tbl-uf:hover">Gambar</div>
						<div class="col-md-8 garis">Ini Isi</div>
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