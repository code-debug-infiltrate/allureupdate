$(document).ready(function() {

   var delay = 2000;

      //Forgot Pass Form Action
      $('#forgot').click(function(e){

         e.preventDefault();


         //Process And Validate EMail    
         var email = $('#email').val();
         if(email == ''){
             $('.formError_box').html(
               '<span style="color:red;">Enter Your Registered Email ID!</span>'
             );
            $('#email').focus();
            return false;
         }
         if( $("#email").val()!='' ){
            if( !isValidEmailAddress( $("#email").val() ) ){
               $('.formError_box').html(
                  '<span style="color:red;">Provided Email ID Is Incorrect!</span>'
                );
               $('#email').focus();
               return false;
            }
         }

         var ip = $('#ip').val();
         var ua = $('#ua').val();

         var url = $('#url').val();
         var url1 = $('#url1').val();

         var loginURL = url1;
         

         //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({

            type: "POST",
            url: loginURL,
            data: "ip="+ip+"&email="+email+"&ua="+ua,
            //Show Message Before Sending
            beforeSend: function() {
               $('.flash-outer').html(
				      '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
               );
               $('#loader').show();
               $('#forgot').hide('fast');
            },	

            success: function(data)
            {
               //console.log(data);
               //Process Data From Controller
               var info = JSON.parse(data);

               if (info.type == "success") {
                  
                  setTimeout(function() {
                     $('.flash-outer').html(
				            '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.message+'</div>'
                     );
                  }, delay);

               } else {

                  setTimeout(function() {
                     $('.flash-outer').html(
				            '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.message+'</div>'
                     );
                  }, delay);
                  $('#loader').hide();
                  $('#forgot').show('slow');
                  
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
 