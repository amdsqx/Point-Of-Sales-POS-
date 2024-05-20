<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Stock Out <small>Barang Keluar / Kerusakan</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                    <li class="breadcrumb-item active">Transaction</li>
                    <li class="breadcrumb-item active">Stock Out</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">
    <?php $this->view('messages')?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Stock Out</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('stock/out/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa-solid fa-user-plus"></i>
                        Add Stock Out
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Barcode</th>
                    <th>Product Item</th>
                    <th>Qty</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach($row as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$data->barcode?></td>
                        <td><?=$data->item_name?></td>
                        <td class="text-right"><?=$data->qty?></td>
                        <td class="text-center"><?=indo_date($data->date)?></td>
                        <td class="text-center" width= "160px">
                          <form>
                              <a id="set_dtl" class="btn btn-default btn-xs" 
                                    data-toggle="modal" data-target="#modal-detail"
                                    data-barcode="<?=$data->barcode?>"
                                    data-itemname="<?=$data->item_name?>"
                                    data-detail="<?=$data->detail?>"
                                    data-suppliername="<?=$data->supplier_name?>"
                                    data-qty="<?=$data->qty?>"
                                    data-date="<?=indo_date($data->date)?>">
                                  <i class="fa-solid fa-eye"></i>
                                   Details
                              </a>
                              <a href="<?=site_url('stock/out/del/'.$data->stock_id.'/'.$data->item_id)?>" onclick="return confirm('Apakah Anda yakin hapus data?')" class="btn btn-danger btn-xs">
                                  <i class="fa-solid fa-trash-can"></i>
                                   Delete
                              </a>
                          </form>
                        </td>
                    </tr>
                    <?php
                    } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
          <div class="modal-content" >
            <div class="modal-header">
              <h4 class="modal-title">Stock Out Detail</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body table resposive">
                <!-- tabel -->
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="width:35%">Barcode</th>
                            <td><span id="barcode"></span></td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><span id="detail"></span></td>
                        </tr>
                        <tr>
                            <th>Supplier Name</th>
                            <td><span id="supplier_name"></span></td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td><span id="qty"></span></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><span id="date"></span></td>
                        </tr>
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
        $(document).on('click', '#set_dtl', function() {
            var barcode = $(this).data('barcode');
            var itemname = $(this).data('itemname');
            var detail = $(this).data('detail');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');
            $('#barcode').text(barcode);
            $('#item_name').text(itemname);
            $('#detail').text(detail);
            $('#supplier_name').text(suppliername);
            $('#qty').text(qty);
            $('#date').text(date);
        });
    });
</script>