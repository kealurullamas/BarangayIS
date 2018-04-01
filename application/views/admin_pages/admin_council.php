<?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Updated Successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <?php endif;?>
        <?php if($this->session->flashdata('deletesuccess')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Deleted Successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <?php endif;?>
         <!--DataTables Card-->
        <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Councils</div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Committee</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Committee</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach($councils as $council): ?>
                    <tr>
                    <td style="width: 20%"><?php echo $council['name'] ?></td>
                    <td style="width: 20%"><?php echo $council['title']; ?></td>
                    <td style="width: 20%"><?php echo $council['committee']; ?></td>
                    <td style="width: 15%"><img src="<?php echo base_url().'assets/img/barangay_council/'.$council['image']?>" alt="<?php $council['image'] ?>" class="img-responsive" height="100" width="150"></td>
                    <td style="width: 25%" align="center">
                        <a href="<?php echo base_url('Admin_Pages/editcouncil/'.$council['id']); ?>" class="mt-1 ml-1 mb-1 btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-fw fa-edit"></i> Edit</a>
                        <button type="button" class="mt-1 ml-1 mb-1 btn btn-danger btn-sm confirm-delete" data-url="<?php echo site_url('admins/deletecouncil/')?>" data-id="<?php echo $council['id']; ?>"><i class="fa fa-fw fa-trash-o"></i> Delete</button>
                     </td>
                    </tr>
                <?php endforeach; ?>
                
                </tbody>
            </table>
            </div>
   
        <!-- Delete Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">Are you sure you want to delete this record?</div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a style="color:white" class="btn btn-primary" id="btnConfirm">Confirm</a>
                        
                        </div>
                    </div>
                    </div>
        </div>
    