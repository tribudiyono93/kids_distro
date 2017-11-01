<div class="form-group">
    <div class="col-md-3">
        <label>Ukuran</label>
    </div>
    <div class="col-sm-6">
        <select id="id_detail_product" name="id_detail_product" class="form-control">
            <?php foreach($detail_products as $value) {?>
                <option price="<?php echo $value['price'];?>" stock="<?php echo $value['stock_product'];?>"  value="<?php echo $value['id_detail_product'];?>" size_type="<?php echo $value['size_type'];?>"><?php echo $value['size_type'];?></option>
            <?php } ?>
        </select>
    </div>
</div> 
<br /> <br />
<div class="form-group ">
    <div class="col-md-3">
        <label>Harga</label>
    </div>
    <div class="col-md-6">
        <input id="price" type="text" class="form-control" readonly="readonly" value="<?php echo $detail_products[0]['price'];?>" placeholder="" disabled/>
    </div>
</div>  
<br /> <br />
<div class="form-group ">
    <div class="col-md-3">
        <label>Stok</label>
    </div>
    <div class="col-md-6">
        <input id="stock" type="text" readonly="readonly" value="<?php echo $detail_products[0]['stock_product'];?>" class="form-control" placeholder="1"/>
    </div>
</div> 
<br /> <br />
<div class="form-group ">
    <div class="col-md-3">
        <label>Jumlah Barang</label>
    </div>
    <div class="col-md-6">
        <input id="quantity" name="quantity" type="number" min="1" max="<?php echo $detail_products[0]['stock_product'];?>" value="1" class="form-control" placeholder="1"/>
    </div>
</div> 

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