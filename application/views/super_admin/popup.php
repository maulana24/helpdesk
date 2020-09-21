<form class="form-horizontal" method="post" action="<?php echo base_url('super_admin/tambah_user'); ?>">
<!-- Modal -->
<div id="pengguna" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-user-plus"></i> Tambah Pengguna</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Nama Lengkap:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="namal" placeholder="Masukkan Nama Lengkap" name="namal">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Username:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Password:</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password" name="password">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Level User:</label>
          <div class="col-sm-8">
            <select class="form-control" name="level">
                <option value="">- PILIH LEVEL -</option>
                <option value="1">Admin</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Divisi:</label>
          <div class="col-sm-8">
            <select class="form-control" name="kd_div">
                <option value="">- PILIH Divisi -</option>
                <option value="0">UPT.TIK</option>
                <option value="1">Fakultas</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Nama Divisi:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Masukkan Nama Divisi" name="nm_div">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambahkan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>

  </div>
</div>
</form>

<form class="form-horizontal" method="post" action="<?php echo base_url('super_admin/tambah_kategori'); ?>">
<!-- Modal -->
<div id="add_kategori" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-user-plus"></i> Tambahkan Kategori</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Kode Kategori:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="kd_kat" placeholder="Masukkan Kode Kategori. Ex: PMB" name="kd_kat">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Nama Kategori:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nm_kat" placeholder="Masukkan Kode Kategori. Ex: Penerimaan Mahasiswa Baru" name="nm_kat">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambahkan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>

  </div>
</div>
</form>