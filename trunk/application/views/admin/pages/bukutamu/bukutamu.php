<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>assets/lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- demo style -->
        <style type="text/css">
            /* FROM HTTP://WWW.GETBOOTSTRAP.COM
             * Glyphicons
             *
             * Special styles for displaying the icons and their classes in the docs.
             */

            .bs-glyphicons {
                padding-left: 0;
                padding-bottom: 1px;
                margin-bottom: 20px;
                list-style: none;
                overflow: hidden;
            }
            .bs-glyphicons li {
                float: left;
                width: 25%;
                height: 115px;
                padding: 10px;
                margin: 0 -1px -1px 0;
                font-size: 12px;
                line-height: 1.4;
                text-align: center;
                border: 1px solid #ddd;
            }
            .bs-glyphicons .glyphicon {
                margin-top: 5px;
                margin-bottom: 10px;
                font-size: 24px;
            }
            .bs-glyphicons .glyphicon-class {
                display: block;
                text-align: center;
                word-wrap: break-word; /* Help out IE10+ with class names */
            }
            .bs-glyphicons li:hover {
                background-color: rgba(86,61,124,.1);
            }

            @media (min-width: 768px) {
                .bs-glyphicons li {
                    width: 12.5%;
                }
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('admin/header'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php $this->load->view('admin/side-left'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <?php $this->load->view('admin/content-header'); ?>

                <!-- Main content -->
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
                                        <th align="center" width="1%">Action</th>
                                    </tr>
                                    <?php $no=1?>
                                    <?php foreach($bukutamu as $n):?>
                                    <tr>
                                        <td><?php echo $no?></td>
                                        <td><?php echo $n->tgl_bt?></td>
                                        <td><?php echo $n->nm_bt?></td>
                                        <td><?php echo $n->isi_bt?></td>
                                        <td><p class="label label-info"><?php echo $n->stats_bt?></p></td>
                                        <td><?php echo "
                                            <input type='image' src='http://localhost/pwl/assets/img/edit.png' name='submit' value= EDIT />
                                            <input type='image' src='http://localhost/pwl/assets/img/delete.png' name='submit' value= DELETE />
                                        "?></td>
                                    </tr>   
                                    <?php $no++?>
                                    <?php endforeach?>
                                </table>
                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script src="<?php echo base_url()?>assets/lte/tambahan/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/lte/tambahan/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url()?>assets/lte/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url()?>assets/lte/js/AdminLTE/demo.js" type="text/javascript"></script>
    </body>
</html>
