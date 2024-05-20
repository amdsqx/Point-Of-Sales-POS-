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
                <h3 class="card-title"><?=ucfirst($page)?> Item</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat">
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
            <?php echo form_open_multipart('item/process') ?>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Barcode *</label>
                                <input type="hidden" name="id" value="<?=$row->item_id?>">
                                <input type="text" class="form-control" name="barcode" value="<?=$row->barcode?>" placeholder="barcode" required>
                            </div>
                            <div class="form-group">
                                <label for="product_name">Product Name *</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" value="<?=$row->name?>" placeholder="product name" required>
                            </div> 
                            <div class="form-group">
                                <label>Category *</label>
                                <select name="category" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <?php foreach($category->result() as $key => $data) { ?>
                                        <option value="<?=$data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null?>><?=$data->name?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Unit *</label>
                                <?php echo form_dropdown('unit', $unit, $selectedunit,
                                ['class' => 'form-control', 'required' => 'required'])?>
                            </div>
                            <div class="form-group">
                                <label>Price *</label>
                                <input type="number" class="form-control" name="price" value="<?=$row->price?>" placeholder="price" required>
                            </div>
                            <div class="form-group">
                                <label>Image *</label>
                                <?php if($page == 'edit') {
                                    if($row->image != null) { ?>
                                        <div style="margin-bottom:10px;">
                                            <img src="<?=base_url('uploads/product/'.$row->image)?>" style="width:80%">
                                        </div>
                                    <?php
                                    }
                                }?>
                                <input type="file" class="form-control" name="image">
                                <small>(Biarkan kosong jika tidak <?=$page == 'edit' ? 'diganti' : 'ada'?>)</small>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>                      -->
                        </div>                      
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="reset" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Reset</button>
                    <button type="submit" name="<?=$page?>" class="btn btn-success"><i class="fa-regular fa-paper-plane"></i> Save</button>
                </div>
            <?php echo form_close()?>
            </div>
        </div>
    </div>
  </div>
 </div>
</section>
