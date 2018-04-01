<div class="">
    <!-- Website Overview -->
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Edit Ordinance</h3>
        </div>
        <div class="panel-body">
        <div class="panel-body">
            <?php $attributes = ['id' => 'myform'];?>
            <?php echo form_open('admins/updateordinance/'.$row['id'], $attributes); ?>
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger"><?php echo $this->session->flashdata('error') ?></span>
                <?php endif;?>
                <div class="form-group">
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger">*</span>
                <?php endif; ?>
                <label>Ordinance Title</label>
                <input type="text" name="ordinancetitle" class="form-control" value="<?php echo $row['title'] ?>">
                </div>
                <div class="form-group">
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger">*</span>
                <?php endif; ?>
                <label>Ordinance Description</label>
                <textarea name="ordinancedescription" class="form-control"><?php echo $row['description']?></textarea>
                </div>
                <div class="float-right">
                <button type="submit" class="btn btn-primary confirm-edit">Submit</button>
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