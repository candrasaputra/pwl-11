<?php 
    //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_ALL));

    if ($title == "Profile") {
        $priksa1 = "active";
    }else if ($title == "Profile"){
        $priksa2 = "active";
    }elseif ($title == "Tambah Artikel") {
        $priksaartikel = "active";
        $priksa3 = "active";
    }elseif ($title == "Semua Artikel") {
        $priksaartikel = "active";
        $priksa4 = "active";
    }elseif ($title == "Kategori") {
        $priksaartikel = "active";
        $priksa5 = "active";
    }elseif ($title == "Tambah Agenda") {
        $priksaagenda = "active";
        $priksa6 = "active";
    }elseif ($title == "Semua Agenda") {
        $priksaagenda = "active";
        $priksa7 = "active";
    }elseif ($title == "Tambah Info") {
        $priksainfo = "active";
        $priksa8 = "active";
    }elseif ($title == "Semua Info") {
        $priksainfo = "active";
        $priksa9 = "active";
    }elseif ($title == "Tambah Staff") {
        $priksastaff = "active";
        $priksa10 = "active";
    }elseif ($title == "Daftar Staff") {
        $priksastaff = "active";
        $priksa11 = "active";
    }elseif ($title == "Tugas") {
        $priksastaff = "active";
        $priksa12 = "active";
    }elseif ($title == "Buku Tamu") {
        $priksabk = "active";
    }
    else{
        $priksa = "active";
    }

    if (empty($priksa)) $priksa = '';
    if (empty($priksa1)) $priksa1 = '';
    if (empty($priksa2)) $priksa2 = '';
    if (empty($priksa3)) $priksa3 = '';
    if (empty($priksa4)) $priksa4 = '';
    if (empty($priksa5)) $priksa5 = '';
    if (empty($priksa6)) $priksa6 = '';
    if (empty($priksa7)) $priksa7 = '';
    if (empty($priksa8)) $priksa8 = '';
    if (empty($priksa9)) $priksa9 = '';
    if (empty($priksa10)) $priksa10 = '';
    if (empty($priksa11)) $priksa11 = '';
    if (empty($priksa12)) $priksa12 = '';

    if (empty($priksaartikel)) $priksaartikel = '';
    if (empty($priksaagenda)) $priksaagenda = '';
    if (empty($priksainfo)) $priksainfo = '';
    if (empty($priksastaff)) $priksastaff = '';
    if (empty($priksabk)) $priksabk = '';

 ?>

<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url()?>assets/img/admin/<?php echo $cookie['c_img'] ?>" class="img-circle" alt="User Image" />
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
                                <li class= <?php echo $priksa3; ?>><a href="<?php echo base_url()?>admin/artikel/tambahartikel"><i class="fa fa-angle-double-right"></i> Tambah Artikel</a></li>
                                <li class= <?php echo $priksa4; ?>><a href="<?php echo base_url()?>admin/artikel/semuaartikel"><i class="fa fa-angle-double-right"></i> Semua Artikel</a></li>
                                <li class= <?php echo $priksa5; ?>><a href="<?php echo base_url()?>admin/artikel/kategoriartikel"><i class="fa fa-angle-double-right"></i> Kategori Artikel</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $priksaagenda; ?>">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>Agenda</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class= <?php echo $priksa6; ?>><a href="<?php echo base_url()?>admin/agenda/tambahagenda"><i class="fa fa-angle-double-right"></i> Tambah Agenda</a></li>
                                <li class= <?php echo $priksa7; ?>><a href="<?php echo base_url()?>admin/agenda/semuaagenda"><i class="fa fa-angle-double-right"></i> Semua Agenda</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $priksainfo; ?>">
                            <a href="#">
                                <i class="fa fa-info"></i> <span>Info Sekolah</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class= <?php echo $priksa8; ?>><a href="<?php echo base_url()?>admin/info/tambahinfo"><i class="fa fa-angle-double-right"></i> Tambah info sekolah</a></li>
                                <li class= <?php echo $priksa9; ?>><a href="<?php echo base_url()?>admin/info/semuainfo"><i class="fa fa-angle-double-right"></i> Semua info seklaoh</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $priksastaff; ?>">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Staff</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class= <?php echo $priksa10; ?>><a href="<?php echo base_url()?>admin/staff/tambahstaff"><i class="fa fa-angle-double-right"></i> Tambah Staff</a></li>
                                <li class= <?php echo $priksa11; ?>><a href="<?php echo base_url()?>admin/staff/daftarstaff"><i class="fa fa-angle-double-right"></i> Daftar Staff</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i> <span>Siswa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>admin/siswa/tambahsiswa"><i class="fa fa-angle-double-right"></i> Tambah Siswa</a></li>
                                <li><a href="<?php echo base_url()?>admin/siswa/daftarsiswa"><i class="fa fa-angle-double-right"></i> Daftar Siswa</a></li>
                                <li><a href="<?php echo base_url()?>admin/siswa/jurusan"><i class="fa fa-angle-double-right"></i> Jurusan</a></li>
                                <li><a href="<?php echo base_url()?>admin/siswa/kelas"><i class="fa fa-angle-double-right"></i> Kelas</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $priksabk; ?>">
                            <a href="<?php echo base_url()?>admin/bukutamu">
                                <i class="fa fa-comments-o"></i> <span>Buku Tamu</span>
                                <small class="badge pull-right bg-red"><?php echo $count_bukutamu; ?></small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-key"></i> <span>Akun</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>admin/akun/tambahakun"><i class="fa fa-angle-double-right"></i> Tambah Akun</a></li>
                                <li><a href="<?php echo base_url()?>admin/akun/daftarakun"><i class="fa fa-angle-double-right"></i> Daftar Akun</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>