<script type="text/javascript">
$(document).ready(function(){
  $('.pilih').on("change", function () {
    var val = this.value; 
      var tr = $(this).closest('tr');
        var id = tr.find("td:eq(1)").text(); 

        $.ajax({
          type: "POST",
          url: "<?php echo site_url().'index.php/Stock_controller/updStatusDetailProduct/' ?>",
          data : {"id": id , "val" : val},

           success: function (argument) {
            var kata = "Berhasil di Ubah";
           alert(kata); 
        } 
    });       
  });
}); 
</script>
<!-- Right side column. Contains the navbar and content of the page --> 
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Detail Produk
                        <small>(Product Details)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Jenis Produk</a></li>
                        <li class="active">Detail Produk</li>
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
                                    <h3 class="box-title">Detail Produk</h3>                             
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
                                                        <label>Nama Produk</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                         <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['product_name'];?></label>
                                                    </div>
                                                </div>
                                                <br /> 
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Kategori</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['product_category_name'];?></label>
                                                    </div>
                                                </div>
                                                <br /> 
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <label>Merek</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['brand_name'];?></label>
                                                    </div>
                                                </div>
                                                <br /> 
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Warna</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['color'];?></label>
                                                    </div>
                                                </div> 
                                                <br />
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['information'];?></label>
                                                    </div>
                                                </div> 
                                                <br />
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Size</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['size_type'];?></label>
                                                    </div>
                                                </div> 
                                                <br />
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Stock</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['stock_product'];?></label>
                                                    </div>
                                                </div> 
                                                <br />
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Price</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['price'];?></label>
                                                    </div>
                                                </div> 
                                                <br />
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label type="text" required="required" class="col-md-7 col-xs-12"><?php echo $product['status'];?></label>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- left end -->
                                            <!-- right start -->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <div class="col-md-4">
                                                        <img src="<?php echo base_url('assets/img/product/'.$product['image']);?>" width="160px" height="160px">
                                                    </div>
                                                    <div class="col-md-6">
                                                      
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        <!-- right end -->
                                    </div><!-- /.box-body -->


                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-3">
                                                    
                                                </div>

                                                <div class="col-md-9">
                                                    <!-- <button type="submit" class="btn btn-success pull-right" style="margin-right: 5px;">Simpan</button> -->

                                                    <a href="<?php echo $this->session->userdata('previous_url'); ?>"  class="btn btn-warning pull-right">Kembali</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left ) --> 
                         
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side-->


