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
                        <li><a href="#">Data</a></li>
                        <li><a href="#">Merek</a></li>
                        <li class="active"> Tambah Merek </li>
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
                                    <h3 class="box-title">Tambah Merek</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url('index.php/Brand_controller/save');?>" method="POST">
                                    <div class="box-body">

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Id Brand</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="id_brand" class="form-control" placeholder="ID Brand"/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Brand Name</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="brand_name" class="form-control" placeholder="Brand Name"/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Descriptions</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="description" rows="4" placeholder="Descriptions"></textarea>
                                                    </div>
                                                </div>
                                                <br /> <br />
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

                                                    <a href="<?php echo site_url();?>/Brand_Controller/index/"  class="btn btn-warning pull-left">Batal</a>
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