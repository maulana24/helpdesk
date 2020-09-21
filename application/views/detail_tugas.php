<div class="row widget-row">
    <div class="col-md-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget">
            <div class="portlet-title">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase">Detail Layanan</span>
                    <span class="caption-helper"><?php echo '['.substr($Nama, 0, 25).']['.$Status.']'; ?></span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <a href="<?php echo base_url('help_desk/index'); ?>" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <?php if ($this->session->userdata('kd_div') != "1") { ?>
                        <?php if ($Status != "S" AND $User_Alih == "") { ?>
                        <a href="<?php echo base_url('help_desk/selesai_layanan/'.$this->uri->segment(3).'/'.$this->session->userdata('username')); ?>" class="btn btn-success"><i class="fa fa-check"></i> Selesai</a> 
                        <a href="<?php echo base_url('help_desk/alihkan_layanan/'.$this->uri->segment(3)); ?>" class="btn btn-danger"><i class="fa fa-thumbs-o-down"></i> Alihkan</a>
                        <?php } } ?>

                        <?php if ($User_Alih == $this->session->userdata('username')) { ?>
                        <a href="<?php echo base_url('help_desk/selesai_layanan/'.$this->uri->segment(3).'/'.$this->session->userdata('username')); ?>" class="btn btn-success"><i class="fa fa-check"></i> Selesai</a>
                        <a href="<?php echo base_url('help_desk/alihkan_layanan/'.$this->uri->segment(3)); ?>" class="btn btn-danger"><i class="fa fa-thumbs-o-down"></i> Alihkan</a>
                        <?php }elseif($User_Alih != "" && $this->session->userdata('kd_div') != "1"){ ?>
                            <button class="btn btn-warning disabled"><i class="fa fa-spinner"></i> Sedang Di Proses</button>
                        <?php }else{ echo ""; }  ?>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="scroller" style="height: 550px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                    <?php 
                        echo $Uraian.'<br>';
                        if ($file != "") {
                            echo "<br><b>Klik untuk Melihat Gambar Asli :</b><br><a target='blank_' href='".base_url('assets/img/upload/'.$file)."'><img style='width: 400px' src='".base_url('assets/img/upload/'.$file)."'></a>";
                        }
                    ?>

                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-md-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget">
            <div class="portlet-title">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase">Komentar</span>
                    <span class="caption-helper"><?php echo $jum_komentar; ?> Komentar Tersedia</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
                        <a id="buat_komentar" class="btn btn-warning">Buat Komentar</a>
                        <a id="tutup_komentar" style="display: none;" class="btn btn-default">Tutup Komentar</a>
                    </div>
                </div>
            </div>
            <div class="portlet-title" id="komentar" style="display: none;">
                <div class="caption caption-md font-red-sunglo col-md-12">
                    <form class="form" method="POST" action="<?php echo base_url('help_desk/komentar/'.$this->uri->segment(3).'/'.$this->session->userdata('username')); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <textarea class="form-control" name="komentar" placeholder="Masukkan Komentar. . ."></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="file" name="Foto">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Luncurkan!</button> 
                    </form>
                </div>
            </div>
            <div class="portlet-body">
                <div id="body_komentar" class="scroller" style="height: 550px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">  
                <?php foreach ($Komentar->result() as $row) { 
                    $foto = $this->db->query('SELECT file FROM user WHERE Nama = "'.$row->Nama_User.'"');
                    foreach ($foto->result() as $key) {
                        $foto = $key->file;
                        if ($foto == "") {
                            $foto = "avatar1.jpg";
                        }else{
                            $foto = "foto_user/".$key->file;
                        }
                    }
                    ?>
                    <div class="widget-media">
                        <div class="widget-media-elements text-center">
                            <img class="widget-media-avatar circle margin-bottom-15" src="<?php echo base_url(); ?>assets/img/<?php echo $foto; ?>" alt="">
                        </div>
                        <div class="widget-media-body">
                            <h4 class="widget-media-body-title">
                                <a><?php echo $row->Nama_User_L; ?></a>
                            </h4>
                            <p class="widget-media-body-subtitle">
                                <?php echo $row->Komentar; ?>
                                <?php 
                                    $ext = explode(".", $row->file);
                                    if ($row->file != "") {
                                        if ($ext[1] == "jpg" || $ext[1] == "jpeg" || $ext[1] == "png" || $ext[1] == "jp2") {
                                            echo "<br><b>File Gambar :</b><br><a target='blank_' href='".base_url('assets/img/upload/'.$row->file)."'><img style='width: 100px' src='".base_url('assets/img/upload/'.$row->file)."'></a>";
                                        }else{
                                            echo "<br><b>Lampiran $ext[1] :</b><br><a target='blank_' href='".base_url('assets/img/upload/'.$row->file)."'>$row->file</a>";
                                        }
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        $("#buat_komentar").click(function(){
            $("#komentar").show();
            $("#tutup_komentar").show();
            $("#buat_komentar").hide();
            // $("#body_komentar").css('height', '20px');
        });

        $("#tutup_komentar").click(function(){
            $("#komentar").hide();
            $("#buat_komentar").show();
            $("#tutup_komentar").hide();
        });

    });
</script>