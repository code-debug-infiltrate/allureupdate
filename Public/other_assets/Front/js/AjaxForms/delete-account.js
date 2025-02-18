$(document).ready(function() {

   var delay = 2000;

      //Subscribe Form Action
      $('#deleteAccount').click(function(e){

         e.preventDefault();
         

         //Process ID 
         var uniqueid = $('#uniqueid').val();
         if(uniqueid == ''){
            $('.deleteAcc_box').html(
               '<span style="color:red;">Unique ID Cannot Be Empty!</span>'
            );
            $('#uniqueid').focus();
            return false;
         }


         //Process Pass 
         var pass = $('#pass').val();
         if(pass == ''){
            $('.deleteAcc_box').html(
               '<span style="color:red;">Password Cannot Be Empty!</span>'
            );
            $('#pass').focus();
            return false;
         }
         	

         var subURL = $('#url').val();
         

         //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({

            type: "POST",
            url: subURL,
            data: "uniqueid="+uniqueid+"&pass="+pass,
            //Show Message Before Sending
            beforeSend: function() {
               $('.deleteAcc_box').html(
                  '<div class="alert alert-warning alert-dismissable"> Processing, Please Wait.. </div>'
               );
               $('#emailVerify').hide();
            },	

            success: function(data)
            {
               //Process Data From Controller
          		var info = JSON.parse(data);

   	       	if (info.type == "success") {
   	       		setTimeout(function() {
   			         $('.deleteAcc_box').html(
   			       	 '<div class="alert alert-success alert-dismissable">'+info.message+'</div>'
   			       	);
   			      }, delay);
   	       	} else {
   	       		setTimeout(function() {
   			         $('.deleteAcc_box').html(
   			       	 '<div class="alert alert-danger alert-dismissable">'+info.message+'</div>'
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
 