<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Customers <small>Pelanggan</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                <li class="breadcrumb-item active">Customer</li>
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
                <h3 class="card-title"><?=ucfirst($page)?> Customer</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('customer')?>" class="btn btn-warning btn-flat">
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
              <form role="form" action="<?=site_url('customer/process')?>" method="post">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Customer Name *</label>
                                <input type="hidden" name="id" value="<?=$row->customer_id?>">
                                <input type="text" class="form-control" name="customer_name" value="<?=$row->name?>" placeholder="Nama customer" required>
                            </div>
                            <div class="form-group">
                                <label>Gender *</label>
                                <select class="form-control" name="gender" required>
                                    <option value="">- Pilih -</option>
                                    <option value="L" <?=$row->gender == 'L' ? 'selected' : ''?>>Laki-Laki</option>
                                    <option value="P" <?=$row->gender == 'P' ? 'selected' : ''?>>Perempuan</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="number" class="form-control" name="phone" value="<?=$row->phone?>" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <label>Address *</label>
                                <textarea class="form-control" name="addr" value="" placeholder="Address" required><?=$row->address?></textarea>
                            </div>             
                        </div>                      
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="reset" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Reset</button>
                    <button type="submit" name="<?=$page?>" class="btn btn-success"><i class="fa-regular fa-paper-plane"></i> Save</button>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>
 </div>
</section>
