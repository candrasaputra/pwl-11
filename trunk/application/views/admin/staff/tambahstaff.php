<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title ?></a></li>
                </ul>
                <div class="tab-content">

                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/staff/proses_staff');?> ">
                	<label>NIP</label><br/>
                    <input type="text" name="nip" />
                    <br/>
                    <br/>

                    <label>Nama</label><br/>
                    <input type="text" name="nama" />
                    <br/>
                    <br/>

                    <label>Jenis Kelamin</label><br/>
                    <select name="jk">
                    	<option>laki-laki</option>
                    	<option>perempuan</option>
                    </select>
                    <br/>
                    <br/>

                    <label>Tanggal Lahir</label><br/>
                    <input type="text" name="tgllahir" />
                    <br/>
                    <br/>

                    <label>Tempat Lahir</label><br/>
                    <input type="text" name="tempatlahir" />
                    <br/>
                    <br/>

                    <label>Email</label><br/>
                    <input type="email" name="email" />
                    <br/>
                    <br/>

                    <label>Telp</label><br/>
                    <input type="text" name="telp" />
                    <br/>
                    <br/>

                    <label>HP</label><br/>
                    <input type="text" name="hp" />
                    <br/>
                    <br/>

                    <label>Alamat</label><br/>
                    <input type="text" name="alamat" />
                    <br/>
                    <br/>

                    <label>Tugas</label><br/>
                    <select name="tugas">
                    	<option>guru</option>
                    	<option>staff</option>
                    </select>
                    <br/>
                    <br/>

                    <label>Foto</label><br/>
                    <input type="file" name="foto" />
                    *jpg, jpeg, png
                    <br/>
                    <br/>

                    <input type="submit" value="Simpan" />
                </form>

                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->