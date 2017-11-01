            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Transaksi Penjualan
                        <small>(Sale Transaction)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Penjualan</a></li>
                        <!-- <li><a href="#">Stok</a></li> -->
                        <li class="active"> Tambah Transaksi Penjualan </li>
                    </ol>
                </section>
                <div class="text-right image">
                    <a href="<?php echo site_url();?>index.php/Sale_controller/index" class="btn btn-warning"><i class="fa fa-reply-all">  Kembali</i></a>   
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-success">
                                <div class="box-header ">
                                    <h3 class="box-title text-center">Transaksi Penjualan</h3>
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
                                                        <label>Id Transaksi Penjualan</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" value="<?php echo $id_sale_transaction;?>" name="id_sale_transaction" readonly="readonly" />
                                                    </div>
                                                </div> 
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Nama Customer</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="customer_name" type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>No HP</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="phone_number" type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br /> 
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Alamat</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea name="address" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
                                                    </div>
                                                </div>
                                                <br /> <br /> <br /> <br /> 
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Pembayaran</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="paymnet_options" class="form-control">
                                                            <option value="Lunas">Lunas</option>
                                                            <option value="Belum Lunas">Belum Lunas</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <br /> <br /> 
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="sale_options" class="form-control">
                                                            <option value="Keep">Keep</option>
                                                            <option value="Pack">Pack</option> 
                                                            <option value="Done">Done</option> 
                                                            <option value="COD">COD</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <br /> <br /> 
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Bank</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="id_bank" class="form-control">
                                                            <?php foreach($banks as $value) {?>
                                                                <option value="<?php echo $value['id_bank'];?>"><?php echo $value['bank_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Ongkir</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label>Total Bayar</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                </div>
                                                <br /> <br />  

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
                                                <div class="form-group">
                                                    <button id="add_to_temp_transaction" class="btn btn-info" type="button">Add Barang</button>
                                                </div>
                                                <p></p>
                                                <div id="add_product_container">
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <label>Nama Produk</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="id_product" name="id_product" class="form-control">
                                                                <?php foreach($products as $value) {?>
                                                                    <option image="<?php echo $value['image']?>" value="<?php echo $value['id_product'];?>" product_name="<?php echo $value['product_name'];?>"><?php echo $value['product_name'];?></option>
                                                                <?php } ?> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <img id="product_image" src="<?php echo base_url('assets/img/product/'.$products[0]['image']);?>" width="80px" height="80px">
                                                    <br /> <br />
                                                    <div id="first_fill_in">
                                                        <div class="form-group">
                                                            <div class="col-md-3">
                                                                <label>Ukuran</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select name="id_detail_product" class="form-control">
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
                                                                <label>Harga</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input name="price" type="text" class="form-control" placeholder="Rp. 35.000" disabled/>
                                                            </div>
                                                        </div>  
                                                        <br /> <br />
                                                        <div class="form-group ">
                                                            <div class="col-md-3">
                                                                <label>Stok</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input name="stock_product" type="text" class="form-control" placeholder="1"/>
                                                            </div>
                                                        </div>
                                                        <br /> <br />
                                                        <div class="form-group ">
                                                            <div class="col-md-3">
                                                                <label>Jumlah Barang</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="number" min="1" value="1" class="form-control" placeholder="1"/>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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

                                        <div id="temp_transaction_table">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Produk</th> 
                                                        <th class="text-center">Gambar</th>
                                                        <th class="text-center">Ukuran</th>  
                                                        <th class="text-center">Jumlah Barang</th>  
                                                        <th class="text-center">Harga</th>  
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;?>
                                                    <?php foreach ($temp_transactions as $value) {?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $i;?></td> 
                                                            <td class="text-center"><?php echo $value['product_name'];?></td>
                                                            <td class="text-center">
                                                                <img src="<?php echo base_url('assets/img/product/'.$value['image']);?>" width="80px" height="80px">
                                                            </td>
                                                            <td class="text-center"><?php echo $value['size_type'];?></td>
                                                            <td class="text-center"><?php echo $value['quantity'];?></td>
                                                            <td class="text-center"><?php echo $value['quantity'] * $value['price'];?></td>
                                                            <td class="text-center">
                                                                <a href="" id_temp_transaction="<?php echo $value['id'];?>" class="btn bg-orange margin delete-temp-transaction" type='button'><i class='fa fa-eraser'></i> Hapus </a> 
                                                            </td>
                                                        </tr>  
                                                    <?php $i++; } ?>
                                                </tbody>
                                            </table>
                                        </div>

                                     </div><!-- /.box-body -->



                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-md-12"> 
                                                <div class="col-md-12">  
                                                    <a href="<?php echo site_url();?>index.php/Sale_Controller/proses_trans"  class="btn bg-navy pull-right">Proses Transaksi</a>
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

            <script>
                //fill option size and price
                $(document).ready(function(){
                    var id_product = $("#id_product option:selected").val();
                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url("index.php/sale_controller/get_detail_product_by_id_product/"); ?>' + id_product,
                        success:function(result){
                            $('#first_fill_in').html(result);
                        }
                    });
                });
            </script>

            <script>
                //change image when the product is change
                $(document).ready(function(){
                    $("#id_product").change(function(){
                        var image = $("#id_product option:selected").attr('image');
                        var image_url = "<?php echo base_url('assets/img/product/');?>";
                        $("#product_image").attr("src",image_url+image);
                        var id_product = $("#id_product option:selected").val();
                        $.ajax({
                            type:'POST',
                            url:'<?php echo base_url("index.php/sale_controller/get_detail_product_by_id_product/"); ?>' + id_product,
                            success:function(result){
                                $('#first_fill_in').html(result);
                            }
                        });
                    });
                });
            </script>

            <!-- add product, product detail and size to temporary transaction -->
            <script>
            $(document).ready(function(){
                $("#add_to_temp_transaction").click(function(){
                    var id_product = $("#id_product option:selected").val();
                    var id_detail_product = $("#id_detail_product option:selected").val();
                    var quantity = $("#quantity").val();

                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url("index.php/sale_controller/add_temp_transaction");?>',
                        data:{'id_product':id_product,'id_detail_product':id_detail_product,'quantity':quantity},
                        success:function(result) {
                            $('#add_product_container').html(result);
                        }
                    });

                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url('index.php/sale_controller/load_temp_transaction_table');?>',
                        success:function(result) {
                            $('#temp_transaction_table').html(result);
                        }
                    });

                    /*console.log("id product:" + id_product + ", id detail product :" + id_detail_product + ", quantity : " + quantity);*/
                });
            });
            </script>

            <script>
                $(".delete-temp-transaction").click(function(){
                    confirm("apakah anda yakin ?");
                    if (confirm) {
                        var id_temp_transaction = $(this).attr('id_temp_transaction');
                        $.ajax({
                            type:'POST',
                            url:'<?php echo base_url("index.php/sale_controller/delete_temp_transaction_by_id/"); ?>' + id_temp_transaction,
                            success:function(result){
                                $('#temp_transaction_table').html(result);
                            }
                        });
                    }
                });
            </script>