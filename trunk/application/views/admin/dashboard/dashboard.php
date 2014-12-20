                
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_artikel; ?>
                                    </h3>
                                    <p>
                                        Artikel
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/artikel/semuaartikel" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_agenda; ?>
                                    </h3>
                                    <p>
                                        Agenda
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/agenda/semuaagenda" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_info; ?>
                                    </h3>
                                    <p>
                                        Info
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-info-sign"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/info/semuainfo" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_bukutamu; ?>
                                    </h3>
                                    <p>
                                        Buku Tamu
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-comment"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/bukutamu" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_siswa; ?>
                                    </h3>
                                    <p>
                                        siswa
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/siswa/daftarsiswa" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_alumni; ?>
                                    </h3>
                                    <p>
                                        Alumni
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/siswa/daftarsiswa" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_staff; ?>
                                    </h3>
                                    <p>
                                        Staf
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/staff/daftarstaff" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo $count_guru; ?>
                                    </h3>
                                    <p>
                                        Guru
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <a href="<?php echo base_url()?>admin/staff/daftarstaff" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12">                            


                            
                            <a name="chat"></a>
                            <!-- Chat box -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <i class="fa fa-comments-o"></i>
                                    <h3 class="box-title">Chat</h3>
                                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                        <div class="btn-group" data-toggle="btn-toggle" >
                                            <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body chat" id="chat-box">
                                    <!-- chat item -->
                                    <?php foreach($chat as $n):?>
                                    <div class="item">
                                        <img src="<?php echo base_url()?>assets/img/admin/<?php echo $n->img?>" alt="user image" class="online"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $n->tgl_chat?></small>
                                                <?php echo $n->nama?>
                                            </a>
                                            <?php echo $n->pesan_chat?>
                                        </p>
                                    </div><!-- /.item -->
                                    <?php endforeach?>

                                    <!-- chat item -->
                                    <div class="item">
                                        <img src="<?php echo base_url()?>assets/lte/img/avatar.png" alt="user image" class="offline"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                                Mike Doe
                                            </a>
                                            I would like to meet you to discuss the latest news about
                                            the arrival of the new theme. They say it is going to be one the
                                            best themes on the market
                                        </p>
                                        <div class="attachment">
                                            <h4>Attachments:</h4>
                                            <p class="filename">
                                                Theme-thumbnail-image.jpg
                                            </p>
                                            <div class="pull-right">
                                                <button class="btn btn-primary btn-sm btn-flat">Open</button>
                                            </div>
                                        </div><!-- /.attachment -->
                                    </div><!-- /.item -->
                                    
                                </div><!-- /.chat -->
                                <form method="POST" action="<?php echo site_url('admin/dashboard/proses_chat');?>">
                                    <div class="box-footer">
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="<?php echo $cookie['c_id']?>" />
                                            <input name="isi" class="form-control" placeholder="Type message..." MAXLENGTH="255"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.box (chat box) -->                                                        

                            
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->