<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

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
                            <?php foreach($kelas as $n):?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $n->kd_kelas?></td>
                                <td><?php echo $n->nm_kelas?></td>
                                <?php echo "
                                    <td>
                                    <a class='btn btn-primary' href =editkelas/$n->kd_kelas><i class='fa fa-edit '> Edit</i></a>
                                    <a class='btn btn-danger' href =deletekelas/$n->kd_kelas><i class='fa fa-trash-o'></i> Delete</a>
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