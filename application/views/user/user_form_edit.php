
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Users <small>Pengguna</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Edit User</h3>
                <div class="float-sm-right">
                    <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
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
              <form role="form" action="" method="post">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                                    <input type="text" name="fullname" class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>" name="fullname" value="<?=$this->input->post('fullname') ?? $row->name?>">
                                    <?=form_error('fullname')?>
                                </div>
                                <div class="form-group">
                                    <label>Username *</label>
                                    <input type="text" name="username" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" name="username" value="<?=$this->input->post('username') ?? $row->username?>">
                                    <?=form_error('username')?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label> <small>(Biarkan kosng jika tidak diganti)</small>
                                    <input type="password" name="password" class="form-control"  value="<?=$this->input->post('password') ?>">
                                    <?=form_error('password')?>
                                </div>
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input type="password" name="passconf" class="form-control"  value="<?=$this->input->post('passconf') ?>">
                                    <?=form_error('passconf')?>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea type="text" name="address" class="form-control"><?=$this->input->post('address') ?? $row->address?></textarea>
                                    <?=form_error('address')?>
                                </div>
                                <div class="form-group">
                                    <label>Level *</label>
                                    <select type="text" name="level" class="form-control">
                                        <?php $level = $this->input->post('level') ? $level = $this->input->post('level') : $row->level ?>
                                        <option value="1">Admin</option>
                                        <option value="2" <?=$level == 2 ? "selected" : null?>>kasir</option>
                                    </select>
                                    <?=form_error('level')?>
                                </div>
                        </div>                      
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center"">
                    <button type="reset" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Reset</button>
                    <button type="submit" class="btn btn-success"><i class="fa-regular fa-paper-plane"></i> Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>
 </div>
</section>
