<meta charset="utf-8">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
    
<script>
    $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>

<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title ?></a></li>
                </ul>
                <div class="tab-content">

                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/siswa/proses_siswa');?> ">
                	<label>NIK</label><br/>
                    <input type="text" name="nik" required/>
                    <br/>
                    <br/>

                    <label>Nama</label><br/>
                    <input type="text" name="nama" required/>
                    <br/>
                    <br/>

                    <label>Kode Kelas</label><br/>
                    <select name="kdkelas">
                    <?php foreach($kelas as $n):?>
                    	<option value="<?php echo $n->kd_kelas?>"><?php echo $n->nm_kelas?></option>
                    <?php endforeach?>
                    </select>
                    <br/>
                    <br/>

                    <label>Alamat</label><br/>
                    <input type="text" name="alamat" required/>
                    <br/>
                    <br/>

                    <label>Tanggal Lahir</label><br/>
                    <input type="text" id="datepicker" name="tgllahir" required/>
                    <br/>
                    <br/>

                    <label>Tempat Lahir</label><br/>
                    <input type="text" name="tempatlahir" required/>
                    <br/>
                    <br/>

                    <label>Hp</label><br/>
                    <input type="text" name="hp" required/>
                    <br/>
                    <br/>

                    <label>Agama</label><br/>
                    <select name="agama">
                    	<option>islam</option>
                    	<option>kristen</option>
                    	<option>protestan</option>
                    	<option>hindu</option>
                    	<option>budha</option>
                    </select>
                    <br/>
                    <br/>

                    <label>Jenis Kelamin</label><br/>
                    <select name="jk">
                    	<option>laki-laki</option>
                    	<option>perempuan</option>
                    </select>
                    <br/>
                    <br/>

                    <label>Email</label><br/>
                    <input type="email" name="email" required/>
                    <br/>
                    <br/>

                    <label>Tanggal Masuk</label><br/>
                    <input type="text" id="datepicker2" name="tglmasuk" />
                    <br/>
                    <br/>

                    <label>Wali</label><br/>
                    <input type="text" name="wali" required/>
                    <br/>
                    <br/>

                    <label>Status</label><br/>
                    <select name="status">
                    	<option>aktif</option>
                    	<option>alumni</option>
                    </select>
                    <br/>
                    <br/>

                    <label>Foto</label><br/>
                    <input type="file" name="foto" />
                    *jpg, jpeg, gif, png
                    <br/>
                    <br/>

                    <input type="submit" value="Simpan" />
                </form>

                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->