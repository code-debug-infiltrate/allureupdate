$(document).ready(function() {

   var delay = 2000;

   //Login Form Action
   $('#register').click(function(e){

      e.preventDefault();

      //Process fname    
      var fname = $('#fname').val();
      if(fname == ''){
          $('.formError_box').html(
            '<span style="color:red;">Enter Your First Name</span>'
          );
         $('#fname').focus();
         return false;
      }
      if(fname.length < 3 || fname.length > 40){
         $('.formError_box').html(
            '<span style="color:red;">First Name Must Be Between 3 to 40 Characters</span>'
         );
         $('#fname').focus();
         return false;
      }

      //Process lname    
      var lname = $('#lname').val();
      if(lname == ''){
          $('.formError_box').html(
            '<span style="color:red;">Enter Your Last Name</span>'
          );
         $('#lname').focus();
         return false;
      }
      if(lname.length < 3 || lname.length > 40){
         $('.formError_box').html(
            '<span style="color:red;">Last Name Must Be Between 3 to 40 Characters</span>'
         );
         $('#lname').focus();
         return false;
      }


      //Process Gender       
      var gender = $('#gender').val();
      if(!gender){
         $('.formError_box').html(
            '<span style="color:red;">Select Your Gender</span>'
         );
         $('#gender').focus();
         return false;
      }  



      //Process DOB       
      var dob = $('#dob').val();
      if(dob == ''){
         $('.formError_box').html(
            '<span style="color:red;">Enter Your Date Of Birth</span>'
         );
         $('#dob').focus();
         return false;
      }  

      //Process And Validate EMail    
      var email = $('#email').val();
      if(email == ''){
          $('.formError_box').html(
            '<span style="color:red;">Enter a Valid Email ID</span>'
          );
         $('#email').focus();
         return false;
      }
      if( $("#email").val()!='' ){
         if( !isValidEmailAddress( $("#email").val() ) ){
            $('.formError_box').html(
               '<span style="color:red;">Provided Email ID Is Incorrect</span>'
             );
            $('#email').focus();
            return false;
         }
      }
      if(email.length < 5 || email.length > 50 ){
         $('.formError_box').html(
            '<span style="color:red;">Email Must Be Between 5 to 50 Characters</span>'
         );
         $('#email').focus();
         return false;
      }

      //Process Gender       
      var accept = $('#accept').is(":checked");
      if(accept == ''){
         $('.formError_box').html(
            '<span style="color:red;">Accept Terms & Policy</span>'
         );
         $('#accept').focus();
         return false;
      }  

      //Process IP 
      var ip = $('#ip').val();
      var ua = $('#ua').val();

      var loginURL = $('#urlReg').val();

      //Process Ajax Form Submittion Without Page Reload                
      $.ajax
      ({
         type: "POST",
         url: loginURL,
         data: "ip="+ip+"&ua="+ua+"&dob="+dob+"&fname="+fname+"&lname="+lname+"&email="+email+"&gender="+gender,
         //Show Message Before Sending
         beforeSend: function() {
            $('.flash-outer').html(
				    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Processing, Please Wait...  </div>'
            );
            $('#loader').show();
            $('#register').hide('fast');
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
               $('#registerForm').hide();
               $('#loginForm').show();
            } else {
               setTimeout(function() {
                  $('.flash-outer').html(
				    '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                  );
               }, delay);
               $('#loader').hide();
               $('#register').show('slow');
            }
         }
      });
   });






   
             
});




     
function replace(hide, show) {
   document.getElementById(hide).style.display="none";
   document.getElementById(show).style.display="block";
}

function showButton(a) {
   //document.getElementById(hide).style.display="none";
   document.getElementById(a).style.display="block";
}



    //Email Validation Function	
    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    };
 