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
                                <form role="form" action="<?php echo base_url('index.php/product_controller/store');?>" method="POST" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Id Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="id_product" value="<?php echo $product_code;?>" readonly="readonly" class="form-control" placeholder="Enter ..."/>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Kategori</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="id_product_category" class="form-control">
                                                            <?php foreach($categories as $row) {?>
                                                                <option value="<?php echo $row['id_product_category'];?>"><?php echo $row['product_category_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>  
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Merek</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="id_brand" class="form-control">
                                                            <?php foreach($brands as $row) {?>
                                                                <option value="<?php echo $row['id_brand'];?>"><?php echo $row['brand_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Nama Produk</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="product_name" required="required" type="text" class="form-control" placeholder="product name"/>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Warna</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="color" required="required" type="text" class="form-control" placeholder="product color"/>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3"> 
                                                        <label for="exampleInputFile">File Gambar</label> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="file" name="image">
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="information" rows="3" placeholder="Enter ...">-</textarea>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <br /> <br />
                                                <div class="form-group">
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-6">
                                                        <a class="btn btn-sm btn-primary" id="add_field_button">Add More Fields</a>    
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                                <br /> <br />
                                                <div id="input_fields_wrap">
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <label>Stok</label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <select name="id_size[]" class="form-control">
                                                                <?php foreach($sizes as $row) {?>
                                                                    <option value="<?php echo $row['id_size'];?>"><?php echo $row['size_type'];?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input name="stock_product[]" required="required" type="number" value="1" class="form-control" min="1" placeholder="stok"/>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input name="price[]" required="required" type="number" class="form-control" placeholder="price"/>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <select name="status[]" class="form-control">
                                                                <option value="Stok Promo">Stok Promo</option>
                                                                <option value="Stok Baru">Stok Baru</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-1">

                                                        </div>
                                                    </div>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-3">
                                                    
                                                </div>

                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-success pull-left" style="margin-right: 5px;">Simpan</button>

                                                    <a href="<?php echo site_url();?>index.php/Product_Controller/index/"  class="btn btn-warning pull-left">Batal</a>
                                                </div>
                                                <div class="col-md-2">

                                                    </div>
                                                <div class="col-md-1">

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

            <script type="text/javascript">
                $(document).ready(function(){
                    var wrapper         = $('#input_fields_wrap'); //Fields wrapper
                    var add_button      = $('#add_field_button'); //Add button ID
                    
                    var x = 1; //initlal text box count
                    $(add_button).click(function(e){ //on add input button click
                        e.preventDefault();
                        $.ajax({
                            url: "get_new_input_form",
                            cache: false,
                            success: function(data) {
                                $(wrapper).append(data);
                            }
                        });
                    });
                    
                    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                        e.preventDefault(); $(this).parent().parent().parent().remove(); x--;
                    })
                });
            </script>