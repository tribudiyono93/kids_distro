<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Jenis Produk
                        <small>(Product)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Jenis Produk</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?php echo site_url();?>index.php/Product_controller/add" class="btn btn-info">Tambah</a> 
                            <a href="<?php echo site_url();?>index.php/Product_controller" class="btn btn-primary pull-right"><i class="fa fa-reply"></i> Kembali</a> 
                            <div class="box" style="margin-top: 10px"> 
                                <div class="box-header">
                                    <h3 class="box-title">Tabel Jenis Produk</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
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
                                                <th class="text-center">Nama Produk</th>
                                                <th class="text-center">Kategori</th>
                                                <th class="text-center">Merek</th>
                                                <th class="text-center">Warna</th>
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center">Keterangan</th> 
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                foreach ($products as $value) {
                                                   
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i;?></td>
                                                <td><?php echo $value['product_name'];?></td>
                                                <td><?php echo $value['product_category_name'];?></td>
                                                <td><?php echo $value['id_brand'];?></td>
                                                <td><?php echo $value['color'];?></td>
                                                <td class="text-center"> 
                                                    <img src="<?php echo base_url('assets/img/product/'.$value['image']);?>" width="80px" height="80px">
                                                </td>
                                                <td><?php echo $value['information'];?></td> 
                                                <td class="text-center">
                                                    <a href="<?php echo site_url();?>index.php/Product_controller/details/<?php echo $value['id_product']?>" class="btn bg-navy margin" type='button'><i class="fa fa-th"> Detail</i></a> 
                                                    <!-- <a href="<?php echo site_url();?>index.php/Product_controller/edit" class="btn bg-maroon margin" type='button'><i class='fa fa-edit'></i> Detail </a> -->  
                                                </td>
                                            </tr> 
                                            <?php $i++; } ?>  
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