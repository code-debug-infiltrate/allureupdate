function bankTransferFunction(e) { 
    var delay = 600; 
    var bankTip = document.getElementById('bankTip');
    var current = document.getElementById('BankTransferDetails');
    

    var planid = $('#planid').val();
    var subURL = $('#paymentURL').val();
    var uniqueid = $('#uniqueid').val();
	var username = $('#username').val();

    if (current.style.display === "none") {
        current.style.display="block";
        bankTip.style.display="block";
        
        //Process Ajax Form Submittion Without Page Reload                
			$.ajax
			({
				type: "POST",
				url: subURL,
				data: "uniqueid="+uniqueid+"&username="+username+"&planid="+planid,

                //Show Message Before Sending
                beforeSend: function() {
                    $('.flash-outer').html(
				   		'<div class="flash-inner" style="color: black;><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Initializing Payment.. </div>'
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
				   			'<div class="flash-inner" style="color: green;><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
						);
						}, delay);
					} else {
						setTimeout(function() {
						$('.flash-outer').html(
				   			'<div class="flash-inner" style="color: red;><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
						);
						}, delay);
					}
				}
			});	

    } else {
        current.style.display="none";
        bankTip.style.display="block";
    }
}









function checkFunction(a) {

    var delay = 0;
    var uniqueid = $('#uniqueid').val();
    var username = $('#username').val();
    var status = a.id;
	var trancid = (a).getAttribute("alt");
     
    var ubURL = $('#urlCheck').val();
    
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: ubURL,
        data: "status="+status+"&trancid="+trancid+"&uniqueid="+uniqueid+"&username="+username,
        
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



