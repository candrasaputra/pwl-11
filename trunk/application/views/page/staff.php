<?php $this->load->view('page/header') ?>


<script type="text/javascript" src="assets/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false
    });
});
</script>

<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="assets/js/jquery-prettyPhoto.js"></script>

<div class="skl-content bg-putih">
	<div class="col-md-12">
			<div class="col-md-4 merah skl-radius-ats  txt-putih ">iki dapure rupane Guruku</div>
			<div class="col-md-8 skl-content "></div>
	</div>	

<div class="sambungfloat"></div>					
<div id="gallery" class="col-md-12 clear">
	<div class="row">
		<div class="container">
        <ul>
          <?php foreach($staff as $n):?>
          <li><a href="assets/img/staff/<?php echo $n->img_staff?>" rel="prettyPhoto[gallery1]" title="<?php echo $n->nm_staff?>"><img src="assets/img/staff/<?php echo $n->img_staff?>" alt="" /></a></li>
          <?php endforeach?>
         
        </ul>
    </div>
    </div>
</div>
<div class="sambungfloat"></div>
</div>
<?php $this->load->view('page/footer') ?>