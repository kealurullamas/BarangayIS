<div class="container" style="background-color:white;height:3000px">
<br>
<h2>Barangay Malaban Gallery</h2>
    <div class="container">
    <div class="row text-center text-lg-left">
        <?php foreach($galleries as $gallery):?>
        <div class="card text-white bg-primary mb-3" style="max-width:34rem;margin:1px;">
        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$gallery['image']);?>" alt="Card image cap">
        <div class="card-body">
        <h6 class="card-title"><?php echo $gallery['title']?></h6>
        </div>
        <div class="card-footer">
        <small>Uploaded at: <?php echo $gallery['uploaded_at'];?></small>
        </div>
        </div>
        <?php endforeach?>
        </div>
        <br>
    </div>
</div>
</div>
</div>
<br>