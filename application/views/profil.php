<style type="text/css">
    .image-preview-input {
        position: relative;
        overflow: hidden;
        margin: 0px;    
        color: #333;
        background-color: #fff;
        border-color: #ccc;    
    }
    .image-preview-input input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .image-preview-input-title {
        margin-left:2px;
    }
</style>

<div class="row widget-row">
    <div class="col-md-3">
        <!-- BEGIN WIDGET THUMB -->
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
            <h4 class="widget-thumb-heading">Total diselesaikan Bulan Ini</h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-green fa fa-check-square-o"></i>
                <div class="widget-thumb-body">
                    <span class="widget-thumb-subtitle">Menyelesaikan</span>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $tbulan; ?>">0</span>
                </div>
            </div>
        </div>
        <!-- END WIDGET THUMB -->
    </div>
    <div class="col-md-3">
        <!-- BEGIN WIDGET THUMB -->
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
            <h4 class="widget-thumb-heading">Total diselesaikan Hari Ini</h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-red fa fa-check"></i>
                <div class="widget-thumb-body">
                    <span class="widget-thumb-subtitle">Menyelsaikan</span>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $thari; ?>">0</span>
                </div>
            </div>
        </div>
        <!-- END WIDGET THUMB -->
    </div>
    <div class="col-md-3">
        <!-- BEGIN WIDGET THUMB -->
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
            <h4 class="widget-thumb-heading">Total Layanan Hari Ini</h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                <div class="widget-thumb-body">
                    <span class="widget-thumb-subtitle">Total</span>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $thlayanan; ?>">0</span>
                </div>
            </div>
        </div>
        <!-- END WIDGET THUMB -->
    </div>
    <div class="col-md-3">
        <!-- BEGIN WIDGET THUMB -->
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
            <h4 class="widget-thumb-heading">Sisa Layanan Hari Ini</h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-blue fa fa-user"></i>
                <div class="widget-thumb-body">
                    <span class="widget-thumb-subtitle">Tersisa</span>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $slayanan; ?>">0</span>
                </div>
            </div>
        </div>
        <!-- END WIDGET THUMB -->
    </div>
</div>

<div class="row widget-row">
    <div class="col-md-12 margin-bottom-20">
        <!-- BEGIN WIDGET TAB -->
        <div class="widget-bg-color-white widget-tab">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" data-toggle="tab"> DAFTAR TUGAS DISELESAIKAN HARI INI </a>
                </li>
                <li>
                    <a href="#tab_1_2" data-toggle="tab"> DAFTAR SELRUH TUGAS YANG DI SELESAIKAN BULAN INI </a>
                </li>
                <li>
                    <a href="#tab_1_3" data-toggle="tab"> UBAH GAMBAR PROFIL </a>
                </li>
                <li>
                    <a href="#tab_1_4" data-toggle="tab"> PENGATURAN ADMIN </a>
                </li>
            </ul>
            <div class="tab-content scroller" style="height: 350px;" data-always-visible="1" data-handle-color="#D7DCE2">
                <div class="tab-pane fade active in" id="tab_1_1">
                    <?php foreach ($d_thari->result() as $row) { ?>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="<?php echo base_url(); ?>assets/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title"><a href="<?php echo base_url('help_desk/lanjutkan_layanan/'.$row->id); ?>"><?php echo '['.$row->kategori.'] '.$row->Nama.', User Mulai : ['.$row->User_Mulai.']'; ?></a>
                                <span class="label label-default"> <?php echo $row->Tgl_Mulai.' S/D '.$row->Tgl_Selesai; ?> </span>
                            </h3>
                            <p><?php echo $row->Uraian; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="tab_1_2">
                    <?php foreach ($d_tbulan->result() as $row) { ?>
                    <div class="widget-news margin-bottom-20">
                        <img class="widget-news-left-elem" src="<?php echo base_url(); ?>assets/img/03.jpg" alt="">
                        <div class="widget-news-right-body">
                            <h3 class="widget-news-right-body-title"><a href="<?php echo base_url('help_desk/lanjutkan_layanan/'.$row->id); ?>"><?php echo '['.$row->kategori.'] '.$row->Nama.', User Mulai : ['.$row->User_Mulai.']'; ?></a>
                                <span class="label label-default"> <?php echo $row->Tgl_Mulai.' S/D '.$row->Tgl_Selesai; ?> </span>
                            </h3>
                            <p><?php echo $row->Uraian; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="tab_1_3">
                    <div class="widget-news margin-bottom-20">
                        <!-- image-preview-filename input [CUT FROM HERE]-->
                        <?php echo $this->session->flashdata('alert_foto'); ?>

                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('help_desk/simpan_foto'); ?>">
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                <span class="input-group-btn">
                                    <!-- image-preview-clear button -->
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <!-- image-preview-input -->
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="Foto"/> <!-- rename it -->
                                    </div>
                                    <button class="btn btn-primary" type="submit">Upload</button>
                                </span>
                            </div><!-- /input-group image-preview [TO HERE]--> 
                        </form>


                    </div>
                </div>

                <div class="tab-pane fade" id="tab_1_4">
                    <div class="widget-news margin-bottom-20">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->session->flashdata('alert_pengaturan'); ?>
                            </div>
                            <div class="col-md-12">
                                <h4>Ubah Password :</h4>
                                <form class="form-horizontal" method="post" action="<?php echo base_url('help_desk/ganti_password/'.$this->session->userdata('username')); ?>">
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Password Baru:</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="namal" placeholder="Masukkan Password" name="pw">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Password Baru:</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="username" placeholder="Konfirmasi Password" name="pwc">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-info"><i class="fa fa-refresh"></i> Ubah Password</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END WIDGET TAB -->
    </div>
</div>
<script type="text/javascript">
    $(document).on('click', '#close-preview', function(){ 
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
               $('.image-preview').popover('show');
            }, 
             function () {
               $('.image-preview').popover('hide');
            }
        );    
    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class","close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse"); 
        }); 
        // Create the preview image
        $(".image-preview-input input:file").change(function (){     
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });      
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);            
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            }        
            reader.readAsDataURL(file);
        });  
    });
</script>