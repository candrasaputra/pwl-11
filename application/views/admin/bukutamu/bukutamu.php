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
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Isi</th>
                                <th>Stats</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1?>
                            <?php foreach($bukutamu as $n):?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $n->tgl_bt?></td>
                                <td><?php echo $n->nm_bt?></td>
                                <td><?php echo $n->isi_bt?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                          <i class="<?php if($n->stats_bt == 'publish'){echo("fa fa-eye");}else{echo("fa fa-eye-slash");}?>"></i> <?php echo $n->stats_bt?>
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/bukutamu/publish/<?php echo $n->id_bt?>">Publish</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/bukutamu/draff/<?php echo $n->id_bt?>">Draff</a></li>
                                        </ul>
                                    </div>
                                <?php echo "
                                    <td>
                                    <a class='btn btn-danger' href =bukutamu/delete/$n->id_bt><i class='fa fa-trash-o'></i> Delete</a>
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
                                <th>Nama</th>
                                <th>Isi</th>
                                <th>Stats</th>
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