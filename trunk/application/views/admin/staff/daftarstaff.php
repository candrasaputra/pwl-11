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
                                <th>Img</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Hp</th>
                                <th>Tugas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1?>
                            <?php foreach($staff as $n):?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img src="<?php echo base_url()?>assets/img/staff/<?php echo $n->img_staff?>" /></td>
                                <td><?php echo $n->nip_staff?></td>
                                <td><?php echo $n->nm_staff?></td>
                                <td><?php echo $n->email_staff?></td>
                                <td><?php echo $n->hp_staff?></td>
                                <td><?php echo $n->tugas_staff?></td>
                                <?php echo "
                                    <td>
                                    <a class='btn btn-primary' href =edit_staff/$n->id_staff> <i class='fa fa-edit '></i> Edit</a>
                                    <a class='btn btn-danger' href =delete_staff/$n->id_staff> <i class='fa fa-trash-o'></i> Delete</a>
                                    </td>
                                "?>
                            </tr>   
                            <?php $no++?>
                            <?php endforeach?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Img</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Hp</th>
                                <th>Tugas</th>
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