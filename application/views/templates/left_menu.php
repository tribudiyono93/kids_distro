<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('assets/img/logo.jpg'); ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $this->session->userdata('name'); ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url('index.php/Home_controller');?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li> 
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Data</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('index.php/Brand_controller');?>"><i class="fa fa-angle-double-right"></i> Merek</a></li> 
                                <li><a href="<?php echo base_url('index.php/Category_controller');?>"><i class="fa fa-angle-double-right"></i> Kategori Produk</a></li>
                                <li><a href="<?php echo base_url('index.php/Size_controller');?>"><i class="fa fa-angle-double-right"></i> Ukuran Produk </a></li>
                                <li><a href="<?php echo base_url('index.php/Bank_controller');?>"><i class="fa fa-angle-double-right"></i> Bank </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Product_controller');?>">
                                <i class="fa fa-laptop"></i> <span>Produk</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i> <span>Penjualan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('index.php/Sale_controller/add');?>"><i class="fa fa-angle-double-right"></i> Transaksi Penjualan</a></li>
                                <li><a href="<?php echo base_url('index.php/Sale_controller');?>"><i class="fa fa-angle-double-right"></i> Rekap Penjualan</a></li> 
                            </ul>
                        </li> 
                        <li>
                            <a href="<?php echo base_url('index.php/User_controller');?>">
                                <i class="fa fa-user"></i> <span>User</span> 
                            </a>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>