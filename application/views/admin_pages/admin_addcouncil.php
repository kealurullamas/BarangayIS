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
        <h2 class="panel-title">Add Barangay Council Member</h2>
        </div>
      
        <div class="panel-body">
        <div class="panel-body">
      
        <?php echo validation_errors();?>
        <?php echo form_open_multipart('admins/create_council');?>
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
                <input type="text" name="CName" class="form-control" id="title" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <?php if($this->session->flashdata('error')): ?>
            <span class="text-danger">*</span>
            <?php endif; ?>
                <label for="news_title">Council Member Position</label>
                <select name="CTitle"  class="form-control" id="" >
                    <option disabled selected value> -- select an option -- </option>
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
                <input type="text" name="CCommit" class="form-control" id="title" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <?php if($this->session->flashdata('error')): ?>
            <span class="text-danger">*</span>
            <?php endif; ?>
                <label> Image</label>
                <input type="file" name="CImg" class="form-control-file" >
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
        </div>
       
        </div>
    </div>
</div>
