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
<script>
    //change image when the product is change
    $(document).ready(function(){
        $("#id_detail_product").change(function(){
            var price = $("#id_detail_product option:selected").attr('price');
            var stock = $("#id_detail_product option:selected").attr('stock');
            $("#price").val(price);
            $("#stock").val(stock);
            $("#quantity").val(1);
            $("#quantity").attr("max", stock);

        });
    });
</script>