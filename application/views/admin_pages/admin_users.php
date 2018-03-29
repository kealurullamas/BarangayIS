

<!--DataTables users-->
<div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Users
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                
                <?php foreach($users as $user): ?>
                <?php if($user['type'] == 'Admin'):?>
                    <tr>
                    <td style="width: 30%"><?php echo $user['username'] ;?></td>
                    <td style="width: 30%"><?php echo $user['firstname'] .' '. $user['lastname'] ;?></td>
                    <td style="width: 20%"><?php echo $user['type']; ?></td>
                    <td style="width: 20%" align="center">
                        <button type="button" class="mt-1 ml-1 mb-1 btn btn-danger btn-sm confirm-delete" data-url="<?php echo site_url('admins/deleteuser/')?>" data-id="<?php echo $user['id']; ?>"><i class="fa fa-fw fa-trash-o"></i> Delete</button>
                     </td>
                    </tr>
                <?php endif;?>
                <?php endforeach; ?>
            
                </tbody>
            </table>
            </div>
        </div>
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
