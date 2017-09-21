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
                        <li class="active"> Ubah User </li>
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
                                    <h3 class="box-title">Ubah User</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url('index.php/User_controller/update');?>" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama User</label>
                                            <input type="hidden" name="username" value="<?php echo $user['username'];?>">
                                            <input required="required" type="text" class="form-control" name="name" value="<?php echo $user['name'];?>" placeholder="Enter ..."/>
                                        </div>
                                        <p></p> 
                                        <div class="form-group ">
                                            <label>No. HP</label>
                                            <input type="text" required="required" class="form-control" name="phone_number" value="<?php echo $user['phone_number'];?>" placeholder="Enter ..."/>
                                        </div>
                                        <p></p>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea required="required" class="form-control" rows="3" name="address" placeholder="Enter ..."><?php echo $user['address'];?></textarea>
                                        </div>
                                        <p></p>
                                        <div class="form-group ">
                                            <label>Password</label>
                                            <input required="required" type="password" class="form-control" name="password" value="" placeholder="Password"/>
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <a href="<?php echo site_url();?>index.php/User_Controller/index/"  class="btn btn-warning">Batal</a>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left ) --> 
                         
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->