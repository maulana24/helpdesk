<div class="row widget-row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget">
            <div class="portlet-title">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase"><i class="fa fa-user"></i> Pengelolahan Dan Pengaturan Pengguna</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <a class="btn btn-success" data-toggle="modal" data-target="#pengguna"><i class="fa fa-user-plus"></i> Tambah Pengguna</a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <?php echo $this->session->flashdata('alert_admin'); ?>
                <h4>Daftar Pengguna</h4>
                <table id="table" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th style="width: 50%">Nama Lengkap</th>
                            <th>Level</th>
                            <th>Divisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget" id="Kategori">
            <div class="portlet-title">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase"><i class="fa fa-user"></i> Pengelolahan Dan Pengaturan Kategori</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <a class="btn btn-success" data-toggle="modal" data-target="#add_kategori"><i class="fa fa-user-plus"></i> Tambah Kategori</a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <?php echo $this->session->flashdata('alert_kategori'); ?>
                <h4>Daftar Kategori</h4>
                <table id="table_kategori" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kategori</th>
                            <th style="width: 50%">Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

<?php echo $popup; ?>

<script type="text/javascript">
    var table;
    var table2;
     
    $(document).ready(function() {
     
        //datatables
        table = $('#table').DataTable({ 
     
            "processing": true,
            "serverSide": true, 
            "order": [],
     
            "ajax": {
                "url": "<?php echo base_url('super_admin/daftar_user')?>",
                "type": "POST",
            },
     
            "columnDefs": [
            { 
                "targets": [ 0 ],
                "orderable": false,
            },
            ],
     
        });
     
    });

    $(document).ready(function() {
     
        //datatables
        table2 = $('#table_kategori').DataTable({ 
     
            "processing": true,
            "serverSide": true, 
            "order": [],
     
            "ajax": {
                "url": "<?php echo base_url('super_admin/daftar_kategori')?>",
                "type": "POST",
            },
     
            "columnDefs": [
            { 
                "targets": [ 0 ],
                "orderable": false,
            },
            ],
     
        });
     
    });
</script>