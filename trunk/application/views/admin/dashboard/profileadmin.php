<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab">Edit Profil <?php echo $cookie['c_fullname']?></a></li>
                </ul>
                <div class="tab-content">

                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/staff/proses_staff');?> ">
                	<label>ID</label><br/>
                    <input type="text" name="id" value="<?php echo $profile->id_login;?>" />
                    <br/>
                    <br/>

                    <label>Nama</label><br/>
                    <input type="text" name="nama" value="<?php echo $profile->nama;?>" />
                    <br/>
                    <br/>

                    <label>Username</label><br/>
                    <input type="text" name="username" value="<?php echo $profile->username;?>" />
                    <br/>
                    <br/>

                    <label>Password</label><br/>
                    <input type="text" name="pass" />
                    <br/>
                    <br/>

                    <label>email</label><br/>
                    <input type="text" name="email" value="<?php echo $profile->email;?>" />
                    <br/>
                    <br/>

                    <label>HP</label><br/>
                    <input type="text" name="hp" value="<?php echo $profile->hp;?>" />
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