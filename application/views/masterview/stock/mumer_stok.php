<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Stok Mumer
                        <small>(Murah Meriah)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Stok Mumer</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- <a href="<?php echo site_url();?>index.php/Stock_controller/add" class="btn btn-info">Tambah Stok</a>  -->
                            <div class="box" style="margin-top: 10px">
                                <div class="box-header">
                                    <h3 class="box-title">Stok Mumer</h3>
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
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kategori-Produk</th> 
                                                <th class="text-center">Merek-Warna</th>
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center">Ukuran</th>  
                                                <th class="text-center">Stok</th>  
                                                <th class="text-center">Harga</th>  
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">Baju Anak Cewek-Lengan Panjang</td> 
                                                <td class="text-center">CARTER-Merah</td>
                                                <td class="text-center">
                                                    <img src="<?php echo base_url('assets/img/avatar6.png');?>" width="80px" height="80px">
                                                </td>
                                                <td class="text-center">2L</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">Rp. 35.000</td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url();?>index.php/Stock_controller/edit" class="btn bg-maroon margin" type='button'><i class='fa fa-edit'></i> Ubah </a>  
                                                </td>
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side --> 