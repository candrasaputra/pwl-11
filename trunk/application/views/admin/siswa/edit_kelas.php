<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title ?></a></li>
                </ul>
                <div class="tab-content">
                    <form method="POST" action="<?php echo site_url('admin/siswa/proses_edit_kelas'); ?>">
					  <table hight="80px">
					      <tr>
					          <td width="45%">Kode </td>
					          <td><input type="texbox" class="form-control" placeholder="<?php echo $kelas->kd_kelas;?>" disabled/></td>
					      </tr>
					      <tr>
					          <td>Nama Kelas </td>
					          <td><input type="texbox" name="nama" class="form-control" value="<?php echo $kelas->nm_kelas;?>" required/></td>
					      </tr>
					    </table>
					  <input type="hidden" name="kode" value="<?php echo $kelas->kd_kelas;?>" />
					  <input type="submit" class="btn btn-primary" value="Tambah">
					</form>
                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->