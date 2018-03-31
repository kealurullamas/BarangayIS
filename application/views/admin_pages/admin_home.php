<h2>Welcome! <?php echo $this->session->userdata('username'); ?></h2>
      <hr>
      <div class="row justify-content-center">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bullhorn"></i>
              </div>
              <div class="mr-5"><?php echo $announcementscount ?> Total Announcements</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin_pages/announcements'); ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><?php echo $citizenscount ?> Total Citizens</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin_pages/citizens'); ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-calendar"></i>
              </div>
              <div class="mr-5"><?php echo $eventscount ?> Total Events</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin_pages/events'); ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
   

   <div class="row justify-content-center">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                    <i class="fa fa-fw fa-image"></i>
                    </div>
                    <div class="mr-5"><?php echo $imagescount ?> Total Images in Gallery</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin_pages/gallery'); ?>">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-newspaper-o"></i>
              </div>
              <div class="mr-5"><?php echo $newscount ?> Total News</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin_pages/news'); ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-gavel"></i>
              </div>
              <div class="mr-5"><?php echo $projectscount ?> Total Projects</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin_pages/projects'); ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

    </div>
    