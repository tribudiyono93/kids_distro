<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Stok Mumer
                        <small>(Murah Meriah)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Stok Mumer</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12"> 
                            <div class="box" style="margin-top: 10px">
                                <div class="box-header">
                                    <h3 class="box-title">Stok Produk Promo</h3>
                                    <div class="box-tools">
                                        <form role="form" action="<?php echo base_url('index.php/Stock_controller/search');?>" method="POST">
                                            <div class="input-group">
                                                <input type="text" name="keyword" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Ukuran"/>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th> 
                                                <th class="text-center">Merek-Warna-Produk</th>
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center">Ukuran</th>  
                                                <th class="text-center">Stok</th>  
                                                <th class="text-center">Status</th>  
                                                <th class="text-center">Harga</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                $i = 1;
                                                foreach ($product_details as $value) { 
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo ($page+$i);?></td>  
                                                <td class="text-center"><?php echo $value['id_brand'];?> - <?php echo $value['color'];?> - <?php echo $value['product_name'];?> </td> 
                                                <td class="text-center">
                                                    <img src="<?php echo base_url('assets/img/product/'.$value['image']);?>" width="80px" height="80px">
                                                </td>
                                                <td class="text-center"><?php echo $value['size_type'];?></td>
                                                <td class="text-center"><?php echo $value['stock_product'];?></td>
                                                <td class="text-center"><?php echo $value['status'];?></td> 
                                                <td class="text-center">Rp. <?php echo $value['price'];?></td> 
                                            </tr> 
                                            <?php $i++; } ?>   
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <?php echo $pagination; ?>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div> 
                </section><!-- /.content -->
            </aside><!-- /.right-side --> 