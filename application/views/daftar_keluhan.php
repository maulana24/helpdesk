<div class="row widget-row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget">
            <div class="portlet-title">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase">Daftar Keluhan</span>
                    <span class="caption-helper"><?php echo $jum_keluhan; ?> Keluhan Menunggu</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="scroller" style="height: 400px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                    <?php echo $this->session->flashdata('alert_tugas'); ?>
                    <table border="0" id="table" class="table table-hovered">
                        <thead>
                            <tr>
                                <!-- <th style="width: 0px">No.</th>
                                <th style="width: 260px;">Tanggal/Waktu</th>
                                <th style="width: 660px;">Nama</th>
                                <th style="width: 0px;">Kategori</th>
                                <th style="width: 0px;">Banyak</th>
                                <th style="width: 4000px;">Uraian</th>
                                <th>Aksi</th> -->
                                <th>No.</th>
                                <th>Tanggal/Waktu</th>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <th>Kategori</th>
                                <?php if ($this->session->userdata('level') == "0") { ?> <th>User_Mulai</th> <?php } ?>
                                <th>Uraian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

<script type="text/javascript">
    var table;
     
    $(document).ready(function() {
     
        //datatables
        table = $('#table').DataTable({ 
     
            "processing": true,
            "serverSide": true, 
            "order": [],
     
            "ajax": {
                "url": "<?php echo base_url('help_desk/daftar_layanan')?>",
                "type": "POST",
                "data": function(data){
                    data.jur = $('#jurusan').val();
                    data.seleksi = $('#sleksi').val();
                    data.strata = $('#strata').val();
                }
            },
     
            "columnDefs": [
            { 
                "targets": [ 0 ],
                "orderable": false,
            },
            ],
     
        });

        $('#btn-filter').click(function(){ //button filter event click
            table.ajax.reload(null,false);  //just reload table
        });
        $('#btn-reset').click(function(){ //button reset event click
            $('#form-filter')[0].reset();
            table.ajax.reload(null,false);  //just reload table
        });

        $('#nim').click(function(){ //button filter event click
            window.location = "<?php echo base_url('index.php/prc_file/generate_stb'); ?>";
        });
     
    });
</script>