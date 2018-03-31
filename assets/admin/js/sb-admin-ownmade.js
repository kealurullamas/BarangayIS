


$(document).ready(function(){
	$('.mySelect').combobox()
  

    // delete confirmation in an alert message
    // function delete_news(id, title){
    //       if(confirm('Are you sure to delete this news? (News Title: "'+title+'")'))
    //       {
    //         // ajax delete data from database
    //           $.ajax({
    //             url : "<?php echo site_url('admins/deletenews')?>/"+id,
    //             type: "POST",
    //             dataType: "JSON",
    //             success: function(data)
    //             {
    //               location.reload();
    //             },
    //             error: function (jqXHR, textStatus, errorThrown)
    //             {
    //                 alert('Error deleting data');
    //             }
    //         });

    //       }
    // }
    
    $('#GAS_Name').on('click', function(e){
        e.preventDefault();
        if($('#GAS_NameBody').is(':hidden')) {
            $('div #GAS_Name').html('Hide <a class="fa fa-fw fa-window-minimize"></a>');
        }
        else{
            $('div #GAS_Name').html('Edit <a class="fa fa-fw fa-window-maximize"></a>');
        }
        $('#GAS_NameBody').fadeToggle();
        
    });
    $('#GAS_Username').on('click', function(e){
        e.preventDefault();
        if($('#GAS_UsernameBody').is(':hidden')){
            $('div #GAS_Username').html('Hide <a class="fa fa-fw fa-window-minimize"></a>');
        }
        else{
            $('div #GAS_Username').html('Edit <a class="fa fa-fw fa-window-maximize"></a>');
        }
        $('#GAS_UsernameBody').fadeToggle();
    });
    
    $('#SAL_Login').on('click', function(e){
        e.preventDefault();
        if($('#SAL_LoginBody').is(':hidden')) {
            $('div #SAL_Login').html('Hide <a class="fa fa-fw fa-window-minimize"></a>');
        }
        else{
            $('div #SAL_Login').html('Hide <a class="fa fa-fw fa-window-maximize"></a>');
        }
        $('#SAL_LoginBody').fadeToggle();
    });

    $('#adduserfor').validate({
        rules: {
                    AddAdmin_username: {
                        required: true,
                        
                    },
                    AddAdmin_password: {
                        required: true,
                        
                    },
                    AddAdmin_confirmpassword:{
                        required: true,
                        equalTo: '#AddAdmin_passwordID'
                        
                    }
                },
                highlight: function (element) {
                    $(element).closest('.form-group').addClass('has-error');
                    $(element).addClass('select-class');                      
                
                },
                unhighlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-error');
                    $(element).removeClass('select-class');   
                },
                errorClass: 'help-block',
           
                
              
      });

      
      $('#adduserModal').on('hidden.bs.modal', function () {
        var validator = $('#adduserform').validate();
        validator.resetForm();
        $('input').removeClass('select-class');  
        $('input').val("");
        
      });
      

    $('.topbar').on('click', '#adduser', function(e){
        e.preventDefault();

        $('#adduserModal').modal('show');
    });
    

    $( '.alert').show().fadeOut( 5000 );
    
    $('.panel-body').on('click', '.confirm-edit', function(e) {
        e.preventDefault();
   
        $('#editModal').modal('show');
    });

    $('.panel-body').on('click', '.confirm-edituname', function(e) {
        e.preventDefault();
   
        $('#editModaluname').modal('show');
    });

    $('.panel-body').on('click', '.confirm-editpw', function(e) {
        e.preventDefault();
   
        $('#editModalpw').modal('show');
    });

    $('#btnUpdate').click(function() {
        $("#myform" ).submit();
    });
    $('#btnUpdateuname').click(function() {
        $("#myform2" ).submit();
    });
    $('#btnUpdatepw').click(function() {
        $("#myform3" ).submit();
    });
 
   // delete confirmation using a modal
      //pass data from to modal
      $('#dataTable').on('click', '.confirm-delete', function(e) {
          e.preventDefault();
     
          
          var id = $(this).data('id');
          var url = $(this).data('url');
          
          $('#deleteModal').data('id', id).modal('show');
          $('#deleteModal').data('url', url);
      });

   

      //button in a modal
      $('#btnConfirm').click(function() {
          var id = $('#deleteModal').data('id');
          var url = $('#deleteModal').data('url');
          var babycomeback = "YOHOHO";
          $('#deleteModal').modal('hide');
         
          $.ajax({
                  url : url+id,
                  type: "POST",
                  dataType: "JSON",
                  
                  success: function(data, textStatus)
                  {
                    location.reload();
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      alert('Error deleting data');
                  }
              });
      });

      $('#dataTable').on('click', '.view-profile', function(e){
          e.preventDefault();

        var profile = $(this).data('profile');
        var citizens = $(this).data('citizens');

            $('#familyModal').on('click', '#btnClose', function(e){
                e.preventDefault();
                $('#familyModal').modal('hide');
            });
       
            $('#familyModal').modal('show');
            
            $('#lastname').val(profile['lastname']);
            $('#firstname').val(profile['firstname']);
            $('#middlename').val(profile['middlename']);
            $('#gender').val(profile['gender']);
            $('#address').val(profile['address']);
            $('#contact').val(profile['contact']);
            // console.log("ma name is"+profile['name_slug']);
            
            var html = '';
            for(var i = 0; i < citizens.length; i++){
               
                if(profile['name_slug']==citizens[i][2]){
            html += '<tr><td>' + citizens[i][0]['lastname'] + 
                    '</td><td>' + citizens[i][0]['firstname'] +
                    '</td><td>' + citizens[i][0]['middlename'] +
                    '</td><td>' + citizens[i][0]['gender'] +
                    '</td><td>' + citizens[i][0]['address'] +
                    '</td><td>' + citizens[i][0]['contact'] + 
                    '</td><td>' + citizens[i][1] +'</td></tr>';
                }
            }
            $('#familyTable tbody').append(html);  
      });
   
    $('#familyModal').on('hidden.bs.modal', function() {
        $('#familyModal').modal('hide');
        $('#familyTable tbody').children().remove();
        
    });

    var calendar = $('#calendar');
    $(calendar).fullCalendar({
        header:{
            left: 'prev, next, today',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
        },
        
        theme: true,    
        themeSystem:'bootstrap4',        
        height: 500,
        selectable: true,
        selectHelpter: true,
        editable: true,
        eventColor: '#378006',
        eventLimit: true,
        eventSources: [
            {
                events: function(start, end, timezone, callback) {
                    $.ajax({
                        url: GLOBAL_BASEURL + 'events/get_allevents',
                        dataType: 'json',
                        data: {                
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
            ],
        // dayClick: function(date, jsEvent, view) {
        //     // alert('clicked ' + date.format() );
        //   },
        select: function(startDate, endDate, jsEvent, view, resource) {
            // alert('selected ' + startDate.format("MM/DD/YYYY HH:mm") + ' to ' + endDate.format("MM/DD/YYYY HH:mm") );
            $('#addModal').modal('show');
            $('#addModal #startdate').val(startDate.format("YYYY/MM/DD HH:mm"));
            $('#addModal #enddate').val(endDate.format("YYYY/MM/DD HH:mm"));

        },
        eventClick: function(event, jsEvent, view) {
            $('#title').val(event.title);
            $('#edit_description').val(event.description);
            $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
            if(event.end) {
            $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
            } else {
            $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
            }
            $('#event_id').val(event.id);
            $('#editModal').modal('show');
        }
        
    });
    
      


   
});  

