$(document).ready(function() {

   var delay = 2000;

      //Subscribe Form Action
      $('#updatePass').click(function(e){

         e.preventDefault();
         

         //Process ID 
         var uniqueid = $('#uniqueid').val();
         if(uniqueid == ''){
            $('.passError_box').html(
               '<span style="color:red;">Unique ID Cannot Be Empty!</span>'
            );
            $('#uniqueid').focus();
            return false;
         }


         //Process Pass 
         var oldpass = $('#oldpass').val();
         if(oldpass == ''){
            $('.passError_box').html(
               '<span style="color:red;">Current Password Cannot Be Empty!</span>'
            );
            $('#oldpass').focus();
            return false;
         }


         //Process Pass 
         var newpass = $('#newpass').val();
         if(newpass == ''){
            $('.passError_box').html(
               '<span style="color:red;">New Password Cannot Be Empty!</span>'
            );
            $('#newpass').focus();
            return false;
         }
         	

         var url = $('#url').val();
         var url2 = $('#url2').val();
         var username = $('#username').val();

         var subURL = url+url2;
         
         //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({
            type: "POST",
            url: subURL,
            data: "uniqueid="+uniqueid+"&oldpass="+oldpass+"&newpass="+newpass+"&username="+username,
            //Show Message Before Sending
            beforeSend: function() {
               $('.flash-outer').html(
				    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
               );
               $('#passLoader').show();
               $('#updatePass').hide('slow');
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
                  $('#passLoader').hide();
                  $('#updatePass').show('slow');
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
 