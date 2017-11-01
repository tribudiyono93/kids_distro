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
                            <a href="<?php echo site_url();?>index.php/Product_controller/add" class="btn btn-info"><i class='fa fa-plus'></i> Tambah</a> 
                            <div class="box" style="margin-top: 10px"> 
                                <div class="box-header">
                                    <h3 class="box-title">Tabel Jenis Produk</h3>
                                    <div class="box-tools">
                                        <form role="form" action="<?php echo base_url('index.php/Product_controller/search');?>" method="POST">
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

                                    <div id="product-container">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Nama Produk</th>
                                                    <th class="text-center">Image</th>
                                                    <th class="text-center">Size</th>
                                                    <th class="text-center">Stok</th>
                                                    <th class="text-center">price</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $i = 1;
                                                    foreach ($products as $value) {
                                                       
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo ($page+$i);?></td>
                                                    <td><?php echo $value['product_name'];?></td>
                                                    <td class="text-center"> 
                                                        <img src="<?php echo base_url('assets/img/product/'.$value['image']);?>" width="80px" height="80px">
                                                    </td>
                                                    <td><?php echo $value['size_type'];?></td>
                                                    <td><?php echo $value['stock_product'];?></td>
                                                    <td><?php echo $value['price'];?></td>
                                                    
                                                    <td>
                                                        <select name="status" class="form-control status-product">
                                                            <?php $selected_stock_promo = ($value['status'] == "Stok Promo") ? "selected": "";?>
                                                            <?php $selected_stock_baru = ($value['status'] == "Stok Baru") ? "selected": "";?>
                                                            <option id_product="<?php echo $value['id_product'];?>" id_detail_product="<?php echo $value['id_detail_product'];?>" <?php echo $selected_stock_promo;?> value="Stok Promo">Stok Promo</option>
                                                            <option id_product="<?php echo $value['id_product'];?>" id_detail_product="<?php echo $value['id_detail_product'];?>" <?php echo $selected_stock_baru;?> value="Stok Baru">Stok Baru</option>
                                                        </select>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?php echo site_url();?>index.php/Product_controller/detail/<?php echo $value['id_product'];?>/<?php echo $value['id_detail_product'];?>" class="btn bg-navy margin" type='button'><i class="fa fa-th"> Detail</i></a> 
                                                        <a href="<?php echo site_url();?>index.php/Product_controller/edit/<?php echo $value['id_product'];?>/<?php echo $value['id_detail_product'];?>" class="btn bg-purple margin" type='button'><i class='fa fa-edit'></i> Ubah </a>   
                                                    </td>
                                                </tr> 
                                                <?php $i++; } ?>  
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <?php echo $pagination; ?>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div> 
                </section><!-- /.content -->
            </aside><!-- /.right-side --> 


            <script>
                $( ".status-product" ).change(function(e) {
                    var id_product = $(this).find('option:selected').attr("id_product");
                    var id_detail_product = $(this).find('option:selected').attr("id_detail_product");
                    var value = $(this).find('option:selected').val();
                    
                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url("index.php/product_controller/update_status_product");?>',
                        data:{'id_product':id_product,'id_detail_product':id_detail_product,'value':value},
                        success:function(result) {
                            window.location.href = result;
                        }
                    });
                });
            </script>