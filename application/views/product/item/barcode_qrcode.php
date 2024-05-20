<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Items <small>Data Barang</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                <li class="breadcrumb-item active">Items</li>
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
                <h3 class="card-title">Barcode Generator</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat">
                    <i class="fa-solid fa-rotate-left"></i>
                        Back
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Barcode Generator  <i class="fa-solid fa-barcode"></i></th>
                  </tr>
                  </thead>
                  <tbody>
                    <td>
                        <?php
                        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '"style="width:200px">';?>
                        <br>
                        <?=$row->barcode?>
                        <br> <br>
                        <a href="<?=site_url('item/barcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-sm">
                            <i class="fa-solid fa-print"></i>
                                Print
                        </a>
                    </td>
                  </tbody>
                </table>
              </div>

              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>QR-Code Generator <i class="fa-solid fa-qrcode"></i></th>
                  </tr>
                  </thead>
                  <tbody>
                    <td>
                    <?php
                    $qrCode = new Endroid\QrCode\QrCode;('648645');
                    $qrCode->writeFile('uploads/qr-code/item-'.$row->barcode.'.png'); // Menyimpan kode QR ke file hello.png
                    ?>
                    <img src="<?=base_url('uploads/qr-code/item-'.$row->barcode.'.png')?>" style="width:200px">
                    <br>
                    <?=$row->barcode?>
                    <br> <br>
                        <a href="<?=site_url('item/barcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-sm">
                            <i class="fa-solid fa-print"></i>
                                Print
                        </a>
                    </td>
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
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
