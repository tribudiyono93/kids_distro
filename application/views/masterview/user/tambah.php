<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data User
                        <small>(Admin)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#">User</a></li>
                        <li class="active"> Tambah User </li>
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
                                    <h3 class="box-title">Tambah User</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url('index.php/User_controller/save');?>" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="username" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="password" name="password" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Nama User</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="name" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>No. HP</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="phone_number" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Alamat</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."></textarea>
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

                                                    <a href="<?php echo site_url();?>index.php/User_controller/index/"  class="btn btn-warning pull-left">Batal</a>
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