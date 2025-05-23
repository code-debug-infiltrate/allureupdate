$(document).ready(function() {

    var delay = 2000;
 
    //Poke User Form Action
    $('#msgUser').click(function(e){
 
       e.preventDefault();
 
       //Process IP 
       var r = 'ajax-msg-user/';
       var uniqueid = $('#uniqueid').val();
       var username = $('#username').val();
       var buddyid = $('#buddyid').val();
       var chatid = $('#chatid').val();
       
       
       //Process Message        
        var msg = $('#firstmsg').val();
        if(msg == ''){
            $('.msgMessage_box').html(
                '<span style="color:red;">Enter Detailed Message!</span>'
            );
            $('#firstmsg').focus();
            return false;
        }  

        if(msg.length < 50 || msg.length > 500 ){
            $('.msgMessage_box').html(
                '<span style="color:red;">Message Must Be Between 50 to 500 Characters!</span>'
            );
            $('#firstmsg').focus();
            return false;
        }
       
       var url = $('#url').val();
       //Process Ajax Form Submittion Without Page Reload                
        $.ajax
        ({
          type: "POST",
          url: url+r,
          data: "uniqueid="+uniqueid+"&username="+username+"&buddyid="+buddyid+"&chatid="+chatid+"&msg="+msg,
          //Show Message Before Sending
          beforeSend: function() {
             $('.msgMessage_box').html(
                 '<span style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Sent Poke Processing, Please Wait... </span>'
             );
             $('#msgUser').hide('fast');
          }, 
 
          success: function(data)
          {
             console.log(data);
             //Process Data From Controller
             var info = JSON.parse(data);
 
             if (info.result_info.type == "success") {
                setTimeout(function() {
                  $('.msgMessage_box').html(
                             '<span style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+' <a href="'+url+'us-chats/'+uniqueid+'/?buddy='+buddyid+'">Continue To Chats</a></span>'
                   );
                }, delay);
                $('#msgUser').hide('slow');
                $('#msgd').show('slow');
             } else {
                setTimeout(function() {
                   $('.msgMessage_box').html(
                             '<span style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+' <a href="'+url+'us-chats/'+uniqueid+'/?buddy='+buddyid+'">Go To Chats</a></span>'
                   );
                }, delay);
                $('#msgUser').hide('slow');
             }
          }
       });
    });
















    //Poke User Form Action
    $('#pokeUser').click(function(e){
 
        e.preventDefault();
  
        //Process IP 
        var r = 'ajax-poke-user/';
        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var buddyid = $('#buddyid').val();
        
        var url = $('#url').val();
        //Process Ajax Form Submittion Without Page Reload                
         $.ajax
         ({
           type: "POST",
           url: url+r,
           data: "uniqueid="+uniqueid+"&username="+username+"&buddyid="+buddyid,
           //Show Message Before Sending
           beforeSend: function() {
              $('.pokeMessage_box').html(
                  '<span style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Sent Poke Processing, Please Wait... </span>'
              );
              $('#pokeUser').hide('fast');
           }, 
  
           success: function(data)
           {
              console.log(data);
              //Process Data From Controller
              var info = JSON.parse(data);
  
              if (info.result_info.type == "success") {
                 setTimeout(function() {
                   $('.pokeMessage_box').html(
                              '<span style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</span>'
                    );
                 }, delay);
                 $('#pokeUser').hide('slow');
                 $('#poked').show('slow');
              } else {
                 setTimeout(function() {
                    $('.pokeMessage_box').html(
                              '<span style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</span>'
                    );
                 }, delay);
                 $('#pokeUser').hide('slow');
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
  