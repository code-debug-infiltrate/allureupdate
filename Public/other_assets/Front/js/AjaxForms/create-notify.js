$(document).ready(function() {

   var delay = 2000;

      //Subscribe Form Action
      $('#newNotify').click(function(e){

         e.preventDefault();
            
         var uniqueid = $('#uniqueid').val();
         var username = $('#username').val();
         
         //Process ID 
         var subject = $('#subject').val();
         if(subject == ''){
            $('.message_box').html(
               '<span style="color:red;">Subject Cannot Be Empty!</span>'
            );
            $('#subject').focus();
            return false;
         }


         //Username Process
         var details = $('#details').val();
         if(details == ''){
            $('.message_box').html(
               '<span style="color:red;">Details Cannot Be Empty!</span>'
            );
            $('#details').focus();
            return false;
         }

         //Profile Process
         var profile = $('#profile').val();
         if(profile == ''){
            $('.message_box').html(
               '<span style="color:red;">Profile Cannot Be Empty!</span>'
            );
            $('#profile').focus();
            return false;
         }

         //Status Process
         var status = $('#status').val();
         if(status == ''){
            $('.message_box').html(
               '<span style="color:red;">Status Cannot Be Empty!</span>'
            );
            $('#status').focus();
            return false;
         }

         var subURL = $('#url').val();
         

         //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({

            type: "POST",
            url: subURL,
            data: "uniqueid="+uniqueid+"&username="+username+"&subject="+subject+"&profile="+profile+"&status="+status+"&details="+details,
            //Show Message Before Sending
            beforeSend: function() {
               $('.message_box').html(
                  '<div class="alert alert-warning alert-dismissable"> Processing, Please Wait.. </div>'
               );
               $('#newNotify').hide();
            },	

            success: function(data)
            {
               //Process Data From Controller
          		var info = JSON.parse(data);

   	       	if (info.type == "success") {
   	       		setTimeout(function() {
   			         $('.message_box').html(
   			       	 '<div class="alert alert-success alert-dismissable">'+info.message+'</div>'
   			       	);
   			      }, delay);
   	       	} else {
   	       		setTimeout(function() {
   			         $('.message_box').html(
   			       	 '<div class="alert alert-danger alert-dismissable">'+info.message+'</div>'
   			       	);
   			      }, delay);
                  $('#newNotify').show('slow');
   	       	}
            }
         });
      });










   });



    //Email Validation Function	
    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    };
 