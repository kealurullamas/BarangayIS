<div class="col-sm-1"></div>

<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by BootstrapMade
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->

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
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/calendar/fullcalendar.min.css" />
  <script src="<?php echo base_url() ?>assets/calendar/lib/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/calendar/fullcalendar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/calendar/gcal.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#calendar').fullCalendar({

          height: 300,
          eventRender: function(event, element) {
              $(element).tooltip({title: event.title});             
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