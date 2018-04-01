<div class="">
    
    <div class="panel panel-default">
        <div class="panel-heading">
        <h2 class="panel-title">Edit Barangay Council Member</h2>
        </div>
      
        <div class="panel-body">
        <div class="panel-body">
      
        <?php echo validation_errors();?>
        <?php echo form_open_multipart('admins/editcouncil/'.$row['id'],['id' => "myform"]);?>
        <?php if($this->session->flashdata('error')): ?>
        <span class="text-danger">
        <?php echo $this->session->flashdata('error'); ?>
        </span>
        <?php elseif($this->session->flashdata('errorfiletype')): ?>
        <span class="text-danger">
        <?php echo $this->session->flashdata('errorfiletype'); ?>
        </span>
        <?php endif; ?>
            <div class="form-group">
            <?php if($this->session->flashdata('error')): ?>
            <span class="text-danger">*</span>
            <?php endif; ?>
                <label for="CName">Council Member Name</label>
                <input type="text" name="CName" class="form-control" id="title" value="<?php echo $row['name']; ?>" >
            </div>
            <div class="form-group">
            <?php if($this->session->flashdata('error')): ?>
            <span class="text-danger">*</span>
            <?php endif; ?>
                <label for="news_title">Council Member Position</label>
                <select name="CTitle"  class="form-control" id="" >
                   <option hidden value="<?php if(!empty($row['title'])):?><?php echo $row['title']?><?php endif;?>" 
                    selected=""><?php if(!empty($row['title'])):?><?php echo $row['title'];?> 
                    <?php else: ?>-- select an option --
                    <?php endif;?>
                                                     
                    </option>
                    <option value="Kapitan">Kapitan</option> 
                    <option value="Kagawad">Kagawad</option>
                    <option value="Kalihim">Kalihim</option>
                    <option value="Ingat-Yaman">Ingat-Yaman</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
            <div class="form-group">
            <?php if($this->session->flashdata('error')): ?>
            <span class="text-danger">*</span>
            <?php endif; ?>
                <label for="CCommit">Council Member Committee</label>
                <input type="text" name="CCommit" class="form-control" id="title" value="<?php echo $row['committee'];?>" >
            </div>
            <div class="form-group">
            <?php if($this->session->flashdata('error')): ?>
            <span class="text-danger">*</span>
            <?php endif; ?>
                <label> Image</label>
                <input type="file" name="CImg" class="form-control-file" >
            </div>
            <div class="float-right">
            <button type="submit" class="btn btn-primary confirm-edit">Submit</button>
            </div>
        </form>
        
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
