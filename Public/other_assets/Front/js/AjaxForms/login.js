$(document).ready(function() {

   var delay = 2000;
   var imgLink = "//Public//other_assets/Profile/"

      //Forgot Pass Form Action
      $('#login').click(function(e){

         e.preventDefault();


        //Process And Validate EMail    
        var email = $('#emailLog').val();
        if(email == ''){
            $('.formError_box').html(
                '<span style="color:red;">Enter Your Registered Email ID</span>'
            );
            $('#emailLog').focus();
            return false;
        }
        if( $("#emailLog").val()!='' ){
            if( !isValidEmailAddress( $("#emailLog").val() ) ){
                $('.formError_box').html(
                '<span style="color:red;">Provided Email ID Is Incorrect</span>'
                );
                $('#emailLog').focus();
                return false;
            }
        }
        if(email.length < 5 || email.length > 50 ){
            $('.formError_box').html(
                '<span style="color:red;">Email Must Be Between 5 to 50 Characters</span>'
            );
            $('#emailLog').focus();
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

         var ip = $('#ip').val();
         var ua = $('#ua').val();
         var url = $('#url').val();
         var loginURL = $('#urlLog').val();
         

         //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({
            type: "POST",
            url: loginURL,
            data: "password="+password+"&email="+email+"&ip="+ip+"&ua="+ua,
            //Show Message Before Sending
            beforeSend: function() {
              $('.flash-outer').html(
				    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
               );
               $('#loader').show();
               $('#login').hide('fast');
            },	

            success: function(data)
            {
               //console.log(data);
               //Process Data From Controller
               var info = JSON.parse(data);

               if (info.type == "success") {
                  
                    if (info.code == "202") {
                        setTimeout(function() {
                            $('.flash-outer').html(
				            '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.message+'</div>'
                            );
                        }, delay);
                        $('#loginForm').hide();
                        $('#unlockForm').show();
                    } else {
                        setTimeout(function() {
                            $('.flash-outer').html(
				            '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.message+'</div>'
                            
                            );
                        }, delay);
                        $('#loginForm').hide();
                        $('.profileimage').html('<div><img src="'+url+''+imgLink+''+info.userInfo.profileimage+'" style="width: 120px; border-radius: 100%;" alt="Profile Image"></div>');
                        $('.welcome').html('<div style="margin-top: 20px;">'+info.userInfo.fname+' '+info.userInfo.lname+' </div>');
                        
                        if (info.userInfo.profile === "User"){
                            $('.clickable').html('<div class="btn"><a href="'+url+'us-index/'+info.userInfo.uniqueid+'/?tab=timeline"><b>Continue To Your Dashboard</b></a> </div>');
                        } else {
                            $('.clickable').html('<div class="btn"><a href="'+url+'ad-index/'+info.userInfo.uniqueid+'/"><b>Continue To Your Dashboard</b></a> </div>');
                        }
                        $('.notme').html('<div style="margin-top: 5px; float: right; font-size: 12px;">Not '+info.userInfo.fname+' '+info.userInfo.lname+'? <a href="'+url+'logout/'+info.userInfo.uniqueid+'/"><i style="color: blue;">Login as New User</i></a></div>');
                        $('#dashboardForm').show();
                    }

               } else {

                    setTimeout(function() {
                    $('.flash-outer').html(
				            '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.message+'</div>'
                        );
                    }, delay);
                    $('#loader').hide();
                    $('#login').show('slow');
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
 