
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
                            <h6><a href="<?php echo site_url('news/'.$news['slug'])?>"><?php echo $news['title']?></a></h6>
                            <small><?php echo word_limiter($news['body'],10);?><a class="label label-primary" href="<?php echo site_url('/news/'.$news['slug'])?>" >Read More</a></small>
                        </div>
                        </div><!-- End Item -->
                    <?php else:?>
                    <div class="carousel-item">
                        <img style="width:100%;  height:300" src="<?php echo base_url('assets/img/'.$news['image'])?>">
                        <div class="carousel-caption">
                        <h6><a href="<?php echo site_url('/news/'.$news['slug'])?>"><?php echo $news['title']?></a></h6>
                        <small><?php echo word_limiter($news['body'],25);?><a class="label label-primary" href="<?php echo site_url('/news/'.$news['slug'])?>" >Read More</a></small>
                        </div>
                    </div><!-- End Item -->
                    <?php endif?>
                    <?php endforeach?>
                    
                            
                </div><!-- End Carousel Inner -->
                <ul class="list-group col-sm-4">

                <div class="card text-white bg-secondary mb-3" style="max-width: 22rem;">
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
            <div class="card text-white bg-secondary mb-3" style="max-width: 22rem;">
            <div class="card-header" >Announcements</div>
            <div class="card-body">
                <div class="container">
                <ul class="list-group" >
                    <?php foreach($Announcements as $annoucement):?>
                    <li><small><a class="cardlink" href="<?php echo site_url('announcements/view/'.$annoucement['slug']);?>"><?php echo $annoucement['title'];?></a></small></li>
                    <?php endforeach;?>
                </ul>
                </div>
            </div>
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="<?php echo base_url('announcements/viewAll')?>" style="text-decoration:underline;" class="cardlink">View All</a></small>
                </div>
            </div>
            </div>

            <div class="card text-white bg-secondary mb-3" style="max-width: 22rem;">
            <div class="card-header" >News</div>
            <div class="card-body">
                <div class="container">
                <ul class="list-group" >
                    <?php foreach($News as $news):?>
                    <li><small><a class="cardlink" href="<?php echo site_url('news/view/'.$news['slug']);?>"><?php echo $news['title'];?></a></small></li>
                    
                    <?php endforeach?>
                </ul>
               
                </div>
            </div>
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="<?php echo base_url('news/view_all')?>" style="text-decoration:underline;" class="cardlink">View All</a></small>
                </div>
            </div>
            </div>

            <div class="card text-white bg-secondary mb-3" style="max-width: 22rem;">
            <div class="card-header" >Featured Sites</div>
            <div class="card-body">
                <div class="container">
                <ul class="list-group" >
                    <li><small><a class="cardlink" href="http://www.binan.gov.ph/" target="_blank">Biñan City Web Portal</a></small></li>
                    <li><small><a class="cardlink" href="https://www.facebook.com/pages/Binan-City-hall/111081312304992?ref=br_rs" target="_blank">Biñan City Hall Facebook Page</a></small></li>
                </ul>
               
                </div>
            </div>
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="#" style="text-decoration:underline;" class="cardlink">View All</a></small>
                </div>
            </div>
            </div>

            <!-- <div class="card text-white bg-secondary mb-3" style="max-width: 22rem;">
            <div class="card-header" >Events</div>
            <div class="card-body">
                <div class="container">
                    <div id="calendar"></div>
                <ul class="list-group" >
                    <li ><small>Cras justo odio</small> </li>
                    <li>Dapibus ac facilisis in</li>
                    <li>Morbi leo risus</li>
                    <li >Porta ac consectetur ac</li>
                    <li >Vestibulum at eros</li>
                </ul>
                </div>
            </div>
            </div> -->
            
        </div>
        <hr>
        <!--start of projects-->
        <!-- style="background-color:#4ca6d8; -->
        <div class="card-deck">
            <div class="card text-white bg-secondary mb-3" style="max-width: 34rem;">
            <div class="card-header" >Projects</div>
            <div class="card-body">
                <div class="container">
                <ul class="list-group" >
                    <?php foreach($projects as $project):?> 
                    <li><small><a class="cardlink" href="<?php echo site_url('projects/'.$project['project_slug'])?>"><?php echo $project['title'];?></a></small></li>
                    <?php endforeach?>
                </ul>
                </div>
            </div>
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="<?php echo base_url('projects/index')?>" style="text-decoration:underline;" class="cardlink">View All</a></small>
                </div>
            </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 34rem;">
            <div class="card-header" >Ordinance</div>
            <div class="card-body">
                <div class="container">
               <?php echo form_open('ordinances/search')?>
               <div class="form-group">
                <input type="text" name="ord" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Search for Barangay Ordinance">
                </div>
                <button type="submit"  class="btn btn-primary float-right">Submit</button>
               <?php form_close()?>
                </div>
            </div>
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="<?php echo base_url('ordinances/viewAll')?>" style="text-decoration:underline;" class="cardlink ">Ordinance</a></small>
                </div>
            </div>
            </div>
        </div>
        <hr>
        <!-- end projects -->

        <!--start events-->
        <div class="card-deck">
            <div class="card text-white bg-secondary mb-3" style="max-width: 34rem;height:28rem">
            <div class="card-header" >Barangay Events</div>
            <div class="card-body">
                <div id="calendar">
                
                </div>
            </div>
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="<?php echo base_url('events/index')?>" style="text-decoration:underline;" class="cardlink">View Events</a></small>
                </div>
            </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 34rem;height:28rem">
            <div class="card-header" >Barangay Map</div>
            <div class="card-body">
                
                <div id="map" style="width:500px;height:300px"></div>
               
            </div>
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="#" style="text-decoration:underline;" class="cardlink ">Map</a></small>
                </div>
            </div>
            </div>
        </div>
        <hr>
        <!--End events -->

        <!-- Start Gallery -->
         <div class="container">

         <div class="card text-white bg-secondary mb-3" style="max-width: 120rem;">
            <div class="card-header">Barangay Gallery</div>
            <div class="card-body">
                <div class="container">
                    <div class="row text-center text-lg-left">
                        <?php foreach($Galleries as $gallery):?>
                        <div class="card text-white bg-primary mb-3" style="max-width:15rem;margin:7px;">
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
            <div class="card-footer">
                <div class="container text-center">
                    <small><a href="<?php echo base_url('galleries/getAll')?>" style="text-decoration:underline;" class="cardlink">View All</a></small>
                </div>
            </div>
            </div>
            <br>
        </div>
        </div>
        <!--end of gallery-->
        </div>
        </div>
 <br>
