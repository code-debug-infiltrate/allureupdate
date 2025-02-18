$(document).ready(function() {

    var delay = 2000;

      //UpdateMyself Button Action
      $('#updateMyself').click(function(e){

         e.preventDefault();

        //Process orientation       
        var myorientation = $('#myorientation').val();
        if(!myorientation){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Sexual Orientation</span>'
            );
            $('#myorientation').focus();
            return false;
        }  

        //Process height       
        var myheight = $('#myheight').val();
        if(!myheight){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Height</span>'
            );
            $('#myheight').focus();
            return false;
        } 
        
        //Process height       
        var myweight = $('#myweight').val();
        if(!myweight){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Weight</span>'
            );
            $('#myweight').focus();
            return false;
        } 


        //Process bodytype       
        var mybodytype = $('#mybodytype').val();
        if(!mybodytype){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Body Type</span>'
            );
            $('#mybodytype').focus();
            return false;
        }  

        //Process height       
        var myreligion = $('#myreligion').val();
        if(!myreligion){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Religion</span>'
            );
            $('#myreligion').focus();
            return false;
        } 

        //Process seeking       
        var myseeking = $('#myseeking').val();
        if(!myseeking){
            $('.myselfError_box').html(
                '<span style="color:red;">Select What Kind Of Relationship You Seeking</span>'
            );
            $('#myseeking').focus();
            return false;
        }  

        //Process height       
        var mysmoking = $('#mysmoking').val();
        if(!mysmoking){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Smoking Habit</span>'
            );
            $('#mysmoking').focus();
            return false;
        } 

        //Process height       
        var mycomplexion = $('#mycomplexion').val();
        if(!mycomplexion){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Complexion</span>'
            );
            $('#mycomplexion').focus();
            return false;
        } 

        //Process ethnicity       
        var myethnicity = $('#myethnicity').val();
        if(!myethnicity){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Ethnicity</span>'
            );
            $('#myethnicity').focus();
            return false;
        }  

        //Process height       
        var mydrinking = $('#mydrinking').val();
        if(!mydrinking){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Drinking Habit</span>'
            );
            $('#mydrinking').focus();
            return false;
        } 

        //Process height       
        var myeating = $('#myeating').val();
        if(!myeating){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Eating Habit</span>'
            );
            $('#myeating').focus();
            return false;
        } 

        //Process Pets       
        var mypets = $('#mypets').val();
        if(!mypets){
            $('.myselfError_box').html(
                '<span style="color:red;">Tell Us If You Like Pets</span>'
            );
            $('#mypets').focus();
            return false;
        }  

        //Process dates       
        var mydates = $('#mydates').val();
        if(!mydates){
            $('.myselfError_box').html(
                '<span style="color:red;">How Often You Like Going On Dates</span>'
            );
            $('#mydates').focus();
            return false;
        } 
        
        //Process Have Kids       
        var myhavekids = $('#myhavekids').val();
        if(!myhavekids){
            $('.myselfError_box').html(
                '<span style="color:red;">How Many Kids Do You Have?</span>'
            );
            $('#myhavekids').focus();
            return false;
        }
        
        //Process Marital Status       
        var mymaritalstatus = $('#mymaritalstatus').val();
        if(!mymaritalstatus){
            $('.myselfError_box').html(
                '<span style="color:red;">Marital Status</span>'
            );
            $('#mymaritalstatus').focus();
            return false;
        }


        //Process Want Kids       
        var mywantkids = $('#mywantkids').val();
        if(!mywantkids){
            $('.myselfError_box').html(
                '<span style="color:red;">I Want Kids</span>'
            );
            $('#mywantkids').focus();
            return false;
        }


        //Process dress       
        var mydress = $('#mydress').val();
        if(!mydress){
            $('.myselfError_box').html(
                '<span style="color:red;">When It Comes To Dressing?</span>'
            );
            $('#mydress').focus();
            return false;
        }  
        
        //Process employment       
        var myemployment = $('#myemployment').val();
        if(!myemployment){
            $('.myselfError_box').html(
                '<span style="color:red;">Select Your Employment Status</span>'
            );
            $('#myemployment').focus();
            return false;
        } 

        //Process And Validate EMail    
        var mydetails = $('#mydetails').val();
        if(mydetails == ''){
            $('.myselfError_box').html(
                '<span style="color:red;">Enter More Relevant Details About Yourself</span>'
            );
            $('#mydetails').focus();
            return false;
        }

        if(mydetails.length < 50 || mydetails.length > 2000 ){
            $('.myselfError_box').html(
                '<span style="color:red;">Your Personality Details Must Be Between 50 to 2000 Characters</span>'
            );
            $('#mydetails').focus();
            return false;
        }

        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var urlmy = $('#urlmy').val();

        var loginURL = url+urlmy;

        //Process Ajax Form Submittion Without Page Reload                
       $.ajax
       ({
           type: "POST",
           url: loginURL,
           data: "myorientation="+myorientation+"&mymaritalstatus="+mymaritalstatus+"&mywantkids="+mywantkids+"&myhavekids="+myhavekids+"&myheight="+myheight+"&myweight="+myweight+"&mybodytype="+mybodytype+"&myreligion="+myreligion+"&myseeking="+myseeking+"&mysmoking="+mysmoking+"&mycomplexion="+mycomplexion+"&myethnicity="+myethnicity+"&mydrinking="+mydrinking+"&myeating="+myeating+"&mypets="+mypets+"&mydates="+mydates+"&mydress="+mydress+"&myemployment="+myemployment+"&mydetails="+mydetails+"&uniqueid="+uniqueid+"&username="+username,
           //Show Message Before Sending
           beforeSend: function() {
              $('.flash-outer').html(
				'<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>   Please Wait.. </div>'
              );
              $('#myselfLoader').show();
              $('#updateMyself').hide('fast');
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
                   $('#myselfLoader').hide();
               
                   // $('#newList').html('<li style="color: black;"><a href="#" title="'+myself+'">'+myself+'</li>');
                   $('#preference').show('slow');

              } else {

               setTimeout(function() {
                    $('.flash-outer').html(
				        '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  '+info.result_info.message+'</div>'
                    );
                   }, delay);
                   $('#myselfLoader').hide();
                   $('#updateMyself').show('slow');
               }
           }
        });

      });

     });




    function replace( hide, show ) {
        document.getElementById(hide).style.display="none";
        document.getElementById(show).style.display="block";
    }

 