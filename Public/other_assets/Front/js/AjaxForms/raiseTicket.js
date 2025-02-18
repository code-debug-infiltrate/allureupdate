$(document).ready(function() {

   var delay = 2000;
   var uniqueid = $('#uniqueid').val();
   var username = $('#username').val();
   var email = $('#email').val();
   var ticketid = $('#ticketid').val();

   //Raise Ticket Form Action
   $('#raiseTicket').click(function(e){

      e.preventDefault();
      
      //Process IP 
      var receiver = $('#receiver').val();
      if(receiver == ''){
         $('.raiseTicket_box').html(
            '<span style="color:red;">Ticket Receiver Missing!</span>'
         );
         $('#receiver').focus();
         return false;
      }
      //Process And Validate EMail    
      var subject = $('#subject').val();
      if(subject == ''){
          $('.raiseTicket_box').html(
            '<span style="color:red;">Enter Ticket Subject!</span>'
          );
         $('#subject').focus();
         return false;
      }

      //Process User Agent        
      var details = $('#details').val();
      if(details == ''){
         $('.raiseTicket_box').html(
            '<span style="color:red;">Ticket Details Cannot Be Empty!</span>'
         );
         $('#details').focus();
         return false;
      }	

      var subURL = $('#ticketUrl').val();
      

      //Process Ajax Form Submittion Without Page Reload                
      $.ajax
      ({
         type: "POST",
         url: subURL,
         data: "uniqueid="+uniqueid+"&ticketid="+ticketid+"&username="+username+"&receiver="+receiver+"&subject="+subject+"&details="+details+"&type=Sent",
         //Show Message Before Sending
         beforeSend: function() {
            $('.raiseTicket_box').html(
               '<div class="alert alert-warning alert-dismissable"> Processing, Please Wait... </div>'
            );
            $('#raiseTicket').hide();
            $('#draftTicket').hide();
         },	

         success: function(data)
         {
            //console.log(data);
            //Process Data From Controller
       		var info = JSON.parse(data);

	       	if (info.type == "success") {
	       		setTimeout(function() {
			         $('.raiseTicket_box').html(
			       	 '<div class="alert alert-success alert-dismissable">'+info.message+'</div>'
			       	);
			      }, delay);
	       	} else {
	       		setTimeout(function() {
			         $('.raiseTicket_box').html(
			       	 '<div class="alert alert-danger alert-dismissable">'+info.message+'</div>'
			       	);
			      }, delay);
               $('#raiseTicket').show();
               $('#draftTicket').show();
	       	}
         }
      });
   });






//Raise Ticket Form Action
   $('#draftTicket').click(function(e){

      e.preventDefault();
      
      //Process IP 
      var receiver = $('#receiver').val();
      if(receiver == ''){
         $('.draftTicket_box').html(
            '<span style="color:red;">Ticket Receiver Missing!</span>'
         );
         $('#receiver').focus();
         return false;
      }
      //Process And Validate EMail    
      var subject = $('#subject').val();
      if(subject == ''){
          $('.draftTicket_box').html(
            '<span style="color:red;">Enter Ticket Subject!</span>'
          );
         $('#subject').focus();
         return false;
      }

      //Process User Agent        
      var details = $('#details').val();
      if(details == ''){
         $('.draftTicket_box').html(
            '<span style="color:red;">Ticket Details Cannot Be Empty!</span>'
         );
         $('#details').focus();
         return false;
      }  

      var subURL = $('#ticketUrl').val();
      

      //Process Ajax Form Submittion Without Page Reload                
      $.ajax
      ({
         type: "POST",
         url: subURL,
         data: "uniqueid="+uniqueid+"&ticketid="+ticketid+"&username="+username+"&receiver="+receiver+"&subject="+subject+"&details="+details+"&type=Draft",
         //Show Message Before Sending
         beforeSend: function() {
            $('.draftTicket_box').html(
               '<div class="alert alert-warning alert-dismissable"> Processing, Please Wait... </div>'
            );
            $('#raiseTicket').hide();
            $('#draftTicket').hide();
         }, 

         success: function(data)
         {
            console.log(data);
            //Process Data From Controller
            var info = JSON.parse(data);

            if (info.type == "success") {
               setTimeout(function() {
                  $('.draftTicket_box').html(
                   '<div class="alert alert-success alert-dismissable">'+info.message+'</div>'
                  );
               }, delay);
            } else {
               setTimeout(function() {
                  $('.draftTicket_box').html(
                   '<div class="alert alert-danger alert-dismissable">'+info.message+'</div>'
                  );
               }, delay);
               $('#raiseTicket').show();
               $('#draftTicket').show();
            }
         }
      });
   });









   });



    //Email Validation Function	
    /*function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    };*/
 