
<div class="containerbis">
  <h2>News Flash</h2>
  <!---<p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>-->            
  <table class="table">
    <tbody>
      <?php foreach($News as $news): ?>
        <tr>
            <td><img style="width:100%" src="<?php echo base_url('assets/img/'.$news->image)?>" alt=""></td>
            <td><h1><?php echo $news->title?></br></h1><?php echo word_limiter($news->body,20)?>
            <p><a class="btn btn-primary" href="<?php echo site_url('/news/'.$news->slug)?>">Read More</a></p></td>
            
        </tr>
      <?php endforeach?>
      
    </tbody>
 
  </table>
 <br>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <h6 style="color:black"><?php echo $links;?></h6>
  </ul>
  </nav>
  
</div>
</div>
</div>
<br>