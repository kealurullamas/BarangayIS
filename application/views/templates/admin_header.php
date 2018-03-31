<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href=" <?php echo base_url('assets/admin/vendor/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/combobox/css/bootstrap-combobox.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/calendar/fullcalendar.css" />
  <script type="text/javascript">
   var GLOBAL_BASEURL = "<?php echo base_url(); ?>";
  </script>
</head>

<body>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<a class="navbar-brand" href="<?php echo base_url('Admin_Pages/view');?>"><img src="<?php echo base_url('assets/img/barangay_council/malaban_Logo.png'); ?>"class="img-responsive" alt="Brgy. Malabanan" width="50" height="45"> Brgy. Malaban IS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="<?php echo base_url('Admin_Pages/view');?>">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Announcements">
          <a class="nav-link" href="<?php echo base_url('Admin_Pages/announcements'); ?>">
            <i class="fa fa-fw fa-bullhorn"></i>
            <span class="nav-link-text">Announcements</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Citizens">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Citizens</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo base_url('genealogycontroller/citizens') ?>">View Citizens</a>
            </li>
            <li>
              <a href="<?php echo base_url('admin_pages/addcitizen') ?>">Add Citizen</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
          <a class="nav-link" href="<?php echo base_url('Admin_Pages/events');?>">
            <i class="fa fa-fw fa-calendar"></i>
            <span class="nav-link-text">Events</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gallery">
          <a class="nav-link" href="<?php echo base_url('Admin_Pages/gallery');?>">
            <i class="fa fa-fw fa-image"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
         
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="News">
          <a class="nav-link" href="<?php echo base_url('Admin_Pages/news');?>">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">News</span>
          </a>         
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projects">
          <a class="nav-link" href="<?php echo base_url('Admin_Pages/projects');?>">
            <i class="fa fa-fw fa-gavel"></i>
            <span class="nav-link-text">Projects</span>
          </a>
        </li>
      
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="ContentCreationDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Create Content
          </a>
          <div class="dropdown-menu" aria-labelledby="contentDropdown">
             
            <a class="dropdown-item" href="<?php echo base_url('admin_pages/addannouncement'); ?>">
              <span class="">Add Announcement</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('admin_pages/events'); ?>">
              <span class="">Add Event</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('admin_pages/addgallery'); ?>">
              <span class="">Add Image in Gallery</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('admin_pages/addnews'); ?>">
              <span class="">Add News</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('admin_pages/addproject'); ?>">
              <span class="">Add Project</span>
            </a>
           
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2 " id="ContentCreationDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $this->session->userdata('username');?>
          </a>
          <div class="dropdown-menu" aria-labelledby="contentDropdown">
             <?php if($this->session->userdata('type') == 'Super Admin'):?>
            <a class="dropdown-item" href="<?php echo base_url('admin_pages/users'); ?>">
              <span class="">View Accounts</span>
            </a>
            <div class="dropdown-divider"></div>
            <?php endif; ?>
            <a class="dropdown-item" href="<?php echo base_url('admin_pages/usersettings'); ?>">
              <span class="">User Settings</span>
            </a>
                       
        </li>
     
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
<br><br><br>

      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="<?php echo base_url()?>admins/logout">Logout</a>
                  
                </div>
              </div>
            </div>
      </div>

      
      