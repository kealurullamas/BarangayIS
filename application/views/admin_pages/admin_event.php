        <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <?php endif;?>

    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Events</h3>
        </div>
        <div class="panel-body">
            <div id="calendar"></div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Event</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php echo form_open('events/add_event'); ?>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                            <label>Start Date</label>
                            <input type="text"  class="form-control" name="startdate" id="startdate">
                            <label>End Date</label>
                            <input type="text"  class="form-control" name="enddate" id="enddate">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" style="color:white" class="btn btn-primary">Confirm</button>
                        </div>
                        <?php echo form_close();?>
                    </div>
                    </div>
        </div> 

        
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true"> -->
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit / Delete Event</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php echo form_open('events/edit_event'); ?>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                                <div class="col-md-8 ui-front">
                                    <input type="text" class="form-control" name="title" value="" id="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Description</label>
                                <div class="col-md-8 ui-front">
                                    <input type="text" class="form-control" name="description" id="edit_description">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="start_date" id="start_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="end_date" id="end_date">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="delete" value="1">
                                    </div>
                            </div>
                        <input type="hidden" name="eventid" id="event_id" value="0" />
                        </div>

                        
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" style="color:white" class="btn btn-primary">Confirm</button>
                        </div>
                        <?php echo form_close();?>
                    </div>
                    </div>
        </div>  
