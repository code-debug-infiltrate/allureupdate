$(document).ready(function() {

   var delay = 2000;

   //Login Form Action
   $('#startConsultation').click(function(e){

      e.preventDefault();

      //Process IP 
      var ip = $('#ip').val();
      var ua = $('#ua').val();
      var r = 'ajax-consultation/';


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
      var location = $('#location').val();
      if(!location){
         $('.formError_box').html(
            '<span style="color:red;">Select Your Current Location</span>'
         );
         $('#location').focus();
         return false;
      } 
      
      var contactdate = $('#contactdate').val();
      if(contactdate == ''){
         $('.formError_box').html(
            '<span style="color:red;">Enter a Preferred Date</span>'
         );
         $('#contactdate').focus();
         return false;
      } 


      var contactmethod = $('#contactmethod').val();
      if(!contactmethod){
         $('.formError_box').html(
            '<span style="color:red;">How Shall We Contact You?</span>'
         );
         $('#contactmethod').focus();
         return false;
      } 

      //Process subject        
    //   var subject = $('#s').val();
    //   if(subject == ''){
    //      $('.formError_box').html(
    //         '<span style="color:red;">Enter Message Subject!</span>'
    //      );
    //      $('#s').focus();
    //      return false;
    //   }

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
      
      var url = $('#url').val();
      //Process Ajax Form Submittion Without Page Reload                
      $.ajax
      ({
         type: "POST",
         url: url+r,
         data: "ip="+ip+"&ua="+ua+"&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&contactmethod="+contactmethod+"&contactdate="+contactdate+"&gender="+gender+"&location="+location+"&msg="+msg,
         //Show Message Before Sending
         beforeSend: function() {
            $('.flash-outer').html(
				'<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait... </div>'
            );
            $('#startConsultation').hide('fast');
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
               $('#contactForm').hide('slow');
               $('#paymentForm').show('slow');
            } else {
               setTimeout(function() {
                  $('.flash-outer').html(
							'<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                  );
               }, delay);
               $('#startConsultation').show('slow');
            }
         }
      });
   });








   //Initialize Payment By Bank Transfer
   $('#payWithTransfer').click(function(e){

      var delay = 2000;
      e.preventDefault();

      var fname = $('#fname').val();
      var lname = $('#lname').val();
      var email = $('#email').val();
      var currency = $('#currency').val();
      var planid = $('#planid').val();
      var method = "Bank Deposit";
      var amount = $('#amount').val();
      var cardamount = $('#cardamount').val();
      var memo = $('#memo').val();
      var url = $('#url').val();
      var r = 'ajax-bank-details/';
      
      //Process Ajax Form Submittion Without Page Reload                
      $.ajax
      ({
         type: "POST",
         url: url+r,
         data: "fname="+fname+"&planid="+planid+"&email="+email+"&lname="+lname+"&currency="+currency+"&amount="+amount+"&method="+method,
         //Show Message Before Sending
         beforeSend: function() {
         $('.flash-outer').html(
                  '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
         );
         $('#payWithTransfer').hide('slow');
         },	

         success: function(data)
         {
         //console.log(data);
         //Process Data From Controller
         var info = JSON.parse(data);

         if (info.result_info.type == "success") {
               setTimeout(function() {
                  $('.flash-outer').html(
                           '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                  );
                  $('.swiftCode').html('<div style="font-size: 16px;"><b>Swift Code:</b> '+info.result_message.swiftcode+' (For International Transfers Only)</div>');
                  $('.bankName').html('<div style="font-size: 16px;"><b>Bank Name:</b> '+info.result_message.bankname+' </div>');
                  $('.accountName').html('<div style="font-size: 16px;"><b>Account Name:</b> '+info.result_message.acctname+' </div>');
                  $('.acccountNumber').html('<div style="font-size: 16px;"><b>Account Number:</b> '+info.result_message.acctnum+' </div>');
                  $('.amount').html('<div style="font-size: 16px;"><b>Amount:</b> '+currency+''+amount+':00 (NGN'+cardamount+' Naira Only) </div>');
                  $('.narration').html('<div style="font-size: 16px;"><b>Narration:</b> '+fname+'-'+memo+' </div>');
               }, delay);
                  $('#paymentForm').hide();
                  $('#transfer_info').show('slow');
         } else {
               setTimeout(function() {
                  $('.flash-outer').html(
                           '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                  );
               }, delay);
               $('#payWithTransfer').show('slow');
         }
         }
      });
   });






        

    //Confirm Bank Transfer
   $('#doneBankTransfer').click(function(e){

      e.preventDefault();

      var delay = 2000;
   
      var fname = $('#fname').val();
      var lname = $('#lname').val();
      var email = $('#email').val();
      var currency = $('#currency').val();
      var planid = $('#planid').val();
      var method = "Bank Deposit";
      var amount = $('#amount').val();
      var type = $('#type').val();
      var memo = $('#memo').val();
      var url = $('#url').val();
      var r = "ajax-bank-transfer-done/";

      //Process Pass 
      var amount = $('#amount').val();
         
      var url = $('#url').val();
      
      //Process Ajax Form Submittion Without Page Reload                
      $.ajax
      ({
      type: "POST",
      url: url+r,
      data: "fname="+fname+"&planid="+planid+"&email="+email+"&lname="+lname+"&currency="+currency+"&amount="+amount+"&method="+method+"&type="+type+"&memo="+memo+"&phone="+phone,
      //Show Message Before Sending
      beforeSend: function() {
         $('.flash-outer').html(
               '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
         );
         $('#doneBankTransfer').hide('slow');
      },	

      success: function(data)
      {
         //console.log(data);
         //Process Data From Controller
         var info = JSON.parse(data);

         if (info.result_info.type == "success") {
                  setTimeout(function() {
                  $('.flash-outer').html(
                     '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
                  }, delay);
                  $('#depositForm').hide();
                  $('#transfer_info').hide();
                  $('#transfer_done_info').show('slow');
               } else {
                  setTimeout(function() {
                  $('.flash-outer').html(
                     '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
                  }, delay);
                  $('#doneBankTransfer').show('slow');
               }
      }
      });
   });








    //Initialize Payment By Online Card
   $('#payWithOnline').click(function(e){

   var delay = 2000;
   e.preventDefault();
   
   var amount = $('#cardamount').val();
   var memo = $('#memo').val();
   var fname = $('#fname').val();
   var lname = $('#lname').val();
   var phone = $('#phone').val();
   var email = $('#email').val();
   var currency = $('#currency').val();
   var type = "Online Card";
   var r = 'ajax-online-card/';

      
   var url = $('#url').val();
   
   //Process Ajax Form Submittion Without Page Reload                
   $.ajax
   ({
      type: "POST",
      url: url+r,
      data: "phone="+phone+"&fname="+fname+"&lname="+lname+"&email="+email+"&currency="+currency+"&amount="+amount+"&type="+type+"&memo="+memo,
      //Show Message Before Sending
      beforeSend: function() {
      $('.flash-outer').html(
               '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
      );
      $('#payWithOnline').hide('slow');
      },	

      success: function(data)
      {
      console.log(data);
      //Process Data From Controller
      var info = JSON.parse(data);

      if (info.status == true) {
         setTimeout(function() {
               $('.flash-outer').html(
                     '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.message+'</div>'
               );
               $('.urlLink').html('<a href="'+info.data.authorization_url+'" target="_blank" class="btn-secondry add-item m-r5"><img src="/Images/Body/thumb-up.png" style="width: 15%; margin-right: 20px;">Pay With Card Or USSD Code</a>');
         }, delay);
               $('#paymentForm').hide();
               $('#online_info').show('slow');
      } else {
         setTimeout(function() {
               $('.flash-outer').html(
                     '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.message+'</div>'
               );
         }, delay);
         $('#payWithOnline').show('slow');
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
 