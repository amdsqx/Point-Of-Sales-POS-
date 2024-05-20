<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Suppliers <small>Pemasok Barang</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                <li class="breadcrumb-item active">Supplier</li>
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
                <h3 class="card-title">Data Suppliers</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('supplier/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa-solid fa-user-plus"></i>
                        Create
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->address?></td>
                        <td><?=$data->description?></td>
                        <td class="text-center" width= "160px">
                          <form>
                              <a href="<?=site_url('supplier/edit/'.$data->supplier_id)?>" class="btn btn-primary btn-xs">
                                  <i class="fa-solid fa-pencil"></i>
                                   Update
                              </a>
                              <!-- <a href="<?=site_url('supplier/del/'.$data->supplier_id)?>" onclick="return confirm('Apakah Anda yakin hapus data?')" class="btn btn-danger btn-xs">
                                  <i class="fa-solid fa-trash-can"></i>
                                   Delete
                              </a> -->
                              <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?=site_url('supplier/del/'.$data->supplier_id)?>')" class="btn btn-danger btn-xs">
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

  <div class="modal fade" id="modalDelete">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" >
            <div class="modal-header">
              <h6 class="modal-title">Yakin akan menghapus data ini?</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-footer">
              <form id="formDelete" action="" method="post">
                <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                <button class="btn btn-danger" type="submit">Hapus</button>
              </form>
            </div>
          <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
      </div>
  </div>