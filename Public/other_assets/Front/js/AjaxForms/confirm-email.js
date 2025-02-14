

function cEmailFunction(a) {

    var delay = 0;
   
    var status = a.id;
    var uniqueid = (a).getAttribute("alt");
    
    var ubURL = $('#urlConEmail').val();
   
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
       type: "POST",
       url: ubURL,
       data: "status="+status+"&uniqueid="+uniqueid,
       
        //Show Message Before Sending
        beforeSend: function() {
           $('.flash-outer').html(
              '<div class="flash-inner"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing... </div>'
           );
        },	

        success: function(data)
        {
          console.log(data);
           //Process Data From Controller
           var info = JSON.parse(data);

            if (info.type == "success") {
               setTimeout(function() {
                   $('.flash-outer').html(
                       '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.message+'</div>'
                       );
                   }, delay);
                   $('#id01').hide();
            } else {
               setTimeout(function() {
                   $('.flash-outer').html(
                       '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.message+'</div>'
                       );
                   }, delay);
            }
        }
    });	

   
};



