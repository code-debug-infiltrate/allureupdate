$(document).ready(function() {

   var delay = 2000;

      //Subscribe Form Action
      $('#emailVerify').click(function(e){

         e.preventDefault();
         
         //Process IP 
         var ip = $('#ip').val();
         if(ip == ''){
            $('.message_box').html(
               '<span style="color:red;">IP Address Missing!</span>'
            );
            $('#ip').focus();
            return false;
         }
         //Process And Validate EMail    
         var email = $('#email').val();
         if(email == ''){
             $('.message_box').html(
               '<span style="color:red;">Enter Email Address!</span>'
             );
            $('#email').focus();
            return false;
         }
         if( $("#email").val()!='' ){
            if( !isValidEmailAddress( $("#email").val() ) ){
               $('.message_box').html(
                  '<span style="color:red;">Provided email address is incorrect!</span>'
                );
               $('#email').focus();
               return false;
            }
         }
         //Process User Agent        
         var ua = $('#ua').val();
         if(ua == ''){
            $('.message_box').html(
               '<span style="color:red;">User Agent Distorted!</span>'
            );
            $('#ua').focus();
            return false;
         }	

         var subURL = $('#url').val();
         

         //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({

            type: "POST",
            url: subURL,
            data: "ip="+ip+"&email="+email+"&ua="+ua,
            //Show Message Before Sending
            beforeSend: function() {
               $('.flash-outer').html(
				      '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>   Processing, Please Wait.. </div>'
               );
               $('#emailVerify').hide();
            },	

            success: function(data)
            {
               //console.log(data);
               //Process Data From Controller
          		var info = JSON.parse(data);

   	       	if (info.type == "success") {
   	       		setTimeout(function() {
   			         $('.flash-outer').html(
				      '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  '+info.message+'</div>'
   			       	);
   			      }, delay);
                  $('#emailVerification').hide('slow');
   	       	} else {
   	       		setTimeout(function() {
   			         $('.flash-outer').html(
				      '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  '+info.message+'</div>'
   			       	);
   			      }, delay);
                  $('#emailVerify').show('slow');
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
 