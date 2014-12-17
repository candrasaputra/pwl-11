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
								<a href="<?php echo base_url()?>tampilagenda" target="new">&rsaquo;&rsaquo; <?php echo $n->judul_agenda?></a></br>
								<?php endforeach?>

							</marquee>
							</div>
							<div class="sambungfloat"></div>
						</div>
					</div>
				</div>	