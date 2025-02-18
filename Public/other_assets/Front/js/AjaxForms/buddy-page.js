$(document).ready(function() {

   var delay = 2000;

    //Send Buddy Request Form Action
    $('#req').click(function(e){

        e.preventDefault();

        //Process And Validate EMail 
        var buddyid = $('#buddyid').val();
        var buddyname = $('#buddyname').val();
        var re = $('#re').val();
        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url5 = $('#url5').val();

        var loginURL = url+url5;
        //console.log(re);
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "buddyid="+buddyid+"&buddyname="+buddyname+"&re="+re+"&uniqueid="+uniqueid+"&username="+username,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
				    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Please Wait.. </div>'
            );
            $('#requestPending').show();
            $('#req').hide('fast');
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
                $('#req').hide();
                $('#requestPending').show('slow');

            } else {

            setTimeout(function() {
                $('.flash-outer').html(
				    '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#requestPending').hide();
                $('#req').show('slow');
            }
        }
        });
      });




    //Send Buddy Action Form Action
    $('#action').click(function(e){

        e.preventDefault();

        //Process And Validate EMail 
        var buddyid = $('#buddyid').val();
        var buddyname = $('#buddyname').val();
        var act = $('#act').val();
        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url7 = $('#url7').val();

        var loginURL = url+url7;
        
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "buddyid="+buddyid+"&buddyname="+buddyname+"&act="+act+"&uniqueid="+uniqueid+"&username="+username,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
				    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Please Wait.. </div>'
            );
            $('#loader1').show();
            $('#action').hide('fast');
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
                $('#action').show();
                $('#loader1').hide('fast');

            } else {

            setTimeout(function() {
                $('.flash-outer').html(
				    '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#action').show();
                $('#loader1').hide('fast');
            }
        }
        });
      });



       //Send Buddy Action Form Action
    $('#action2').click(function(e){

        e.preventDefault();

        //Process And Validate EMail 
        var buddyid = $('#buddyid').val();
        var buddyname = $('#buddyname').val();
        var act = $('#act2').val();
        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url9 = $('#url9').val();

        var loginURL = url+url9;
        
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "buddyid="+buddyid+"&buddyname="+buddyname+"&act="+act+"&uniqueid="+uniqueid+"&username="+username,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
				    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Please Wait.. </div>'
            );
            
            $('#action2').hide();
            $('#loader2').show('fast');
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
                $('#action2').show();
                $('#loader2').hide('fast');

            } else {

            setTimeout(function() {
                $('.flash-outer').html(
				    '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#action2').show();
                $('#loader2').hide('fast');
            }
        }
        });
      });



      //Send Buddy Request Form Action
    $('#accReq').click(function(e){

        e.preventDefault();

        //Process And Validate EMail 
        var buddyid = $('#buddyid').val();
        var buddyname = $('#buddyname').val();
        var re = $('#re').val();
        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url55 = $('#url55').val();

        var loginURL = url+url55;
        
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "buddyid="+buddyid+"&buddyname="+buddyname+"&re="+re+"&uniqueid="+uniqueid+"&username="+username,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
				    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Please Wait.. </div>'
            );
            $('#requestPending').show();
            $('#accReq').hide('fast');
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
                $('#accReq').hide();
                $('#requestPending').show('slow');

            } else {

            setTimeout(function() {
                $('.flash-outer').html(
				    '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#requestPending').hide();
                $('#accReq').show('slow');
            }
        }
        });
      });

                
   });



    //Email Validation Function	
    function isValidEmailfname(emailfname) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailfname);
    };
 