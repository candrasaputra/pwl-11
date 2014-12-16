<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab">Edit Akun</a></li>
                </ul>
                <div class="tab-content">

                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/akun/proses_edit_akun');?> ">
                	<label>Username</label><br/>
                    <input type="text" name="username" value="<?php echo $akun->username;?>" required/>
                    <br/>
                    <br/>
<!--
                    <label>Password</label><br/>
                    <input type="password" name="pass" value="<?php echo md5($akun->password);?>" required/>
                    <br/>
                    <br/>
-->
                    <label>Nama</label><br/>
                    <input type="text" name="nama" value="<?php echo $akun->nama;?>" required/>
                    <br/>
                    <br/>

                    <label>Email</label><br/>
                    <input type="email" name="email" value="<?php echo $akun->email;?>" required/>
                    <br/>
                    <br/>

                    <label>Hp</label><br/>
                    <input type="text" name="hp" value="<?php echo $akun->hp;?>" required/>
                    <br/>
                    <br/>

                    <label>Foto</label><br/>
                    <input type="file" name="foto" />
                    *jpg, jpeg, png
                    <br/>
                    <br/>
                    <input type="hidden" name="fotosaatini" value="<?php echo $akun->img;?>" />
                    <input type="hidden" name="kode" value="<?php echo $akun->id_login;?>" />
                    <input type="submit" value="Ubah" />
                </form>

                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->