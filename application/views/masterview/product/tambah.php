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
                        <li class="active"> Tambah Jenis Produk </li>
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
                                    <h3 class="box-title">Tambah Jenis Produk</h3>
                                </div><!-- /.box-header -->
                                
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id | Kategori</label>
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
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id | Merek</label>
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
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Nama Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Warna</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3"> 
                                                        <label for="exampleInputFile">File Gambar</label> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="file" id="exampleInputFile">
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
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

                                                    <a href="<?php echo site_url();?>index.php/Product_Controller/index/"  class="btn btn-warning pull-left">Batal</a>
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