            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Stok Produk
                        <small>(Product Stock)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#">Stok</a></li>
                        <li class="active"> Tambah Stok Produk </li>
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
                                    <h3 class="box-title">Tambah Stok Produk</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <!-- <div class="col-md-6">
                                    
                                </div> -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id Detail Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div> 
                                                 <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id | Nama Produk</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control">
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <img src="<?php echo base_url('assets/img/avatar6.png');?>" width="80px" height="80px">
                                                 <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id | Jenis Ukuran</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control">
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Nama Detail Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Jumlah Stok</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control">
                                                            <option>Baru</option>
                                                            <option>Sale</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Harga</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
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

                                                    <a href="<?php echo site_url();?>index.php/Stock_Controller/index/"  class="btn btn-warning pull-left">Batal</a>
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