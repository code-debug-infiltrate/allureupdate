$(document).ready(function() {

   var delay = 2000;

      //Forgot Pass Form Action
      $('#reset').click(function(e){

         e.preventDefault();


         //Process And Validate Code    
         var code = $('#code').val();
         if(code == ''){
             $('.formError_box').html(
               '<span style="color:red;">Enter Four to Six Digits OTP!</span>'
             );
            $('#code').focus();
            return false;
         }
         if(code.length < 4 || code.length > 6){
            $('.formError_box').html(
               '<span style="color:red;">Code Must Be Between 4 to 6 Characters</span>'
            );
            $('#code').focus();
            return false;
         }

         //Process And Validate EMail    
         var password = $('#password').val();
         if(password == ''){
             $('.formError_box').html(
               '<span style="color:red;">Password Cannot Be Empty</span>'
             );
            $('#password').focus();
            return false;
         }
         if(password.length < 5 || password.length > 40){
            $('.formError_box').html(
               '<span style="color:red;">Password Must Be Between 5 to 40 Characters</span>'
            );
            $('#password').focus();
            return false;
         }

         var email = $('#email').val();
         var ua = $('#ua').val();

         var url = $('#url').val();
         var url1 = $('#url1').val();

         var loginURL = url+url1;
         

         //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({

            type: "POST",
            url: loginURL,
            data: "password="+password+"&email="+email+"&code="+code,
            //Show Message Before Sending
            beforeSend: function() {
               $('.flash-outer').html(
				      '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Processing, Please Wait... </div>'
               );
               $('#loader').show();
               $('#reset').hide('fast');
            },	

            success: function(data)
            {
               //console.log(data);
               //Process Data From Controller
               var info = JSON.parse(data);

               if (info.result_info.type == "success") {
                  
                  setTimeout(function() {
                     $('.flash-outer').html(
				            '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
                  }, delay);
                  $('#resetForm').hide();
                  $('#loginForm').show();

               } else {

                  setTimeout(function() {
                     $('.flash-outer').html(
				            '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
                  }, delay);
                  $('#loader').hide();
                  $('#reset').show('slow');
                  
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
 