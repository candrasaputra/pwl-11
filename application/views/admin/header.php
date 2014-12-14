<header class="header">
            <a href="<?php echo base_url()?>admin" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                WEB SEKOLAH
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="tasks-menu">
                            <a href="<?php echo base_url()?>" target="_blank">
                                <i class="fa fa-eye"></i> Lihat situs
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $cookie['c_fullname']?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url()?>assets/img/admin/<?php echo $cookie['c_img'] ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $cookie['c_fullname']?>
                                        <small>Last Login / IP</small>
                                        <small>
                                        <?php echo $cookie['c_lastlog']." / "?>
                                        <?php echo $_SERVER['REMOTE_ADDR'];?>
                                        </small>
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url()?>admin/dashboard/profile/" class="btn btn-default btn-flat">Edit Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url()?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
