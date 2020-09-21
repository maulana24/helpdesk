<div class="row widget-row">
    <div class="col-md-5">
        <table id="table" class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal/Waktu</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div class="col-md-7">
        <form class="form" method="post" action="<?php echo base_url('help_desk/register_layanan'); ?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Tuliskan Nama Anda">
            </div>
            <div class="form-group">
                <label>Kategori Keluhan</label>
                <select class="form-control" name="kategori">
                    <option value="">- Pilih Kategori -</option>
                    <?php foreach ($kategori->result() as $row) { ?>
                        <option value="<?php echo $row->kode_kategori; ?>"><?php echo $row->nama_kategori; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Penjelasan Keluhan</label>
                <textarea name="uraian" class="form-control" rows="8" placeholder="Tulisakn Penjelasan Keluhan Disini"></textarea>
            </div>
            <div class="form-group">
                <label>Mempunyai Teman Dengan Keluhan Yang Sama? Jika Ya Masukkan Banyak Teman.</label>
                <input type="number" name="jum" class="form-control">
            </div>
            <button class="btn btn-primary btn-block"><i class="fa fa-check"></i> Daftarkan Keluhan</button>
        </form>
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