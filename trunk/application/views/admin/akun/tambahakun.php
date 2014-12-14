<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title ?></a></li>
                </ul>
                <div class="tab-content">

                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/akun/proses_akun');?> ">
                	<label>Username</label><br/>
                    <input type="text" name="username" />
                    <br/>
                    <br/>

                    <label>Password</label><br/>
                    <input type="password" name="pass" />
                    <br/>
                    <br/>

                    <label>Nama</label><br/>
                    <input type="text" name="nama" />
                    <br/>
                    <br/>

                    <label>Email</label><br/>
                    <input type="text" name="email" />
                    <br/>
                    <br/>

                    <label>Hp</label><br/>
                    <input type="text" name="hp" />
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