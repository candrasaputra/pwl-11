<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Tambah
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('admin/artikel/proses_kategori'); ?>">
                    <table hight="80px">
                        <tr>
                            <td>Nama Kategori </td>
                            <td><input type="texbox" name="nama" class="form-control" required/></td>
                        </tr>
                        
                    </table>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="tbhPenyakit" value="Tambah">
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <br/>
            <br/>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $title ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1?>
                            <?php foreach($kategori as $n):?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $n->kd_kat_artikel?></td>
                                <td><?php echo $n->nm_kat_artikel?></td>
                                <?php echo "
                                    <td>
                                    <a class='btn btn-primary' href =editkategori/$n->kd_kat_artikel><i class='fa fa-edit '> Edit</i></a>
                                    <a class='btn btn-danger' href =deletekategori/$n->kd_kat_artikel><i class='fa fa-trash-o'></i> Delete</a>
                                    </td>
                                "?>
                            </tr>   
                            <?php $no++?>
                            <?php endforeach?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section><!-- /.content -->


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      


        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>