$(document).ready(function() {

   var delay = 2000;

   //Login Form Action
   $('#send_msg').click(function(e){

      e.preventDefault();

      //Process IP 
      var ip = $('#ip').val();
      var ua = $('#ua').val();


      //Process fname    
      var fname = $('#fname').val();
      if(fname == ''){
          $('.formError_box').html(
            '<span style="color:red;">Enter Your First Name!</span>'
          );
         $('#fname').focus();
         return false;
      }
      if(fname.length < 5 || fname.length > 40){
         $('.formError_box').html(
            '<span style="color:red;">First Name Must Be Between 5 to 40 Characters!</span>'
         );
         $('#fname').focus();
         return false;
      }

      //Process lname    
      var lname = $('#lname').val();
      if(lname == ''){
          $('.formError_box').html(
            '<span style="color:red;">Enter Your Last Name!</span>'
          );
         $('#lname').focus();
         return false;
      }
      if(lname.length < 5 || lname.length > 40){
         $('.formError_box').html(
            '<span style="color:red;">Last Name Must Be Between 5 to 40 Characters!</span>'
         );
         $('#lname').focus();
         return false;
      }

      //Process And Validate EMail    
      var email = $('#email').val();
      if(email == ''){
          $('.formError_box').html(
            '<span style="color:red;">Enter a Valid Email ID!</span>'
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
      if(email.length < 5 || email.length > 50 ){
         $('.formError_box').html(
            '<span style="color:red;">Email Must Be Between 5 to 50 Characters!</span>'
         );
         $('#email').focus();
         return false;
      }

      //Process phone    
      var phone = $('#phone').val();
      if(phone == ''){
          $('.formError_box').html(
            '<span style="color:red;">Enter Your Mobile Number!</span>'
          );
         $('#phone').focus();
         return false;
      }
      if(phone.length < 5 || phone.length > 15){
         $('.formError_box').html(
            '<span style="color:red;">Mobile Number Must Be Between 9 to 15 Characters!</span>'
         );
         $('#phone').focus();
         return false;
      }

      //Process Department        
      // var dept = $('#d').val();
      // if(dept == ''){
      //    $('.formError_box').html(
      //       '<span style="color:red;">Select Department!</span>'
      //    );
      //    $('#d').focus();
      //    return false;
      // } 

      // //Process Issue        
      // var issue = $('#i').val();
      // if(issue == ''){
      //    $('.formError_box').html(
      //       '<span style="color:red;">Select Issue!</span>'
      //    );
      //    $('#i').focus();
      //    return false;
      // } 

      //Process subject        
      var subject = $('#s').val();
      if(subject == ''){
         $('.formError_box').html(
            '<span style="color:red;">Enter Message Subject!</span>'
         );
         $('#s').focus();
         return false;
      }

      //Process Message        
      var msg = $('#m').val();
      if(msg == ''){
         $('.formError_box').html(
            '<span style="color:red;">Enter Detailed Message!</span>'
         );
         $('#m').focus();
         return false;
      }  

      if(msg.length < 100 || msg.length > 5000 ){
         $('.formError_box').html(
            '<span style="color:red;">Message Must Be Between 100 to 5000 Characters!</span>'
         );
         $('#m').focus();
         return false;
      } 
      
      var url = $('#urlCon').val();
      //var url1 = $('#url1').val();
      //var contactURL = url+url1;

      //Process Ajax Form Submittion Without Page Reload                
      $.ajax
      ({
         type: "POST",
         url: url,
         data: "ip="+ip+"&ua="+ua+"&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&subject="+subject+"&msg="+msg,
         //Show Message Before Sending
         beforeSend: function() {
            $('.flash-outer').html(
							'<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait... </div>'
            );
            $('#loader').show();
            $('#send_msg').hide('fast');
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
            } else {
               setTimeout(function() {
                  $('.flash-outer').html(
							'<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                  );
               }, delay);
               $('#loader').hide('slow');
               $('#send_msg').show('slow');
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
 