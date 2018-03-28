<div class="container">
   <?php echo validation_errors();?>
   <?php echo form_open('projects/create');?>
    <div class="form-group">
        <label >Project Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Project Title">
    </div>
    <div class="form-group">
        <label>Project Objective</label>
        <input type="text" name="projObj" class="form-control" placeholder="Project Description">
    </div>
    <div class="form-group">
        <label >Project Description</label>
        <textarea name="projDesc" ></textarea>
    </div>
    <div class="form-group">
        <label>Project Location</label>
        <input type="text" name="projLoc" class="form-control" placeholder="Project Description">
    </div>
    <div class="form-group">
        <label>Project Budget</label>
        <input type="text" name="projBud" class="form-control" placeholder="Project Description">
    </div>
    <div class="form-group">
        <label>Project Fund Source</label>
        <input type="text" name="projSource" class="form-control" placeholder="Project Description">
    </div>
    <button type="submit"  class="btn btn-primary">Submit</button>
    </form>
</div>