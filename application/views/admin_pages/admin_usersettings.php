


    <div class="panel panel-default">
        <div class="panel-heading">    
                <h3 class="panel-title">General Accounts Settings</h3>     
        </div>
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading2">
                    <div class="row">
                        <div class="col-md-8"><h3 class="panel-title" style="padding: 5px 5px;">Name</h3></div>
                        <div class="col-sm-4"><button  class="btn btn-sm float-right bg-colordarkgray" id="GAS_Name">Edit <a class="fa fa-fw fa-window-maximize"></a></button></div>
                    </div>
                </div>
                <div class="panel-body bg-light initially-hidden" id="GAS_NameBody">
                    <?php $attributes = ['id' => 'myform'];?>
                    <?php echo form_open('admins/general_updatename/'.$user['id'], $attributes); ?>
                    
                        <div class="form-group">
                    
                        <label>First Name</label>
                        <input type="text" name="firstname" class="form-control" value="<?php echo $user['firstname'] ?>">
                        </div>
                        <div class="form-group">
            
                        <label>Middle Name</label>
                        <input type="text" name="middlename" class="form-control" value="<?php echo $user['middlename'] ?>">
                        </div>
                        <div class="form-group">
                
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $user['lastname'] ?>">
                        </div>
                        <div class="float-right">
                        <button type="submit" class="btn btn-primary confirm-edit">Submit</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading2">
                    <div class="row">
                        <div class="col-md-8"><h3 class="panel-title" style="padding: 5px 5px;">Username</h3></div>
                        <div class="col-sm-4"><button  class="btn btn-sm float-right bg-colordarkgray" id="GAS_Username">Edit <a class="fa fa-fw fa-window-maximize"></a></button></div>
                    </div>
                </div>
                <div class="panel-body bg-light initially-hidden" id="GAS_UsernameBody">
                    <?php $attributes = ['id' => 'myform2'];?>
                    <?php echo form_open('admins/general_updateusername/'.$user['id'], $attributes); ?>
                    
                        <div class="form-group">
                    
                        <label>Username</label>
                        <input type="text" name="updateusername" class="form-control" value="<?php echo $user['username'] ?>">
                        </div>
                        <div class="form-group">
            
                        
                        <div class="float-right">
                        <button type="submit" class="btn btn-primary confirm-edituname">Submit</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">    
                <h3 class="panel-title">Security and Login</h3>     
        </div>
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading2">
                    <div class="row">
                        <div class="col-md-8"><h3 class="panel-title" style="padding: 5px 5px;"><a class="fa fa-fw fa-key"></a> Change Password</h3></div>
                        <div class="col-sm-4"><button  class="btn btn-sm float-right bg-colordarkgray" id="SAL_Login" >Edit <a class="fa fa-fw fa-window-maximize"></a></button></div>
                    </div>
                </div>
                <?php if($this->session->flashdata('errorpw')): ?>
                <div class="panel-body bg-light" id="SAL_LoginBody">
                <?php else: ?>
                <div class="panel-body bg-light initially-hidden" id="SAL_LoginBody">
                <?php endif; ?>
               
                <?php $attributes = ['id' => 'myform3'];?>
                <?php echo form_open('admins/security_updatepassword/'.$user['id'], $attributes); ?>
                
                    <div class="form-group">
                
                    <label>Current</label>
                    <input type="password" name="currentpw" class="form-control" value="">
                            <?php if($this->session->flashdata('current')): ?>
                            <span class="text-danger">
                            <?php echo $this->session->flashdata('current'); ?>
                            </span>
                            <?php endif; ?>
                    </div>
                    <div class="form-group">
        
                    <label>New</label>
                    <input type="password" name="newpw" class="form-control" value="">
                            <?php if($this->session->flashdata('new')): ?>
                            <span class="text-danger">
                            <?php echo $this->session->flashdata('new'); ?>
                            </span>
                            <?php endif; ?>
                    </div>
                    <div class="form-group">
            
                    <label>Confirm New</label>
                    <input type="password" name="confirmnew" class="form-control" value="">
                            <?php if($this->session->flashdata('confirmnew')): ?>
                            <span class="text-danger">
                            <?php echo $this->session->flashdata('confirmnew'); ?>
                            </span>
                            <?php endif; ?>
                    </div>
                    <div class="float-right">
                    <button type="submit" class="btn btn-primary confirm-editpw">Submit</button>
                    </div>
                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Name</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">Are you sure you want to edit your profile?</div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a style="color:white" class="btn btn-primary" id="btnUpdate">Confirm</a>
                        
                    </div>
            </div>
    </div>
</div>

<div class="modal fade" id="editModaluname" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Username</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">Are you sure you want to edit your username?</div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a style="color:white" class="btn btn-primary" id="btnUpdateuname">Confirm</a>
                        
                    </div>
            </div>
    </div>
</div>

<div class="modal fade" id="editModalpw" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Password</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">Are you sure you want to edit your password?</div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a style="color:white" class="btn btn-primary" id="btnUpdatepw">Confirm</a>
                        
                    </div>
            </div>
    </div>
</div>


