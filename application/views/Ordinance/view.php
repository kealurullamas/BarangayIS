<div class="container" style="background-color:white;height:1000px;">
<br>
<h2><?php echo $title?></h2>
    <table class="table table-bordered">
        <thead>
            <tr class="d-flex">
                <th class="col-12">Barangay Ordinance</th>
    
            </tr>
        </thead>
        <tbody>
            <tr class="d-flex">
            <td class="col-sm-12"><h6><strong>Binan City Ordinance</strong><h6><br><small><a href="http://citycouncil.binan.gov.ph/" target="_blank" >Click Here</a></small></td>
            </tr>
            <?php foreach($results as $result):?>
            <tr class="d-flex">
                <td class="col-sm-12"><h6><strong><?php echo $result['title']?></strong><h6><br><small><?php echo $result['description']?></small></td>
            </tr>
            <?php endforeach?>
           
        </tbody>
    </table>

</div>
</div>
</div>
<br>