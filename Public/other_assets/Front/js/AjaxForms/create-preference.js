$(document).ready(function() {

    var delay = 2000;

      //updatePreference Button Action
      $('#updatePreference').click(function(e){

         e.preventDefault();

        //Process gender       
        var prefgender = $('#prefgender').val();
        if(!prefgender){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Ideal Gender</span>'
            );
            $('#prefgender').focus();
            return false;
        }  
        
        //Process orientation       
        var preforientation = $('#preforientation').val();
        if(!preforientation){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Ideal Sexual Orientation</span>'
            );
            $('#preforientation').focus();
            return false;
        }  

        //Process height       
        var prefheight = $('#prefheight').val();
        if(!prefheight){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Height</span>'
            );
            $('#prefheight').focus();
            return false;
        } 
        
        //Process height       
        var prefweight = $('#prefweight').val();
        if(!prefweight){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Weight</span>'
            );
            $('#prefweight').focus();
            return false;
        } 


        //Process bodytype       
        var prefbodytype = $('#prefbodytype').val();
        if(!prefbodytype){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Body Type</span>'
            );
            $('#prefbodytype').focus();
            return false;
        }  

        //Process height       
        var prefreligion = $('#prefreligion').val();
        if(!prefreligion){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Religion</span>'
            );
            $('#prefreligion').focus();
            return false;
        } 

        //Process seeking       
        var prefseeking = $('#prefseeking').val();
        if(!prefseeking){
            $('.prefError_box').html(
                '<span style="color:red;">Select What Kind Of Relationship You Seeking</span>'
            );
            $('#prefseeking').focus();
            return false;
        }  

        //Process height       
        var prefsmoking = $('#prefsmoking').val();
        if(!prefsmoking){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Smoking Habit</span>'
            );
            $('#prefsmoking').focus();
            return false;
        } 

        //Process height       
        var prefcomplexion = $('#prefcomplexion').val();
        if(!prefcomplexion){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Complexion</span>'
            );
            $('#prefcomplexion').focus();
            return false;
        } 

        //Process ethnicity       
        var prefethnicity = $('#prefethnicity').val();
        if(!prefethnicity){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Ethnicity</span>'
            );
            $('#prefethnicity').focus();
            return false;
        }  

        //Process height       
        var prefdrinking = $('#prefdrinking').val();
        if(!prefdrinking){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Drinking Habit</span>'
            );
            $('#prefdrinking').focus();
            return false;
        } 

        //Process height       
        var prefeating = $('#prefeating').val();
        if(!prefeating){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Eating Habit</span>'
            );
            $('#prefeating').focus();
            return false;
        } 

        //Process Pets       
        var prefpets = $('#prefpets').val();
        if(!prefpets){
            $('.prefError_box').html(
                '<span style="color:red;">Tell Us If You Like Pets</span>'
            );
            $('#prefpets').focus();
            return false;
        }  

        //Process dates       
        var prefdates = $('#prefdates').val();
        if(!prefdates){
            $('.prefError_box').html(
                '<span style="color:red;">How Often You Like Going On Dates</span>'
            );
            $('#prefdates').focus();
            return false;
        }  


        //Process Have Kids       
        var prefhavekids = $('#prefhavekids').val();
        if(!prefhavekids){
            $('.myselfError_box').html(
                '<span style="color:red;">How Many Kids?</span>'
            );
            $('#prefhavekids').focus();
            return false;
        }
        
        //Process Marital Status       
        var prefmaritalstatus = $('#prefmaritalstatus').val();
        if(!prefmaritalstatus){
            $('.myselfError_box').html(
                '<span style="color:red;">Marital Status</span>'
            );
            $('#prefmaritalstatus').focus();
            return false;
        }


        //Process Want Kids       
        var prefwantkids = $('#prefwantkids').val();
        if(!prefwantkids){
            $('.myselfError_box').html(
                '<span style="color:red;">Should Want Kids</span>'
            );
            $('#prefwantkids').focus();
            return false;
        }


        //Process dress       
        var prefdress = $('#prefdress').val();
        if(!prefdress){
            $('.prefError_box').html(
                '<span style="color:red;">When It Comes To Dressing?</span>'
            );
            $('#prefdress').focus();
            return false;
        }  
        
        //Process employment       
        var prefemployment = $('#prefemployment').val();
        if(!prefemployment){
            $('.prefError_box').html(
                '<span style="color:red;">Select Your Employment Status</span>'
            );
            $('#prefemployment').focus();
            return false;
        } 

        //Process And Validate EMail    
        var prefdetails = $('#prefdetails').val();
        if(prefdetails == ''){
            $('.prefError_box').html(
                '<span style="color:red;">Enter More Relevant Details About Yourself</span>'
            );
            $('#prefdetails').focus();
            return false;
        }

        if(prefdetails.length < 50 || prefdetails.length > 2000 ){
            $('.prefError_box').html(
                '<span style="color:red;">Your Personality Details Must Be Between 50 to 2000 Characters</span>'
            );
            $('#prefdetails').focus();
            return false;
        }

        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var urlpref = $('#urlpref').val();

        var loginURL = url+urlpref;

        //console.log(loginURL);

        //Process Ajax Form Submittion Without Page Reload                
       $.ajax
       ({
           type: "POST",
           url: loginURL,
           data: "preforientation="+preforientation+"&prefmaritalstatus="+prefmaritalstatus+"&prefwantkids="+prefwantkids+"&prefhavekids="+prefhavekids+"&prefgender="+prefgender+"&prefheight="+prefheight+"&prefweight="+prefweight+"&prefbodytype="+prefbodytype+"&prefreligion="+prefreligion+"&prefseeking="+prefseeking+"&prefsmoking="+prefsmoking+"&prefcomplexion="+prefcomplexion+"&prefethnicity="+prefethnicity+"&prefdrinking="+prefdrinking+"&prefeating="+prefeating+"&prefpets="+prefpets+"&prefdates="+prefdates+"&prefdress="+prefdress+"&prefemployment="+prefemployment+"&prefdetails="+prefdetails+"&uniqueid="+uniqueid+"&username="+username,
           //Show Message Before Sending
           beforeSend: function() {
              $('.flash-outer').html(
				'<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>   Please Wait.. </div>'
              );
              $('#prefLoader').show();
              $('#updatePreference').hide('fast');
           },	

           success: function(data)
           {
              //console.log(data);
              //Process Data From Controller
              var info = JSON.parse(data);

              if (info.result_info.type == "success") {
                    setTimeout(function() {
                        $('.flash-outer').html(
				            '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  '+info.result_info.message+'</div>'
                        );
                   }, delay);
                   $('#prefLoader').show();
               
                   $('.clickable').html('<div><a class="btn-secondry add-item m-r5" href="'+url+'us-index/'+uniqueid+'/?tab=timeline"><b style="color: white;">Continue To Virtual Pool</b></a> </div>');
                   $('#Preference').hide('slow');
                   $('#dating-pool-inside').show();

              } else {

                setTimeout(function() {
                    $('.flash-outer').html(
				        '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  '+info.result_info.message+'</div>'
                    );
                   }, delay);
                   $('#prefLoader').hide();
                   $('#updatePreference').show('slow');
                }
            }
        });

      });

     });



     
    function replace( hide, show ) {
        document.getElementById(hide).style.display="none";
        document.getElementById(show).style.display="block";
    }

 