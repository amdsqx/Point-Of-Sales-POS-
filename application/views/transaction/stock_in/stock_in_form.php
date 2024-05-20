<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Stock In <small>Barang Masuk / Pembelian</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                    <li class="breadcrumb-item active">Transaction</li>
                    <li class="breadcrumb-item active">Stock In</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Stock In</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('stock/in')?>" class="btn btn-warning btn-flat">
                    <i class="fa-solid fa-rotate-left"></i>
                        Back
                    </a>
                </div>
              </div>
              <div class="box-body">
                <div class="text-center">
                    <br>
                    <?php //echo validation_errors(); ?>
                </div>
              <form role="form" action="<?=site_url('stock/process')?>" method="post">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date *</label>
                                <input type="date" class="form-control" name="date" value="<?=date('Y-m-d')?>" required>
                            </div>
                            
                            <div>
                                <label for="barcode">Barcode *</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" name="barcode" id="barcode" required autofocus>
                                <input type="hidden" name="item_id" id="item_id">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="item_name">Item Name *</label>
                                <input type="text" class="form-control" name="item_name" id="item_name"readonly>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="unit_name">Item Unit</label>
                                        <input type="text" name="unit_name" id="unit_name" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="stock">Initial Stock</label>
                                        <input type="text" name="stock" id="stock" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Detail *</label>
                                <input type="text" class="form-control" name="detail" placeholder="Kulakan / tambahan / etc" required>
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <select name="supplier" class="form-control">
                                    <option value="">- Pilih -</option>
                                    <?php foreach($supplier as $i => $data) {
                                        echo '<option value="'.$data->supplier_id.'">'.$data->name.'</option>';
                                    } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Qty *</label>
                                <input type="number" class="form-control" name="qty" required>
                            </div>             
                        </div>                      
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="reset" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Reset</button>
                    <button type="submit" name="in_add" class="btn btn-success"><i class="fa-regular fa-paper-plane"></i> Save</button>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>
 </div>
</section>

<div class="modal fade" id="modal-item">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header">
              <h4 class="modal-title">Select Product Item</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body table resposive">
                <!-- tabel -->
                <table class="table table-bordered table-hover" id="example1">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($item as $i => $data) { ?>
                        <tr>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->unit_name?></td>
                            <td style="text-align:right;"><?=indo_currency($data->price)?></td>
                            <td style="text-align:right;"><?=$data->stock?></td>
                            <td style="text-align:center;">
                                <button class="btn btn-xs btn-info" id="select" 
                                    data-id="<?=$data->item_id?>"
                                    data-barcode="<?=$data->barcode?>"
                                    data-name="<?=$data->name?>"
                                    data-unit="<?=$data->unit_name?>"
                                    data-stock="<?=$data->stock?>">
                                    <i class="fa fa-check"></i> Select
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- tabel -->
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var item_id = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit');
            var stock = $(this).data('stock');
            $('#item_id').val(item_id);
            $('#barcode').val(barcode);
            $('#item_name').val(name);
            $('#unit_name').val(unit_name);
            $('#stock').val(stock);
            $('#modal-item').modal('hide');
        });
    });
</script>