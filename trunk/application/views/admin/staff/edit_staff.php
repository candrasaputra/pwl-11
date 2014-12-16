<?php echo $staff->id_staff;?>

<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title ?></a></li>
                </ul>
                <div class="tab-content">

                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/staff/proses_edit_staff');?> ">
                	<label>NIP</label><br/>
                    <input type="text" name="nip" value="<?php echo $staff->nip_staff;?>" required/>
                    <br/>
                    <br/>

                    <label>Nama</label><br/>
                    <input type="text" name="nama" value="<?php echo $staff->nm_staff;?>" required/>
                    <br/>
                    <br/>

                    <label>Jenis Kelamin</label><br/>
                    <select name="jk">
                    	<option value="laki-laki" <?php if($staff->jk_staff == 'laki-laki'){echo("selected");}?>>laki-laki</option>
                    	<option value="perempuan" <?php if($staff->jk_staff == 'perempuan'){echo("selected");}?>>perempuan</option>
                    </select>
                    <br/>
                    <br/>

                    <label>Tanggal Lahir</label><br/>
                    <input type="text" name="tgllahir" value="<?php echo $staff->tgl_lahir_staff;?>" required/>
                    <br/>
                    <br/>

                    <label>Tempat Lahir</label><br/>
                    <input type="text" name="tempatlahir" value="<?php echo $staff->tmp_lahir_staff;?>" required/>
                    <br/>
                    <br/>

                    <label>Email</label><br/>
                    <input type="email" name="email" value="<?php echo $staff->email_staff;?>" required/>
                    <br/>
                    <br/>

                    <label>Telp</label><br/>
                    <input type="text" name="telp" value="<?php echo $staff->telp_staff;?>" />
                    <br/>
                    <br/>

                    <label>HP</label><br/>
                    <input type="text" name="hp" value="<?php echo $staff->hp_staff;?>" required/>
                    <br/>
                    <br/>

                    <label>Alamat</label><br/>
                    <input type="text" name="alamat" value="<?php echo $staff->alamat_staff;?>" required/>
                    <br/>
                    <br/>

                    <label>Tugas</label><br/>
                    <select name="tugas">
                    	<option value="guru" <?php if($staff->tugas_staff == 'guru'){echo("selected");}?>>guru</option>
                    	<option value="staff" <?php if($staff->tugas_staff == 'staff'){echo("selected");}?>>staff</option>
                    </select>
                    <br/>
                    <br/>

                    <label>Foto</label><br/>
                    <input type="file" name="foto" />
                    *jpg, jpeg, gif, png
                    <br/>
                    <br/>
                    <input type="hidden" name="fotosaatini" value="<?php echo $staff->img_staff;?>" />
                    <input type="hidden" name="kode" value="<?php echo $staff->id_staff;?>" />
                    <input type="submit" value="Simpan" />
                </form>

                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->