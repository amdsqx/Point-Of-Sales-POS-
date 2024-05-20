<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Units <small>Satuan Barang</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                <li class="breadcrumb-item active">Units</li>
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
                <h3 class="card-title">Data Units</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('unit/add')?>" class="btn btn-primary btn-flat">
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
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td class="text-center" width= "160px">
                          <form>
                              <a href="<?=site_url('unit/edit/'.$data->unit_id)?>" class="btn btn-primary btn-xs">
                                  <i class="fa-solid fa-pencil"></i>
                                   Update
                              </a>
                              <a href="<?=site_url('unit/del/'.$data->unit_id)?>" onclick="return confirm('Apakah Anda yakin hapus data?')" class="btn btn-danger btn-xs">
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
