            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data Merek
                        <small>(Brand)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Data Merek</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?php echo site_url('index.php/Brand_controller/add');?>" class="btn btn-info">Tambah</a> 
                            <div class="box" style="margin-top: 10px">
                                <div class="box-header">
                                    <h3 class="box-title">Responsive Hover Table</h3>
                                    <div class="box-tools">
                                        <form role="form" action="<?php echo base_url('index.php/Brand_controller/search');?>" method="POST">
                                            <div class="input-group">
                                                <input type="text" name="keyword" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <?php
                                        $error_msg = $this->session->flashdata('error_msg');
                                        $success_msg = $this->session->flashdata('success_msg');

                                        if($error_msg != NULL){
                                    ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <?php echo $error_msg; ?>
                                            </div>
                                    <?php 
                                        }

                                        if ($success_msg != NULL) {

                                    ?>
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <?php echo $success_msg; ?>
                                            </div>
                                    <?php }?>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kode Merek</th>
                                                <th class="text-center">Nama Merek</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 0;
                                                foreach ($brands as $value) {
                                                   $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $value['id_brand'];?></td>
                                                <td><?php echo $value['brand_name'];?></td>
                                                <td><?php echo $value['description'];?></td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url('index.php/Brand_controller/edit/'.$value['id_brand']);?>" class="btn bg-purple margin" type='button'><i class='fa fa-edit'></i></a> 
                                                </td>
                                            </tr>  
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side --> 