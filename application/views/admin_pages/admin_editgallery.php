
<div class="">
    <!-- Website Overview -->
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Edit Image in Gallery</h3>
        </div>
        <div class="panel-body">
            <?php $attributes = ['id' => 'myform'];?>
            <?php echo form_open_multipart('admins/edit_gallery/'.$row['id'], $attributes); ?>
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger"><?php echo $this->session->flashdata('error') ?></span>
                <?php elseif($this->session->flashdata('errorfiletype')): ?>
                    <span class="text-danger">
                    <?php echo $this->session->flashdata('errorfiletype'); ?>
                    </span>
                <?php endif;?>
                <div class="form-group">
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger">*</span>
                <?php endif; ?>
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>">
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="img" class="form-control-file" id="image_upload">
                </div>
                <div class="float-right">
                <button type="submit" class="btn btn-primary confirm-edit">Submit</button>
                </div>
            <?php echo form_close(); ?>
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