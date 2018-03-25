
<!------ Include the above in your HEAD tag ---------->


<div class="container" style="background-color:white;">
    <br>
    
        
        <div class="card text-white bg-secondary mb-3" style="max-width: 200rem;">
            <div class="card-header">Malaban News Headlines</div>
            <div class="card-body">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                
                    <?php foreach($News as $news):?>
                    <?php if($news['id']==$News[0]['id']):?>
                        <div class="carousel-item active">
                        <img style="width:100%;  height:300" src="<?php echo base_url('assets/img/'.$news['image'])?>">
                        <div class="carousel-caption">
                            <h6><a href="#"><?php echo $news['title']?></a></h6>
                            <small><?php echo word_limiter($news['body'],10);?><a class="label label-primary" href="<?php echo site_url('/news/'.$news['slug'])?>" >Read More</a></small>
                        </div>
                        </div><!-- End Item -->
                    <?php else:?>
                    <div class="carousel-item">
                        <img style="width:100%;  height:300" src="<?php echo base_url('assets/img/'.$news['image'])?>">
                        <div class="carousel-caption">
                        <h6><a href="#"><?php echo $news['title']?></a></h6>
                        <small><?php echo word_limiter($news['body'],25);?><a class="label label-primary" href="<?php echo site_url('/news/'.$news['slug'])?>" >Read More</a></small>
                        </div>
                    </div><!-- End Item -->
                    <?php endif?>
                    <?php endforeach?>
                    
                            
                </div><!-- End Carousel Inner -->
                <ul class="list-group col-sm-4">

                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <?php if(!empty($News[0])):?>
                        <li data-target="#myCarousel" data-slide-to="0" class="list-group-item"><small><?php echo $News[0]['title'];?></small></li>
                        <?php endif?>
                    <?php if(!empty($News[1])):?>
                        <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><small><?php echo $News[1]['title'];?></small></li>
                        <?php endif?>
                    <?php if(!empty($News[2])):?>
                        <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><small><?php echo $News[2]['title'];?></small></li>
                        <?php endif?>
                    <?php if(!empty($News[3])):?>
                        <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><small><?php echo $News[3]['title'];?></small></li>
                        <?php endif?>
                    <?php if(!empty($News[4])):?>
                        <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><small><?php echo $News[4]['title'];?></small></li>
                        <?php endif?>
                    <?php if(!empty($News[5])):?>
                        <li data-target="#myCarousel" data-slide-to="5" class="list-group-item"><small><?php echo $News[5]['title'];?></small></li>
                    <?php endif?>
                </div>
                   
            </div>
            </div>

        
        

        <!-- Controls -->
        <div class="carousel-controls">
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

        </div><!-- End Carousel -->
        <hr>
        <br>

        <div class="card-deck">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Announcements</div>
            <div class="card-body">
                <div class="container">
                <ul class="list-group" >
                    <li ><small>Cras justo odio</small> </li>
                    <li>Dapibus ac facilisis in</li>
                    <li>Morbi leo risus</li>
                    <li >Porta ac consectetur ac</li>
                    <li >Vestibulum at eros</li>
                </ul>
                </div>
            </div>
            </div>

            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <div class="card-header">
                    <h6 class="card-title"><strong>Events</strong></h6>
                </div>
                <div class="container">
                <ul class="list-group" >
                    <li ><small>Cras justo odio</small> </li>
                    <li>Dapibus ac facilisis in</li>
                    <li>Morbi leo risus</li>
                    <li >Porta ac consectetur ac</li>
                    <li >Vestibulum at eros</li>
                </ul>
                </div>
            </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">News</div>
            <div class="card-body">
                <div class="container">
                <ul class="list-group" >
                    <li ><small>Cras justo odio</small> </li>
                    <li>Dapibus ac facilisis in</li>
                    <li>Morbi leo risus</li>
                    <li >Porta ac consectetur ac</li>
                    <li >Vestibulum at eros</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <!-- Start Gallery -->
         <div class="container">

            <h1 class="my-4 text-center text-lg-left">Barangay Gallery</h1>

            <div class="row text-center text-lg-left">
                <?php foreach($Galleries as $gallery):?>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="<?php echo base_url('Galleries/view/'.$gallery['slug']);?>" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/'.$gallery['image']);?>" alt="">
                    </a>
                    </div>
                <?php endforeach?>
                <a href="#" class="btn btn-primary">More</a>

                </div>
            </div>
        </div>
        <!--end of gallery-->
  </div>
    

  <!-- <div class="col-6 col-md-1 sidebar-offcanvas" id="sidebar">
  <br>
  <br>
  <br>
  <br>
        <div class="card" style="width: 19rem;">
        <div class="card-body">
        <h5>Announcements</h5>
            <div class="list-group">
                <?php foreach($Announcements as $announcement):?>
                <a href="<?php echo base_url().'announcements/view/'.$announcement['slug'];?>" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><strong><?php echo $announcement['title'];?></strong></h5>
                    </div>
                    <small><?php echo $announcement['created_at'];?></small>
                    <p class="mb-1"><?php echo word_limiter($announcement['body'],20);?></p>
                    <small>Read More</small>
                </a>
               
                <?php endforeach;?>
            </div>
            <br>
            <a href="<?php echo base_url('announcements/viewAll');?>" class="btn btn-primary">More</a>
        </div>
        </div>

  </div> -->
</div>
<br>
