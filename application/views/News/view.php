<div  class="container" style="background-color:white;">
<br>
    <!-- Post Content Column -->
    <div class="col-lg-12">

    <!-- Title -->
    <h1 class="mt-4"><?php echo $news['title']?></h1>

    <!-- Author -->
    <p class="lead">
        by
        <a href="#">Admin</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><?php echo $news['created_at']?></p>

    <hr>
    <!-- Preview Image -->
    <img class="img-fluid rounded" src="<?php echo base_url('assets/img/'.$news['image'])?>" style="width:80%" alt="">

    <hr>
    <br>
    <!-- Post Content -->
    <p class="lead"><?php echo $news['body']?></p>
    <small></small>
    
    </div>
    <br>
</div>
</div>
</div>
</div>
<br>