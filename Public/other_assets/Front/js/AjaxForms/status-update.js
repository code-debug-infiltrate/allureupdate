

function statusUpdateFunction(a) {

    var delay = 0;
    var uniqueid = $('#uniqueid').val();
    var username = $('#username').val();
    var status = a.id;
	var id = (a).getAttribute("alt");
     
    var ubURL = $('#urlCheck').val();
    
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: ubURL,
        data: "status="+status+"&id="+id+"&uniqueid="+uniqueid+"&username="+username,
        
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
               '<div class="flash-inner"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing... </div>'
            );
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
            } else {
                setTimeout(function() {
                    $('.flash-outer').html(
                        '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                        );
                    }, delay);
            }
        }
    });	

    
};



