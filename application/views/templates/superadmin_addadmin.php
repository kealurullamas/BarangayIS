<?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible " role="alert">
            <strong>Updated Successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
<?php endif;?>

<?php if($this->session->flashdata('currentpwmismatch')): ?>
        <div class="alert alert-danger alert-dismissible " role="alert">
            <strong><?php echo $this->session->flashdata('currentpwmismatch'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
<?php endif;?>

<?php if($this->session->flashdata('deletesuccess')): ?>
<div class="alert alert-success alert-dismissible " role="alert">
    <strong>Deleted Successfully!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
</div>
<?php endif;?>

<?php if($this->session->flashdata('notavailable')): ?>
        <div class="alert alert-danger alert-dismissible " role="alert">
            <strong><?php echo $this->session->flashdata('notavailable'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <?php endif;?>
        <?php if($this->session->flashdata('available')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong><?php echo $this->session->flashdata('available'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <?php endif;?>



<?php if($this->session->userdata('type') == 'Super Admin'): ?>
<nav class="topbar">
        <div class="row">
            <div class="col-sm-8">Super Admin</div>
            <div class="col-sm-4 "><button type="button" class="float-right btn btn-primary btn-sm" id="adduser"><i class="fa fa-fw fa-plus"></i> Add Admin</button></div>
        </div>
      
</nav>
<?php endif; ?>


<!-- Add user Modal-->
<div class="modal fade" id="adduserModal" tabindex="-1" role="dialog" aria-labelledby="adduserLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add admin</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <?php $attributes = ['id' => 'adduserform'] ?>
                            <?php echo form_open('admins/adduser', $attributes); ?>
                            <div>
                            <label id="AddAdmin_usernameID">Username</label><input name="AddAdmin_username" type="text" class="form-control"/>
                            </div>
                            <div>
                            <label>Password</label><input id="AddAdmin_passwordID" name="AddAdmin_password" type="password" class="form-control"/>
                            </div>
                            <div>
                            <label>Confirm Password</label><input id="AddAdmin_confirmpasswordID" name="AddAdmin_confirmpassword" type="password" class="form-control"/>
                            </div>
                            <!-- <div>
                               
                                <label for="usertype">Access Type</label>
                                <div class="form-check">
                                    <input name="usertype" type="radio" class="with-gap" value="Super Admin" required>
                                    <label for="radio106">Super Admin</label>
                                </div>
                                <div class="form-check">
                                    <input name="usertype" type="radio" class="with-gap"  value="Admin" required>
                                    <label for="radio107">Admin</label>
                                </div>
                          
                            </div> -->
                       
                           
                        </div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button style="color:white" type="submit" class="btn btn-primary" id="btnAddUser">Confirm</button>
                        
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    </div>
        </div>