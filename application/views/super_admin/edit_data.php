<div class="row widget-row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget">
            <div class="portlet-title">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase"><i class="fa fa-user"></i> <?php echo $title; ?></span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <a class="btn btn-default" href="<?php echo base_url('super_admin/index'); ?>"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url('super_admin/do_edit'); ?>">


                    <?php
                    if ($edit == 1) {
                    foreach ($data->result() as $row) { ?>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Nama:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly id="kd_kat" value="<?php echo $row->Nama; ?>" placeholder="Masukkan Kode Kategori. Ex: PMB" name="nama">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Nama Lengkap:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row->Nama_Lengkap; ?>" placeholder="Masukkan Kode Kategori. Ex: PMB" name="nm_lengkap">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Ubah Password:</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Masukkan Password Baru" name="pass">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Level:</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="level">
                            <option value="<?php echo $row->level; ?>"><?php echo $row->ket_level; ?></option>
                            <option value="1">Admin</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-11">
                          <button type="submit" name="btn_edit" value="1" class="btn btn-info"><i class="fa fa-refresh"></i> Ubah Data Pengguna</button>
                        </div>
                    </div>
                    <?php } }else{ ?>

                    <?php foreach ($data->result() as $row) { ?>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Kode Kategori:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly id="kd_kat" value="<?php echo $row->kode_kategori; ?>" placeholder="Masukkan Kode Kategori. Ex: PMB" name="kd_kat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Nama Kategori:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nm_kat" value="<?php echo $row->nama_kategori; ?>" placeholder="Masukkan Kode Kategori. Ex: Penerimaan Mahasiswa Baru" name="nm_kat">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-11">
                          <button type="submit" name="btn_edit" value="2" class="btn btn-info"><i class="fa fa-refresh"></i> Ubah Kategori</button>
                        </div>
                    </div>
                    <?php } }?>
                </form>


            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>