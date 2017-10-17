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
                        <li><a href="#">Jenis</a></li>
                        <li><a href="#">Produk</a></li>
                        <li class="active"> Ubah Jenis Produk </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Produk</h3>
                                </div><!-- /.box-header -->
                                
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url('index.php/product_controller/update');?>" method="POST" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="id_product" readonly="readonly" class="form-control" value="<?php echo $product['id_product'];?>" placeholder="Enter ..."/>
                                                        <input type="hidden" name="id_detail_product" class="form-control" value="<?php echo $product['id_detail_product'];?>" />
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Kategori</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="id_product_category" class="form-control">
                                                            <?php foreach($categories as $row) {?>
                                                                 <?php $selected = ($product['id_product_category'] == $row['id_product_category']) ? "selected" : "";?>
                                                                <option <?php echo $selected; ?> value="<?php echo $row['id_product_category'];?>"><?php echo $row['product_category_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>  
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Merek</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="id_brand" class="form-control">
                                                            <?php foreach($brands as $row) {?>
                                                                <?php $selected = ($product['id_brand'] == $row['id_brand']) ? "selected" : "";?>
                                                                <option <?php echo $selected; ?> value="<?php echo $row['id_brand'];?>"><?php echo $row['brand_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Nama Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="product_name" required="required" type="text" class="form-control" value="<?php echo $product['product_name'];?>" placeholder="product name"/>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Warna</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="color" required="required" value="<?php echo $product['color'];?>" type="text" class="form-control" placeholder="product color"/>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3"> 
                                                        <label for="exampleInputFile">File Gambar</label> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="file" name="image">
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Size</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select name="id_size" class="form-control">
                                                            <?php foreach($sizes as $row) {?>
                                                                <option value="<?php echo $row['id_size'];?>"><?php echo $row['size_type'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Stock</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="stock_product" required="required" type="number" value="<?php echo $product['stock_product'];?>" class="form-control" min="1" placeholder="stok"/>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Harga</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="price" required="required" type="number" class="form-control" placeholder="price" value="<?php echo $product['price'];?>" />
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php $selected_stok_promo = ($product['status'] == "Stok Promo") ? "selected" : "";?>
                                                            <?php $selected_stok_baru = ($product['status'] == "Stok Baru") ? "selected" : "";?>
                                                        <select name="status" class="form-control">
                                                            <option <?php echo $selected_stok_promo; ?> value="Stok Promo">Stok Promo</option>
                                                            <option <?php echo $selected_stok_baru;?> value="Stok Baru">Stok Baru</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="information" rows="3" placeholder="Enter ..."><?php echo $product['information'];?></textarea>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-3">
                                                    
                                                </div>

                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-success pull-left" style="margin-right: 5px;">Simpan</button>

                                                    <a href="<?php echo $this->session->userdata('previous_url'); ?>"  class="btn btn-warning pull-left">Batal</a>
                                                </div>
                                                <div class="col-md-2">

                                                    </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left ) --> 
                         
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->