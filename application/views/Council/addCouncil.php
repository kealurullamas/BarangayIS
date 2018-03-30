<div class="container" style="background-color:white;height:1250px;">
<br>
    <div class="container">
        <h2>Add Barangay Council Member</h2>
        <br>
        <?php echo validation_errors();?>
        <?php echo form_open_multipart('councils/create_council');?>
            <div class="form-group">
                <label for="CName">Council Member Name</label>
                <input type="text" name="CName" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Council Member Name">
            </div>
            <div class="form-group">
                <label for="news_title">Council Member Position</label>
                <select name="CTitle"  class="form-control" id="" placeholder="Enter Council Member Position">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="Kapitan">Kapitan</option> 
                    <option value="Kagawad">Kagawad</option>
                    <option value="Kalihim">Kalihim</option>
                    <option value="Ingat-Yaman">Ingat-Yaman</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
            <div class="form-group">
                <label for="CCommit">Council Member Committee</label>
                <input type="text" name="CCommit" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Council Member Committee">
            </div>
            <div class="form-group">
                <label> Image</label>
                <input type="file" name="CImg" class="form-control-file" >
            </div>
            <button type="submit"  class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
<br>