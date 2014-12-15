<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title ?></a></li>
                </ul>
                <div class="tab-content">
                    <form method="post" action="<?php echo site_url('admin/artikel/proses_edit_kategori'); ?>">
                    	<label>Kode</label><br/>
                        <input type="text" placeholder="<?php echo $kategori->kd_kat_artikel;?>" disabled/>
                        <br/>
                        <br/>

                        <label>Nama</label><br/>
                        <input type="text" name="nama" value="<?php echo $kategori->nm_kat_artikel;?>" />
                        <br/>
                        <br/>
                        <input type="hidden" name="kode" value="<?php echo $kategori->kd_kat_artikel;?>" />
                        <input type="submit" value="simpan" />
                    </form>
                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->