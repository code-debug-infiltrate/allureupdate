$(document).ready(function() {

   var delay = 2000;

    //Forgot Pass Form Action
    $('#updateBio').click(function(e){

        e.preventDefault();

        //Process And Validate EMail 
        var fname = $('#fname').val();
        if(fname == ''){
            $('.fnameError_box').html(
                '<span style="color:red;">Enter Your First Name</span>'
            );
            $('#fname').focus();
            return false;
        }
        if(fname.length < 3 || fname.length > 40 ){
            $('.fnameError_box').html(
                '<span style="color:red;">Firstname Must Be Between 3 to 40 Characters</span>'
            );
            $('#fname').focus();
            return false;
        }

        var lname = $('#lname').val();
        if(lname == ''){
            $('.lnameError_box').html(
                '<span style="color:red;">Enter Your Last Name</span>'
            );
            $('#lname').focus();
            return false;
        }

        if(lname.length < 3 || lname.length > 40 ){
            $('.lnameError_box').html(
                '<span style="color:red;">Last Name Must Be Between 3 to 40 Characters</span>'
            );
            $('#lname').focus();
            return false;
        }

        var number = $('#number').val();
        if(number == ''){
            $('.phoneError_box').html(
                '<span style="color:red;">Enter Your Mobile No.</span>'
            );
            $('#number').focus();
            return false;
        }

        var occupation = $('#occupation').val();
        if(occupation == ''){
            $('.occupationError_box').html(
                '<span style="color:red;">Enter Your occupation</span>'
            );
            $('#occupation').focus();
            return false;
        }

        var biodetails = $('#biodetails').val();
        if(biodetails == ''){
            $('.bioError_box').html(
                '<span style="color:red;">Tell Other Buddies More About Yourself</span>'
            );
            $('#biodetails').focus();
            return false;
        }

        if(biodetails.length < 10 || biodetails.length > 2000 ){
            $('.bioError_box').html(
                '<span style="color:red;">Bio details Must Be Between 10 to 2000 Characters</span>'
            );
            $('#biodetails').focus();
            return false;
        }
        var gender = $('#gender').val();
        var dob = $('#dob').val();
        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url5 = $('#url5').val();

        var loginURL = url+url5;
        
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "fname="+fname+"&lname="+lname+"&number="+number+"&gender="+gender+"&dob="+dob+"&occupation="+occupation+"&biodetails="+biodetails+"&uniqueid="+uniqueid+"&username="+username,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
				'<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Please Wait.. </div>'
            );
            $('#bioLoader').show();
            $('#updateBio').hide('fast');
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
                $('#bioLoader').hide();
                $('#updateBio').show('slow');

            } else {

            setTimeout(function() {
                $('.flash-outer').html(
						'<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                    );
                }, delay);
                $('#bioLoader').hide();
                $('#updateBio').show('slow');
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
 