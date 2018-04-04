<div class="col-sm-1"></div>

<div class="row">
<div class="col-sm-1"></div>
  <div class="col-sm-10">
  <div class="container" style="background-color:#007bff">
            <div class="row">
            <div class="col-sm-3"></div>
                <div class=" col-sm-2">
                  <br>
                    <h6 style="color:white">Barangay Malaban</h6>
                    <hr>
                    <ul style="list-style-type: none;">
                        <li><small><a href="<?php echo base_url('Pages/view/mission_and_vision')?>" class="cardlink">Mission and Vision</a></small></li>
                        <li><small><a href="<?php echo base_url('Pages/view/barangay_council')?>" class="cardlink">Barangay Council</a></small></li>
                        <li><small><a href="<?php echo base_url('Pages/view/barangay_profile')?>" class="cardlink">Barangay Profile</a></small></li>
                        <li><small><a href="<?php echo base_url('ordinances/viewAll')?>" class="cardlink"> Ordinance</a></small></li>
                    </ul>
                </div>
                <div class=" col-sm-2 ">
                <br>
                <h6 style="color:white">Featured Pages</h6>
                  <hr>
                    <ul style="list-style-type: none;">
                        <li><small><a href="<?php echo base_url('news/view_all')?>" class="cardlink">News Page</a></small></li>
                        <li><small><a href="<?php echo base_url('events/index')?>" class="cardlink">Events Page</a></small></li>
                        <li><small><a href="<?php echo base_url('projects/index')?>" class="cardlink">Projects Page</a></small></li>
                        <li><small><a href="<?php echo base_url('galleries/getAll')?>" class="cardlink">Gallery Page</a></small></li>
                        <li><small><a href="<?php echo base_url('Pages/view/Map')?>" class="cardlink">Map Page</a></small></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                <br>
                <h6 style="color:white">Contac Info.</h6>
                  <hr>
                    <ul style="list-style-type: none;">
                        <li><small style="color:white">Telephone:(000)000-0000</small></li>
                        <li><small style="color:white">Mobile: <br> 0000-000-0000 </small></li>
                        <li><small style="color:white">Email: <br> sample@yahoo.com</small></li>

                    </ul>
                </div>
                <div class="col-sm-3"></div>
            </div>
            <!--/.row--> 
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6"><small style="color:white" > Copyright © 2018. All right reserved | Web Portal: Barangay Malaban Binan City, Laguna</small> </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
  </div>
  <div class="col-sm-1"></div>
</div>
<!-- JavaScript Libraries -->
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.348342, lng: 121.089588},
          zoom: 15
        });
        var marker = new google.maps.Marker({
          position: {lat: 14.346299, lng: 121.088922},
          map: map,
          title: 'Malaban Barangay Hall'
        });

        google.maps.event.addListener(marker, 'click', function() {
        map.panTo(this.getPosition());
        map.setZoom(17);
        });  
      }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQX5iXvmbFBLQORPDwkqXyhWJ7t6iqfgU&callback=initMap"
    async defer></script>

  <script>
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .then( editor => {
          console.log( editor );
      } )
      .catch( error => {
          console.error( error );
      } );
  </script>
  
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/hoverIntent.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/superfish.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/magnific-popup/magnific-popup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/sticky/sticky.js')?>"></script>
  <script src="<?php echo base_url('assets/js/news_carousel.js')?>"></script>
  <script src="<?php echo base_url('assets/js/photo_gallery.js')?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/calendar/fullcalendar.min.css') ?>" />
  <script src="<?php echo base_url('assets/calendar/lib/moment.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/calendar/fullcalendar.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/calendar/gcal.js') ?>"></script>
  <script src="<?php echo base_url('assets/getorgchart/getorgchart.js')?>"></script>
  <link href="<?php echo base_url('assets/getorgchart/getorgchart.css')?>" rel="stylesheet" />


<!--org chart-->
<script>
      $.getJSON("<?php echo base_url('councils/get_council')?>", function (source) {
            var peopleElement = document.getElementById("people");
            var orgChart = new getOrgChart(peopleElement, {
                color: "lightblue",
                enableDetailsView: false,		
                siblingSeparation: 200,
                enableSearch:false,
                scale: 0.5,
                layout: getOrgChart.MIXED_HIERARCHY_RIGHT_LINKS,
                enableEdit: false,
                photoFields: ["pic"],
                primaryFields: ["name", "title", "committee"],
                dataSource: source
            });
        });
   
</script>
   
<!--small calendar-->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#calendar').fullCalendar({
          height: 300,
          eventRender: function(eventObj, $el) {
                $el.popover({
                title: eventObj.title,
                content: eventObj.description,
                trigger: 'hover',
                placement: 'top',
                container: 'body'
                });
            },
          eventSources: [
            {
              events: function(start, end, timezone, callback) {
                  $.ajax({
                  url: '<?php echo base_url('events/get_events') ?>',
                  type: 'POST',
                  dataType: 'json',
                  data: {
                  // our hypothetical feed requires UNIX timestamps
                  start: start.unix(),
                  end: end.unix()
                  },
                  success: function(msg) {
                      var events = msg.events;
                      callback(events);
                  }
                  });
              }
            },
          ]
        });
        
    });
  </script>

  <!--big calendar-->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#calendar-big').fullCalendar({
          eventRender: function(eventObj, $el) {
                $el.popover({
                title: eventObj.title,
                content: eventObj.description,
                trigger: 'hover',
                placement: 'top',
                container: 'body'
                });
            },
          eventSources: [
            {
              events: function(start, end, timezone, callback) {
                  $.ajax({
                  url: '<?php echo base_url('events/get_events') ?>',
                  type: 'POST',
                  dataType: 'json',
                  data: {
                  // our hypothetical feed requires UNIX timestamps
                  start: start.unix(),
                  end: end.unix()
                  },
                  success: function(msg) {
                      var events = msg.events;
                      callback(events);
                  }
                  });
              }
            },
          ]
        });
        
    });
  </script>
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body>
</html>