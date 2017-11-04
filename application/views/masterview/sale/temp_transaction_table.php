<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Produk</th> 
            <th class="text-center">Gambar</th>
            <th class="text-center">Ukuran</th>  
            <th class="text-center">Jumlah Barang</th>  
            <th class="text-center">Harga</th>
            <th class="text-center">Sub Total</th>  
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; $total_amount=0;?>
        <?php foreach ($temp_transactions as $value) {
            $total_amount = $total_amount + ($value['quantity'] * $value['price']);?>
            <tr>
                <td class="text-center"><?php echo $i;?></td> 
                <td class="text-center"><?php echo $value['product_name'];?></td>
                <td class="text-center">
                    <img src="<?php echo base_url('assets/img/product/'.$value['image']);?>" width="80px" height="80px">
                </td>
                <td class="text-center"><?php echo $value['size_type'];?></td>
                <td class="text-center"><?php echo $value['quantity'];?></td>
                <td class="text-center"><?php echo $value['price'];?></td>
                <td class="text-center"><?php echo $value['quantity'] * $value['price'];?></td>
                <td class="text-center">
                    <a href="" class="btn bg-orange margin delete-temp-transaction" type='button'><i class='fa fa-eraser'></i> Hapus </a> 
                </td>
            </tr>  
        <?php $i++; } ?>
        <tr>
            <td colspan="6" class="text-right">Total Bayar : </td>
            <td><input type="number" name="tot_price" value="<?php echo $total_amount;?>" required="required" class="form-control" /></td>\
            <td></td>
        </tr>
    </tbody>
</table>

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