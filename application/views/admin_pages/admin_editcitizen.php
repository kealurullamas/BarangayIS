<div class="">
    
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Edit Citizen</h3>
        </div>
        
        <div class="panel-body">
        <div class="panel-body">
            <?php $attributes = ['id' => 'myform'];?>
            <?php echo form_open('admins/updatecitizen/'.$row['id'], $attributes); ?>
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger"><?php echo $this->session->flashdata('error') ?></span>
                <?php endif;?>
                <div class="form-group">
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger">*</span>
                <?php endif; ?>
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'] ?>">
                </div>
                <div class="form-group">
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger">*</span>
                <?php endif; ?>
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']?>">
                </div>
                <div class="form-group">
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger">*</span>
                <?php endif; ?>
                <label>Middle Name</label>
                <input name="middlename" class="form-control" value="<?php echo $row['middlename']?>">
                </div>
                <div class="form-group">
                <?php if($this->session->flashdata('error')): ?>
                <span class="text-danger">*</span>
                <?php endif; ?>
                <label>Address</label>
                <input name="address" class="form-control" value="<?php echo $row['address']?>">
                </div>
                <div class="form-group">
                <label>Contact</label>
                <input name="contact" class="form-control" value="<?php echo $row['contact']?>">
                </div>
                <div class="form-group">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <label>Father</label>
                            <?php foreach($citizens as $citizen): ?>
                                    <?php if($citizen['name_slug'] == $row['father'] ): ?>
                                        <?php $fathername = $citizen['lastname'] . ', ' . $citizen['firstname'] . ' ' . $citizen['middlename'];?>
                                        <?php $fatherslug = $citizen['name_slug']; ?>
                                        <?php endif; ?>
                                    <?php if($citizen['name_slug'] == $row['mother'] ): ?>
                                        <?php $mothername = $citizen['lastname'] . ', ' . $citizen['firstname'] . ' ' . $citizen['middlename'];?>
                                        <?php $motherslug = $citizen['name_slug']; ?>
                                    <?php endif; ?>
                            <?php endforeach; ?>  

                        <select class="combobox mySelect input-large form-control" name="father" >
                            <option value="<?php if(!empty($row['father'])):?><?php echo $fatherslug?><?php endif;?>" 
                            selected=""><?php if(!empty($row['father'])):?><?php echo $fathername?> 
                                                     
                            <?php else: ?>Select a Person
                            <?php endif;?>
                            
                            </option>

                            <?php foreach($citizens as $citizen): ?>
                            <?php if($citizen['gender'] == 'Male'): ?>
                            <option value="<?php echo $citizen['name_slug'];?>"><?php echo $citizen['lastname'] . ', ' . $citizen['firstname'] . ' ' . $citizen['middlename'];?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>                    
                        </select>
                    </div>
                    <div class="col-6 col-md-4">
                        <label>Mother</label>
                        <select class="combobox mySelect input-large form-control" name="mother">
                            <option value="<?php if(!empty($row['mother'])):?><?php echo $motherslug?><?php endif;?>" 
                            selected=""><?php if(!empty($row['mother'])):?><?php echo $mothername?> 
                                                     
                            <?php else: ?>Select a Person
                            <?php endif;?>
                            
                            </option>
                            <?php foreach($citizens as $citizen): ?>
                            <?php if($citizen['gender'] == 'Female'): ?>
                            <option value="<?php echo $citizen['name_slug'];?>"><?php echo $citizen['lastname'] . ', ' . $citizen['firstname'] . ' ' . $citizen['middlename'];?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>      
                        </select>
                    </div>
                </div>
               
                
                <div class="float-right">
                <button type="submit" id="btnEdit"class="btn btn-primary confirm-edit">Submit</button>
                </div>
            <?php echo form_close(); ?>
        </div>
        </div>
    </div>
</div>

 <!-- Edit Modal-->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
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