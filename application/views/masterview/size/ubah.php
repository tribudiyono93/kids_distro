<!--Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data Ukuran Produk
                        <small>(Product Size)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#">Ukuran Produk</a></li>
                        <li class="active"> Ubah Ukuran Produk </li>
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
                                    <h3 class="box-title">Ubah Ukuran Produk</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url('index.php/Size_controller/update');?>" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <!-- <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id Ukuran Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                    </div>
                                                </div>
                                                <br /> <br /> -->
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Jenis Ukuran Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="id_size" value="<?php echo $size['id_size'];?>"/>
                                                        <input type="text" name="size_type" value="<?php echo $size['size_type'];?>" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div> 
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="information" rows="3" placeholder="Enter ..."><?php echo $size['information'];?></textarea>
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

                                                    <a href="<?php echo site_url();?>index.php/Size_Controller/index/"  class="btn btn-warning pull-left">Batal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left ) --> 
                         
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side