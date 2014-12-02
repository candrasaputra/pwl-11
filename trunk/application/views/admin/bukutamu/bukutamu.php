<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title; ?></a></li>
                </ul>
                <div class="tab-content">
                <table class="table table-hover">
                    <tr>
                        <th align="center" width="1%"><b>#</b></th>
                        <th width="1%"><b>Tanggal</b></th>
                        <th align="center">Nama</th>
                        <th align="center">isi</th>
                        <th align="center" width="1%">Stats</th>
                        <th align="center" width="1%" colspan="2">Action</th>
                    </tr>
                    <?php $no=1?>
                    <?php foreach($bukutamu as $n):?>
                    <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $n->tgl_bt?></td>
                        <td><?php echo $n->nm_bt?></td>
                        <td><?php echo $n->isi_bt?></td>
                        <td><p class="label label-info"><?php echo $n->stats_bt?></p></td>
                        <?php echo "
                            <td><a href =bukutamu/edit/$n->id_bt>Edit</a></td>
                            <td><a href =bukutamu/delete/$n->id_bt>Delete</a></td>
                        "?>
                    </tr>   
                    <?php $no++?>
                    <?php endforeach?>
                </table>
                 </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
     </div><!-- /.row -->
</section><!-- /.content -->
           