<head>
	<title>web</title>
	 <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	 <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	 <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
	 <link rel="shortcut icon" href="assets/img"/>
	 <link href="assets/css/sekolah.css" rel="stylesheet" type="text/css" />
	 <link href="assets/css/sosmed.css" rel="stylesheet" type="text/css" />

</head>
<body class="biru-tua">
	<div class="skl-banner">
		<div class="col-md-6 ">
			<h1 class="txt-putih"> <i class="fa  fa-graduation-cap"></i>&nbsp; SMP Prestasi</h1>
			<h5 class="txt-putih">menjunjung tinggi prestasi akademik yang dilandasi dengan iman</h5>
		</div>
		<div class="col-md-6  txt-kanan">
			<p>
				<a href="" class="txt-putih"> <i class="fa fa-home"></i>&nbsp;Home</a>&nbsp;|  
				<a href="<?php echo base_url()?>login" class="txt-putih"> <i class="fa fa-user"></i>&nbsp;Login</a>
			</p>
			 <form class="navbar-form navbar-right" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default padding-9"><i class="fa fa-search"></i></button>
		      </form>
		</div>
		<div class="sambungfloat"></div>
	</div>
	<div class="col-md-12">
		<div class="skl-banner">
			<nav class="navbar navbar-default biru-muda skl-shadow" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand active txt-putih" href="<?php echo base_url()?>home"><i class="fa fa-home"></i>&nbsp;Home</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav ">
			        <li><a href="<?php echo base_url()?>profile" class="txt-putih" >Profile</a></li>
			        <li><a href="#">Staff Pengajar</a></li>
			        <li><a href="#">Daftar Siswa</a></li>
			        <li><a href="#">Buku Tamu</a></li>
			        
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<!--slider-->
			<?php $this->load->view('page/slider') ?>
			<!--profile-->
			<div class="bg-putih skl-radius skl-shadow">
				<div class="col-md-4">

					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Agenda</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<!--<div class="skl-content">agenda</div>-->
					<div class="skl-content">
						<div class="row">
							<div class="col-md-4 garis">Gambar</div>
							<div class="col-md-8 garis">Ini Isi</div>
							<div class="sambungfloat"></div>
						</div>
					</div>
				</div>	
				<div class="col-md-5">
					<div class="col-md-4 merah skl-radius-ats  txt-putih ">Profile Sekolah</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<div class="skl-content">
						<div class="row">
							<div class="col-md-12 garis">Sejarah</div>
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
							<div class="col-md-4 garis">Gambar</div>
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