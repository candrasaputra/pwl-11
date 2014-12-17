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
                    <input type="text" name="nik" value="<?php echo $siswa->nik_siswa;?>" required/>
                    <br/>
                    <br/>

                    <label>Nama</label><br/>
                    <input type="text" name="nama" value="<?php echo $siswa->nm_siswa;?>" required/>
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
                    <input type="text" name="alamat" value="<?php echo $siswa->alamat_siswa;?>" required/>
                    <br/>
                    <br/>

                    <label>Tanggal Lahir</label><br/>
                    <input type="text" name="tgllahir" value="<?php echo $siswa->tgl_lahir_siswa;?>" required/>
                    <br/>
                    <br/>

                    <label>Tempat Lahir</label><br/>
                    <input type="text" name="tempatlahir" value="<?php echo $siswa->tmp_lahir_siswa;?>" required/>
                    <br/>
                    <br/>

                    <label>Hp</label><br/>
                    <input type="text" name="hp" value="<?php echo $siswa->hp_siswa;?>" required/>
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
                    <input type="email" name="email" value="<?php echo $siswa->email_siswa;?>" required/>
                    <br/>
                    <br/>

                    <label>Tanggal Masuk</label><br/>
                    <input type="text" name="tglmasuk" value="<?php echo $siswa->tgl_masuk_siswa;?>" />
                    <br/>
                    <br/>

                    <label>Wali</label><br/>
                    <input type="text" name="wali" value="<?php echo $siswa->wali_siswa;?>" required/>
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