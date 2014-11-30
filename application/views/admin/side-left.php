<?php 
    //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_ALL));

    if ($title == "Profile") {
        $priksa1 = "active";
    }else if ($title == "Profile"){
        $priksa2 = "active";
    }elseif ($title == "Tambah Artikel") {
        $priksaartikel = "active";
        $priksa3 = "active";
    }
    else{
        $priksa = "active";
    }

    if (empty($priksa)) $priksa = '';
    if (empty($priksa1)) $priksa1 = '';
    if (empty($priksa2)) $priksa2 = '';
    if (empty($priksa3)) $priksa3 = '';

    if (empty($priksaartikel)) $priksaartikel = '';

 ?>

<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url()?>assets/lte/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $cookie['c_fullname']?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="<?php echo "$priksa" ?>">
                            <a href="<?php echo base_url()?>admin/dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="<?php echo "$priksa1" ?>">
                            <a href="<?php echo base_url()?>admin/profile">
                                <i class="fa fa-th"></i> <span>Profile Sekolah</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview <?php echo $priksaartikel; ?>">
                            <a href="#">
                                <i class="fa fa-copy"></i>
                                <span>Artikel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class= <?php echo $priksa3; ?>><a href="<?php echo base_url()?>admin/tambahartikel"><i class="fa fa-angle-double-right"></i> Tambah Artikel</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Semua Artikel</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Kategori Artikel</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>Agenda</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> Tambah Agenda</a></li>
                                <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Semua Agenda</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-info"></i> <span>Info Sekolah</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> Tambah info sekolah</a></li>
                                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Semua info seklaoh</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Staff</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Tambah Staff</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Daftar Staff</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Jabatan</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i> <span>Siswa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Tambah Siswa</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Daftar Siswa</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Jurusan</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Kelas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>admin/bukutamu">
                                <i class="fa fa-comments-o"></i> <span>Buku Tamu</span>
                                <small class="badge pull-right bg-red"><?php echo $count_bukutamu; ?></small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-key"></i> <span>Account</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Tambah Account</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Daftar Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>