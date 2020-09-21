<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Helpdesk UPT.TIK</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/mapplic/mapplic/mapplic.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" /> </head>
    <!-- END HEAD -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/media/css/jquery.dataTables.css'); ?>">

        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <style type="text/css">
            .tambah_tugas {
                padding: 1px;
                text-align: center;
                position: fixed;
                bottom: 3px;
                z-index: 1000;
                display: block;
                right: 30px;
            }
            .tambah_tugas > a {
                display: inline-block;
                color: #0982f8;
                font-size: 50px;
                opacity: .6;
                filter: alpha(opacity=60);
            }

        </style>

    <body class="page-container-bg-solid">
        <!-- BEGIN HEADER -->

        <?php
            $this->db->order_by('time_send', 'DESC');
            $this->db->order_by('date_send', 'DESC');
            $this->db->where('send_to', $this->session->userdata('username'));
            $this->db->where('status', 'D');
            $dt['inbox'] = $this->db->get('inbox');
            $dt['jumib'] = $dt['inbox']->num_rows();
            echo $this->load->view('header', $dt, TRUE); 
        ?>
        <!-- BEGIN CONTAINER -->
        <div class="page-container page-content-inner page-container-bg-solid">
            <!-- BEGIN BREADCRUMBS -->
            <!-- Remove "hide" class from "breadcrumbs hide" DIV and "margin-top-30" class from below "container-fluid container-lf-space margin-top-30" DIV in order to use the page breadcrumbs -->
            <div class="breadcrumbs hide">
                <div class="container-fluid">
                    <h2 class="breadcrumbs-title">Dashboard</h2>
                    <ol class="breadcrumbs-list">
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Home</a>
                        </li>
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Features</a>
                        </li>
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Dashboard</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- END BREADCRUMBS -->
            <!-- BEGIN CONTENT -->
            <div class="container-fluid container-lf-space margin-top-30">
                <!-- BEGIN PAGE BASE CONTENT -->
                <?php echo $content; ?>
                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer navbar-fixed-bottom">
            <div class="page-footer-inner container-fluid container-lf-space">
                <p class="page-footer-copyright"> 2017 &copy; UPT.TIK Universitas Tadulako </p>
            </div>
            <?php if (!empty($this->session->userdata('loginin')) && $this->session->userdata('level') != "2") { ?>
            <div class="tambah_tugas">
                <a data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i></a>
            </div>       
            <?php } ?>
        </div>
        
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Daftarkan Tugas/Keluhan</h4>
              </div>
              <div class="modal-body">
                <form class="form" method="post" action="<?php echo base_url('help_desk/register_layanan'); ?>" enctype="multipart/form-data">
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
                        <label>Sisipkan File</label>
                        <input class="form-control" type="file" name="Foto">
                    </div>
              </div>
              <div class="modal-footer">
                <button name="btn_urg" value="clicked" type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambahkan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </form>
              </div>
            </div>

          </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        
        <script src="<?php echo base_url(); ?>assets/js/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/mapplic/js/hammer.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/mapplic/js/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/mapplic/mapplic/mapplic.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/dashboard.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url('assets/plugins/datatables/media/js/jquery.dataTables.js'); ?>"></script>
    </body>

</html>