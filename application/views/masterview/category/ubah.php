<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data Kategori Produk
                        <small>(Product Category)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#">Kategori Produk</a></li>
                        <li class="active"> Ubah Kategori Produk </li>
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
                                    <h3 class="box-title">Ubah Kategori Produk</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url('index.php/Category_controller/update');?>" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                               <!--  <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id Kategori Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                    </div>
                                                </div>
                                                <br /> <br /> -->
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Nama Kategori Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="id_product_category" value="<?php echo $category['id_product_category'];?>"/>
                                                        <input type="text" name="product_category_name" value="<?php echo $category['product_category_name'];?>" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div> 
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="description" placeholder="Enter ..."><?php echo $category['description'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-md-9">

                                                <div class="col-md-3">
                                                    
                                                </div>

                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-success pull-left" style="margin-right: 5px;">Simpan</button>

                                                    <a href="<?php echo site_url();?>index.php/Category_Controller/index/"  class="btn btn-warning pull-left">Batal</a>
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