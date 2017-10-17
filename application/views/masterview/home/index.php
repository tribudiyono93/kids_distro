            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Selamat Datang, ...</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row"> 
                    <div class="col-md-12">
                        <div class="col-lg-4 col-xs-6">
                            
                        </div>
                        <div class="col-lg-4 col-xs-6 text-center">
                            <!-- small box -->
                             <img src="<?php echo base_url('assets/img/kartu.jpg'); ?>" class="img-circle" alt="User Image" />
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6 text-center"> 
                             
                       
                        </div> 
                    </div>
                    </div><!-- /.row --> 
                    <p></p><p></p>
                    <!-- box open -->
                    
                    <div class="box col-md-12">  
                        <div class="timeline-item"> 
                            <h3 class="timeline-header text-center"><a href="<?php echo base_url('index.php/Stock_controller');?>">Stok Produk Terbaru</a></h3>
                                <div class="timeline-body">
                                <?php 
                                 foreach ($home_product as $row) 
                                {?>
                                    <div class="col-md-3"> 
                                        <div class="box-box-solid">
                                            <div class="box box-header">  
                                                <p class="text-center"><strong><?php echo $row->id_brand;?> - <?php echo $row->product_name;?></strong></p>
                                            </div>
                                             <img style="width: 100%; display: block;" src="<?php echo base_url('assets/img/product/'.$row->image);?>" width="200px" height="150px" alt="image" class='margin'/>
                                        </div> 
                                    </div> 
                                <?php    }?>      
                                </div>
                        </div> 
                    </div>
                     
                    <!-- box close -->
                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->