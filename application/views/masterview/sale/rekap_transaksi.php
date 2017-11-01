<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Rekap Penjualan
                        <small>(Sales History)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Rekap Penjualan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- <a href="<?php echo site_url();?>index.php/User_controller/add" class="btn btn-info">Tambah</a>  -->
                            <div class="box" style="margin-top: 10px">
                                <div class="box-header">
                                    <h3 class="box-title">Rekap Data Penjualan</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div><!-- /.box-header --> 
                                <div class="box-body table-responsive">
                                    <?php
                                        $error_msg = $this->session->flashdata('error_msg');
                                        $success_msg = $this->session->flashdata('success_msg');
                                        if($error_msg != NULL){
                                    ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <?php echo $error_msg; ?>
                                            </div>
                                    <?php 
                                        }
                                        if ($success_msg != NULL) {
                                    ?>
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <?php echo $success_msg; ?>
                                            </div>
                                    <?php }?>
                                     
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">No Transaksi [J]</th>
                                                <th class="text-center">Customer</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Bank</th>
                                                <th class="text-center">Total Bayar</th>
                                                <th class="text-center">Pembayaran</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <tr>
                                                <td>1</td>
                                                <td>SALE180920170001</td>
                                                <td>Siska</td>
                                                <td>Jakal km 9</td>
                                                <td>
                                                    <div class="form-group"> 
                                                        <select class="form-control">
                                                            <option>BRI</option>
                                                            <option>BNI</option> 
                                                            <option>BCA</option> 
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>Rp 100.000,00</td>
                                                <td>
                                                    <div class="form-group"> 
                                                        <select class="form-control">
                                                            <option>Lunas</option>
                                                            <option>Belum Lunas</option> 
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group"> 
                                                        <select class="form-control">
                                                            <option>Keep</option>
                                                            <option>Pack</option>
                                                            <option>COD</option>
                                                            <option>Done</option> 
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url();?>index.php/Sale_controller/rekap_detail" class="btn bg-navy margin" type='button'><i class='fa fa-edit'></i> Detail </a>  
                                                </td>
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                     <!-- <?php echo $pagination; ?> -->
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side --> 