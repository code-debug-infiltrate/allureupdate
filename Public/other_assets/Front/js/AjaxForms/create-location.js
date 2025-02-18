$(document).ready(function() {

   var delay = 2000;

    //Forgot Pass Form Action
    $('#addLocation').click(function(e){

        e.preventDefault();

        //Process And Validate EMail 
        var address = $('#address').val();
        if(address == ''){
            $('.locError_box').html(
                '<span style="color:red;">Enter Your Home Address</span>'
            );
            $('#address').focus();
            return false;
        }
        if(address.length < 10 || address.length > 90 ){
            $('.locError_box').html(
                '<span style="color:red;">Address Must Be Between 10 to 90 Characters</span>'
            );
            $('#address').focus();
            return false;
        }

        var city = $('#city').val();
        if(city == ''){
            $('.locError_box').html(
                '<span style="color:red;">Enter Your Home City</span>'
            );
            $('#city').focus();
            return false;
        }

        if(city.length < 4 || city.length > 20 ){
            $('.locError_box').html(
                '<span style="color:red;">City Must Be Between 4 to 20 Characters</span>'
            );
            $('#city').focus();
            return false;
        }

        var country = $('#country').val();

        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url4 = $('#url4').val();

        var loginURL = url+url4;

    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "address="+address+"&city="+city+"&country="+country+"&uniqueid="+uniqueid+"&username="+username,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
				'<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Please Wait.. </div>'
            );
            $('#locLoader').show();
            $('#addLocation').hide('fast');
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
                $('#locLoader').hide();
                $('#addLocation').show('slow');

            } else {

            setTimeout(function() {
                $('.flash-outer').html(
				        '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#locLoader').hide();
                $('#addLocation').show('slow');
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
 