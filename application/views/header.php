<div class="page-header navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="clearfix">
        <!-- BEGIN BURGER TRIGGER -->
        <div class="burger-trigger">
            <button class="menu-trigger">
                <img src="<?php echo base_url(); ?>assets/img/m_toggler.png" alt=""> </button>
            <div class="menu-overlay menu-overlay-bg-transparent">
                <div class="menu-overlay-content">
                    <ul class="menu-overlay-nav text-uppercase">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Reports</a>
                        </li>
                        <li>
                            <a href="#">Templates</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu-bg-overlay">
                <button class="menu-close">&times;</button>
            </div>
            <!-- the overlay element -->
        </div>
        <!-- END NAV TRIGGER -->
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" class="logo-default" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <?php
                        if ($jumib > 0) {
                            $badge = "badge badge-danger";
                        }else{
                            $badge = "badge";
                        }
                        ?>
                        <span class="<?php echo $badge; ?>"> <?php echo $jumib; ?> </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have
                                <span class="bold"><?php echo $jumib; ?> New</span> Messages</h3>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <?php foreach ($inbox->result() as $ibx) { 
                                $file = $this->db->query("SELECT file FROM user WHERE Nama = '".$ibx->msg_from."'");
                                foreach ($file->result() as $key) {
                                    $foto = $key->file;
                                }
                                ?>
                                <li>
                                    <a href="<?php echo base_url('help_desk/lanjutkan_layanan/'.$ibx->Id_tr_tugas.'/'.$this->session->userdata('username')); ?>">
                                        <span class="photo">
                                            <?php if ($foto == "") { ?>
                                                <img style="width: 45px; height: 45px" class="img-circle" alt="" src="<?php echo base_url(); ?>assets/img/avatar2.jpg" />
                                            <?php }else{ ?>
                                                <img style="width: 45px; height: 45px" class="img-circle" alt="" src="<?php echo base_url(); ?>assets/img/foto_user/<?php echo $foto; ?>" />
                                            <?php } ?> </span>
                                        <span class="subject">
                                            <span class="from"> <?php echo $ibx->msg_from; ?> </span>
                                            <span class="time"><?php echo substr($ibx->time_send, 0, 4); ?> </span>
                                        </span>
                                        <span class="message"><?php echo $ibx->msg; ?>...</span>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <div class="dropdown-user-inner">
                            <?php if ($this->session->userdata('loginin') != "") { ?>

                                <span class="username username-hide-on-mobile"> <?php echo $this->session->userdata('Nama'); ?> : Login Sebagai <?php echo $this->session->userdata('K_Level'); ?></span>
                                 

                                <?php if ($this->session->userdata('foto') == "") { ?>
                                    <img alt="" src="<?php echo base_url(); ?>assets/img/avatar1.jpg" />
                                <?php }else{ ?>
                                    <img alt="" src="<?php echo base_url(); ?>assets/img/foto_user/<?php echo $this->session->userdata('foto'); ?>" />
                                <?php } ?>

                        </div>
                            <?php } else{ ?>
                                <span class="username username-hide-on-mobile"> Masuk Sebagai Admin? </span>
                                <img alt="" src="<?php echo base_url(); ?>assets/img/avatar1.jpg" /> </div>
                            <?php } ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <?php if ($this->session->userdata('loginin') != "") { if ($this->session->userdata('level') != "2"){ ?>
                            <li>
                                <a href="<?php echo base_url('help_desk/profil'); ?>">
                                    <i class="icon-user"></i> Profil Saya 
                                </a>
                            </li>
                        <?php } ?>
                            <?php if($this->session->userdata('level') == "0"){?>
                            <li>
                                <a href="<?php echo base_url('super_admin/index'); ?>">
                                    <i class="fa fa-cog"></i> Super Admin
                                </a>
                            </li>
                            <?php } ?>
                        <?php if ($this->session->userdata('level') != "2"){ ?>
                            <li>
                                <a href="<?php echo base_url('help_desk/index'); ?>">
                                    <i class="icon-rocket"></i> Daftar Tugas
                                    <!-- <span class="badge badge-success"> 7 </span> -->
                                </a>
                            </li>
                            <li class="divider"> </li>
                         <?php } ?>
                            <li>
                                <a href="<?php echo base_url('help_desk/logout'); ?>">
                                    <i class="icon-key"></i> Keluar
                                </a>
                            </li>
                        <?php } else{ ?>
                            <li>
                                <a href="<?php echo base_url('help_desk/login'); ?>">
                                    <i class="icon-key"></i> Log In Helpdesk 
                                </a>
                            </li>
                        <?php } ?>
                            
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->