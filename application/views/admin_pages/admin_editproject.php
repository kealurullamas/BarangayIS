
  
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Edit Project</h3>
        </div>
            <div class="panel-body">
            <?php $attributes = ['id' => 'myform'];?>
            <?php echo form_open('admins/editproject/'.$row['id'], $attributes); ?>
    
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
                        <input type="text" name="projecttitle"class="form-control" value="<?php echo $row['title']; ?>">
                        </div>
                        <div class="form-group">
                        <?php if($this->session->flashdata('error')): ?>
                        <span class="text-danger">*</span>
                        <?php endif; ?>
                        <label>Project Objective</label>
                        <input name="projectobjective" class="form-control" rows="2" value ="<?php echo $row['objective']; ?>">
                        </div>
                        <div class="form-group">
                        <?php if($this->session->flashdata('error')): ?>
                        <span class="text-danger">*</span>
                        <?php endif; ?>
                        <label>Project Description</label>
                        <textarea name="projectdescription" class="form-control" rows="3"><?php echo $row['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <?php if($this->session->flashdata('error')): ?>
                        <span class="text-danger">*</span>
                        <?php endif; ?>
                        <label>Project Location</label>
                        <input type="text" name="projectlocation"class="form-control" value="<?php echo $row['location']; ?>">
                        </div>
                        <div class="form-group">
                        <?php if($this->session->flashdata('error')): ?>
                        <span class="text-danger">*</span>
                        <?php endif; ?>
                        <label>Project Budget</label>
                        <input type="text" name="projectbudget"class="form-control" value="<?php echo $row['budget']; ?>">
                        </div>
                        <div class="form-group">
                        <?php if($this->session->flashdata('error')): ?>
                        <span class="text-danger">*</span>
                        <?php endif; ?>
                        <label>Project Fund Source</label>
                        <input type="text" name="projectfundsource"class="form-control" value="<?php echo $row['fund_source']; ?>">
                        </div>
                        <div class="float-right">
                        <button type="submit" class="btn btn-primary confirm-edit">Submit</button>
                    </div>
                </div>
            </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">Are you sure you want to edit this record?</div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a style="color:white" class="btn btn-primary" id="btnUpdate">Confirm</a>
                        
                    </div>
            </div>
    </div>
</div>
