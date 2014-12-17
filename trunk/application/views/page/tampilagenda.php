<?php $this->load->view('page/header') ?>

<div class="bg-putih skl-radius skl-shadow">
	<div class="col-md-12">
		<div class="col-md-2 merah skl-radius-ats  txt-putih ">Agenda</div>
		<div class="col-md-10 skl-content "></div>

	</div>

	
	
		<div class="col-md-12 padding-9 skl-content">
		<p><?php echo $agenda->judul_agenda?></p>
		<p><?php echo $agenda->tgl_agenda?></p>
		<p><?php echo $agenda->isi_agenda?></p>
		</div>

	<div class="sambungfloat"></div>
	
</div>

<?php $this->load->view('page/footer') ?>