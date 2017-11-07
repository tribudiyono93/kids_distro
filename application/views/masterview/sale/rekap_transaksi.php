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
                                                <!-- <th class="text-center">Bank</th> -->
                                                <th class="text-center">Total Bayar</th>
                                                <th class="text-center">Pembayaran</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <?php
                                                $i = 1;
                                                foreach ($sales as $value) {
                                                   
                                            ?>
                                            <tr>
                                                <td><?php echo ($page+$i);?></td>
                                                <td><?php echo $value['id_sale_transaction'];?></td>
                                                <td><?php echo $value['customer_name'];?></td>
                                                <td><?php echo $value['address'];?></td>
                                                <!-- <td><?php //echo $value['bank_name'];?></td> -->
                                                <td>Rp <?php echo number_format($value['tot_price'],0,',','.');?></td>
                                                <td>
                                                    <select id="payment_options" name="payment_options" class="form-control payment_options-sale">
                                                            <?php $selected_belum_lunas = ($value['payment_options'] == "Belum Lunas") ? "selected": "";?>
                                                            <?php $selected_lunas       = ($value['payment_options'] == "Lunas") ? "selected": "";?>
                                                            <option id_sale_transaction="<?php echo $value['id_sale_transaction'];?>" <?php echo $selected_belum_lunas;?> value="Belum Lunas">Belum Lunas</option>
                                                            <option id_sale_transaction="<?php echo $value['id_sale_transaction'];?>" <?php echo $selected_lunas;?> value="Lunas">Lunas</option>
                                                    </select> 
                                                </td>
                                                <td>
                                                    <select id="sale_options" name="sale_options" class="form-control sale_options-sale">
                                                            <?php $selected_keep   = ($value['sale_options'] == "Keep") ? "selected": "";?>
                                                            <?php $selected_pack   = ($value['sale_options'] == "Pack") ? "selected": "";?>
                                                            <?php $selected_done   = ($value['sale_options'] == "Done") ? "selected": "";?>
                                                            <?php $selected_cod    = ($value['sale_options'] == "COD") ? "selected": "";?>
                                                            <?php $selected_cancel = ($value['sale_options'] == "Cancel") ? "selected": "";?>
                                                            <option id_sale_transaction="<?php echo $value['id_sale_transaction'];?>" <?php echo $selected_keep;?> value="Keep">Keep</option>
                                                            <option id_sale_transaction="<?php echo $value['id_sale_transaction'];?>" <?php echo $selected_pack;?> value="Pack">Pack</option>
                                                            <option id_sale_transaction="<?php echo $value['id_sale_transaction'];?>" <?php echo $selected_done;?> value="Done">Done</option>
                                                            <option id_sale_transaction="<?php echo $value['id_sale_transaction'];?>" <?php echo $selected_cod;?> value="COD">COD</option>
                                                            <option id_sale_transaction="<?php echo $value['id_sale_transaction'];?>" <?php echo $selected_cancel;?> value="Cancel">Cancel</option>
                                                    </select>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url('index.php/Sale_controller/rekap_detail/'.$value['id_sale_transaction']);?>" class="btn bg-navy margin" type='button'><i class='fa fa-th'></i> Detail </a>  
                                                    <a href="<?php echo site_url('index.php/Sale_controller/edit_sale/'.$value['id_sale_transaction']);?>" class="btn bg-purple margin" type='button'><i class='fa fa-edit'></i> Ubah <i style="color:#ff0000">*</i> </a>  
                                                </td>
                                            </tr> 
                                            <?php $i++; } ?>  
                                        </tbody>
                                    </table>
                                    <p class="active" style="color:#ff0000">* Catatan : Data yang boleh diubah hanya data pemesan bukan item yang dibeli.</p>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                     <?php echo $pagination; ?>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side --> 

            <script>
                $( ".payment_options-sale" ).change(function(e) {
                    var id_sale_transaction = $(this).find('option:selected').attr("id_sale_transaction"); 
                    var value = $(this).find('option:selected').val(); 

                   /* console.log(id_sale_transaction);
                    console.log(value);*/
                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url("index.php/Sale_controller/update_payment_options");?>',
                        data:{'id_sale_transaction':id_sale_transaction,'value':value},
                        success:function(result) {
                            window.location.href = result;
                        }
                    });
                });
            </script>

            <script>
                $( ".sale_options-sale" ).change(function(e) {
                    var id_sale_transaction = $(this).find('option:selected').attr("id_sale_transaction"); 
                    var value = $(this).find('option:selected').val();
                    
                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url("index.php/Sale_controller/update_sale_options");?>',
                        data:{'id_sale_transaction':id_sale_transaction,'value':value},
                        success:function(result) {
                            window.location.href = result;
                        }
                    });
                });
            </script>