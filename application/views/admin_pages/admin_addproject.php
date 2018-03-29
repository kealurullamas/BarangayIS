<div class="">
    <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Added Successfully!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
    <?php endif;?>
  
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Add Project</h3>
        </div>
      
        <div class="panel-body">
        <?php echo form_open('admins/addproject'); ?>
                <div class="modal-body">
                    <div class="panel-body">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">
                                <?php echo $this->session->flashdata('error'); ?>
                                </span>
                                <?php endif; ?>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>Project Title</label>
                                <input type="text" name="projecttitle"class="form-control">
                                </div>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>Project Objective</label>
                                <input name="projectobjective" class="form-control" rows="2">
                                </div>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>Project Description</label>
                                <textarea name="projectdescription" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>Project Location</label>
                                <input type="text" name="projectlocation"class="form-control">
                                </div>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>Project Budget</label>
                                <input type="text" name="projectbudget"class="form-control">
                                </div>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>Project Fund Source</label>
                                <input type="text" name="projectfundsource"class="form-control">
                                </div>
                                <div class="float-right">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            
                    </div>
                
                </div>
                
                
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
