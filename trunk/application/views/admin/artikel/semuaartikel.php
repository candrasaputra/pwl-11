<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Buku Tamu</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1?>
                            <?php foreach($artikel as $n):?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $n->tgl_artikel?></td>
                                <td><?php echo $n->judul_artikel?></td>
                                <td><?php echo $n->nm_kat_artikel?></td>
                                <td><?php echo $n->status_artikel?></td>
                                <?php echo "
                                    <td>
                                    <a class='btn btn-primary' href =editartikel/$n->id_artikel> <i class='fa fa-edit '></i> Edit</a>
                                    <a class='btn btn-danger' href =deleteartikel/$n->id_artikel> <i class='fa fa-trash-o'></i> Delete</a>
                                    </td>
                                "?>
                            </tr>   
                            <?php $no++?>
                            <?php endforeach?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Status</th>
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
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>


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