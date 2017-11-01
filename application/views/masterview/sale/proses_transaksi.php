<!-- Right side column. Contains the navbar and content of the page --> 
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Transaksi Penjualan
                        <small>(Sales Transaction)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Detail Transaksi Penjualan</li>
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
                                    <h3 class="box-title">Detail Transaksi Penjualan</h3>                             
                                </div>
                                <!-- /.box-header --> 
                                
                                <!-- form start -->
                                <form role="form" action="#">
                                    <div class="box-body">
                                        <div class="row">
                                        <!-- left start -->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>No Transaksi[S]</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                         <label type="text" required="required" class="col-md-7 col-xs-12">SALE180920170001</label>
                                                    </div>
                                                </div>
                                                <br /> 
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Customer</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12">Siska</label>
                                                    </div>
                                                </div>
                                                <br /> 
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <label>No HP</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12">0812345678910</label>
                                                    </div>
                                                </div>
                                                <br /> 
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Alamat</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12">Jakal KM 9</label>
                                                    </div>
                                                </div>  
                                            </div>
                                            <!-- left end -->
                                            <!-- right start -->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <!-- <label>No Transakai</label> -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- <label type="text" required="required" class="col-md-7 col-xs-12"> </label> -->
                                                    </div>
                                                </div>
                                                <br />  
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Pembayaran</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <label type="text" required="required" class="col-md-7 col-xs-12">Lunas</label>
                                                    </div>
                                                </div>
                                                <br />  
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12">Keep</label>
                                                    </div>
                                                </div>
                                                <br />  
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Bank</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12">BRI</label>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- right end -->
                                    </div><!-- /.box-body -->
  
                                    <!-- GARIS -->
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 class="page-header">
                                                <!-- <i class="fa fa-globe"></i> AdminLTE, Inc. -->
                                                <!-- <small class="pull-right">Date: 2/10/2014</small> -->
                                            </h2>                            
                                        </div><!-- /.col -->  
                                        <div class="col-xs-12">
                                            <h2 class="page-header">
                                                <i class="fa fa-globe"></i> Rincian Pesanan
                                                <!-- <small class="pull-right">Date: 2/10/2014</small> -->
                                            </h2>                            
                                        </div><!-- /.col -->

                                    </div>
                                    <!-- END GARIS --> 

                                    <!-- tabel -->
                                    <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Id Pesanan</th>
                                                <th class="text-center">Produk</th> 
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center">Ukuran</th>  
                                                <th class="text-center">Jumlah Barang</th>  
                                                <th class="text-center">Harga</th>       
                                                <th class="text-center">Total</th>       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">P20171031001</td> 
                                                <td class="text-center">CARTER-Merah</td>
                                                <td class="text-center">
                                                    <img src="<?php echo base_url('assets/img/avatar6.png');?>" width="80px" height="80px">
                                                </td>
                                                <td class="text-center">2L</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">Rp. 35.000</td>
                                                <td class="text-center">Rp. 70.000</td>
                                            </tr>    
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- tabel -->

                                    <!-- GARIS -->
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 class="page-header">
                                                <!-- <i class="fa fa-globe"></i> AdminLTE, Inc. -->
                                                <!-- <small class="pull-right">Date: 2/10/2014</small> -->
                                            </h2>                            
                                        </div><!-- /.col -->
                                    </div>
                                    <!-- END GARIS -->

                                    <!-- right start --> 
                                    <div class="col-md-6">   
                                        <div class="form-group ">
                                            <div class="col-md-4">
                                                <label>Ongkir</label>
                                            </div>
                                            <div class="col-md-6">
                                              <label type="text" required="required" class="col-md-7 col-xs-12">Rp 10.000</label>
                                          </div>
                                        </div>
                                        <br />  
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label>Total Harga</label>
                                            </div>
                                        <div class="col-md-6">
                                            <label type="text" required="required" class="col-md-7 col-xs-12">Rp 105.000</label>
                                        </div>
                                        </div>
                                        <br />  
                                        <div class="form-group ">
                                            <div class="col-md-4">
                                                <label>Total Bayar</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label type="text" required="required" class="col-md-7 col-xs-12">Rp 100.000</label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="form-group ">
                                            <div class="col-md-4">
                                                <label>Total Keseluruhan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label type="text" required="required" class="col-md-7 col-xs-12">Rp. 110.000</label>
                                            </div>
                                        </div> 
                                    </div>
                            
                            <!-- right end -->

                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-3">
                                                    
                                                </div>

                                                <div class="col-md-9">
                                                    <!-- <button type="submit" class="btn btn-success pull-right" style="margin-right: 5px;">Simpan</button> -->

                                                    <a href="<?php echo site_url();?>index.php/Sale_controller/rekap_index/"  class="btn btn-warning pull-right">Cetak</a>
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