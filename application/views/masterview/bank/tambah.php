            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data Bank
                        <small>(Bank)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#">Bank</a></li>
                        <li class="active"> Tambah Bank </li>
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
                                    <h3 class="box-title">Tambah Bank</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url('index.php/Bank_controller/save');?>" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Nama Bank</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="bank_name" class="form-control" placeholder="Nama bank"/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>No. Rekening</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="account_number" class="form-control" placeholder="No rekening"/>
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

                                                    <a href="<?php echo site_url();?>index.php/Bank_Controller/index/"  class="btn btn-warning pull-left">Batal</a>
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