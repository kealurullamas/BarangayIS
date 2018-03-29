<div  class="container" style="background-color:white;height:800px">
<br>
    <h2><?php echo $title?></h2>
    <table class="table table-bordered">
        <thead>
            <tr class="d-flex">
                <th class="col-sm-2">Project Title</th>
                <th class="col-sm-2">Project Objective</th>
                <th class="col-sm-2">Project Description</th>
                <th class="col-sm-2">Project Location</th>
                <th class="col-sm-2">Project Budget</th>
                <th class="col-sm-2">Project Fund Source</th>
               
            </tr>
        </thead>
        <tbody>
            <tr class="d-flex">
                <th class="col-sm-2"><?php echo $project['title']?></th>
                <th class="col-sm-2"><?php echo $project['objective']?></th>
                <th class="col-sm-2"><?php echo $project['description']?></th>
                <th class="col-sm-2"><?php echo $project['location']?></th>
                <th class="col-sm-2"><?php echo $project['budget']?></th>
                <th class="col-sm-2"><?php echo $project['fund_source']?></th>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<br>