<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css">

    <title>Login-BarangayIS</title>
  </head>
  <body>

 
    <?php echo form_open('admins/login')  ?>

    <div class="container m-top10 ">       
        <div class="row">
            <div class="col-md-4 col-xs-6"></div>
        
            <div class="col-md-4 col-xs-6 bg-light p-5">
            <div class="row">
                <div class="col col-4">
                <img class="img-responsive" src="<?php echo base_url('assets/img/barangay_council/malaban_Logo.png') ?>" alt="Brgy. Malaban" style="width:100px; height:100px ">
                </div>
                <div class="col-md-7 col-xs-6">
                <div class="text-dark h4 text-center">
                       Barangay Malaban IS
                    </div> 
                </div>
                
            </div>
                <form>
                    <div class="form-group align-middle text-center h5 text-dark" >
                    <hr style="display:inline-block; width:30%;" class="mr-4">Login <hr class="ml-3" style="display:inline-block; width:30%;" >
                    </div>
                    <div class="form-group">
                            <div class="text-center">
                            <?php if($this->session->flashdata('loginfailed')): ?>
                            <span class="text-danger">
                            <?php echo $this->session->flashdata('loginfailed'); ?>
                            <?php endif; ?>
                            </div>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                            <?php if($this->session->flashdata('username_error')): ?>
                            <span class="text-danger">
                            <?php echo $this->session->flashdata('username_error'); ?>
                            <?php endif; ?>
                            </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">
                            <?php if($this->session->flashdata('password_error')): ?>
                            <?php echo $this->session->flashdata('password_error'); ?>
                            <?php endif; ?>
                            </span>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block">Login</button>
                </form>
            </div>
        
            <div class="col-md-4 col-xs-6"></div>

        </div>
      </div>
      <?php echo form_close(); ?>

    <script src= "<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
    <script src= "<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>