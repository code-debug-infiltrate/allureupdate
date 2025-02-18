$(document).ready(function() {

   var delay = 2000;

    //Forgot Pass Form Action
    $('#addLanguage').click(function(e){

        e.preventDefault();

        //Process And Validate EMail    
        var lang = $('#lang').val();
        if(lang == ''){
            $('.languageError_box').html(
                '<span style="color:red;">Enter Your Language</span>'
            );
            $('#lang').focus();
            return false;
        }

        if(lang.length < 4 || lang.length > 20 ){
            $('.languageError_box').html(
                '<span style="color:red;">Language Must Be Between 4 to 20 Characters</span>'
            );
            $('#lang').focus();
            return false;
        }

        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url3 = $('#url3').val();

        var loginURL = url+url3;

    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "lang="+lang+"&uniqueid="+uniqueid+"&username="+username,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
				'<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Please Wait.. </div>'
            );
            $('#languageLoader').show();
            $('#addLanguage').hide('fast');
        },	

        success: function(data)
        {
           // console.log(data);
            //Process Data From Controller
            var info = JSON.parse(data);

            if (info.result_info.type == "success") {
                setTimeout(function() {
                    $('.flash-outer').html(
				        '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#languageLoader').hide();
            
                $('#newLangList').html('<li style="color: black;"><a href="#" title="'+lang+'">'+lang+'</li>');
                $('#addLanguage').show('slow');

            } else {

            setTimeout(function() {
                $('.flash-outer').html(
				    '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#languageLoader').hide();
                $('#addLanguage').show('slow');
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
 