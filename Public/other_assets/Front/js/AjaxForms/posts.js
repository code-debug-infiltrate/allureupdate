	function comtSubmitFunction(e) {

		var delay = 0;
		var uniqueid = $('#uniqueid').val();
		var username = $('#username').val();
		var sender = $('#sender').val();
		var receiver = $('#receiver').val();
		var postid = $('#postid').val();
		var commentid = $('#commentid').val();
		var details = $('#commentDetails').val();

		//Process And Validate EMail  
        if(details == ''){
            $('.flash-outer').html(
                '<div class="flash-inner"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Comment Can Not Be Empty</span>'
            );
            $('#commentDetails').focus();
            return false;
        }

		if(details.length < 3 || details.length > 5000 ){
			$('.flash-outer').html(
                '<div class="flash-inner"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Comment Must be Bewtween 3 to 5000 Characters. </span>'
            );
            $('#commentDetails').focus();
			return false;
		 } 
		 
		var ubURL = $('#urlComment').val();

		//Process Ajax Form Submittion Without Page Reload                
		$.ajax
		({
			type: "POST",
			url: ubURL,
			data: "uniqueid="+uniqueid+"&username="+username+"&sender="+sender+"&receiver="+receiver+"&postid="+postid+"&commentid="+commentid+"&details="+details,
			
			//Show Message Before Sending
			beforeSend: function() {
				$('.flash-outer').html(
				   '<div class="flash-inner"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait...  </div>'
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
	
	

	
	
	
	function readMoreFunction(button) {

		var btnText = button;
		var contentText = button.previousElementSibling;
		var dots = contentText.previousElementSibling.children[0];
		
		var delay = 2000;
		var uniqueid = $('#uniqueid').val();
		var username = $('#username').val();
		var subURL = $('#urlViews').val();
		
		if (dots.style.display === "none") {

			dots.style.display = "inline";
			btnText.innerHTML = "Read More";
			contentText.style.display = "none";

		} else {

			dots.style.display = "none";
			btnText.innerHTML = "Show Less";
			contentText.style.display = "inline";
			var postid = button.id;
			//Process Ajax Form Submittion Without Page Reload                
			$.ajax
			({
				type: "POST",
				url: subURL,
				data: "uniqueid="+uniqueid+"&username="+username+"&postid="+postid,

				success: function(data)
				{
					//console.log(data);
					//Process Data From Controller
					var info = JSON.parse(data);

					if (info.result_info.type == "success") {
						setTimeout(function() {
						
						}, delay);
					} else {
						setTimeout(function() {
						
						}, delay);
					}
				}
			});	
		}
		
	}




	function actionFunction(li) {
		
		var delay = 600;
		var uniqueid = $('#uniqueid').val();
		var postedby = $('#postedby').val();
		var username = $('#username').val();
		var ubURL = $('#urlAction').val();
		
		var postid = (li).getAttribute("alt");
		var action = li.id;
		
		//Process Ajax Form Submittion Without Page Reload 
		$.ajax
		({
			type: "POST",
			url: ubURL,
			data: "uniqueid="+uniqueid+"&username="+username+"&action="+action+"&postid="+postid+"&postedby="+postedby,

			//Show Message Before Sending
			beforeSend: function() {
				$('.flash-outer').html(
				   '<div class="flash-inner" style="color: black;><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait...  </div>'
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
	
		
	}



	function commentsFunction(e) {
        
		var present = (e).getAttribute("alt")
		var current = document.getElementById('BankTransferDetails');

		if (current.style.display === "none") {
			current.style.display="block";
		} else {
			current.style.display="none";
		}
    }





	


	function reportPostFunction(a) {
		
		var delay = 600;
		var uniqueid = $('#uniqueid').val();
		var username = $('#username').val();
		var ubURL = $('#urlReport').val();
		
		var postid = a.id;
		var reason = (a).getAttribute("alt");

		//Process Ajax Form Submittion Without Page Reload                
		$.ajax
		({
			type: "POST",
			url: ubURL,
			data: "uniqueid="+uniqueid+"&username="+username+"&postid="+postid+"&reason="+reason,

			//Show Message Before Sending
			beforeSend: function() {
				$('.flash-outer').html(
				   '<div class="flash-inner"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/>  Processing, Please Wait...  </div>'
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
	
		
	}







	function deletePostFunction(li) {
		
		var delay = 600;
		var uniqueid = $('#uniqueid').val();
		var username = $('#username').val();
		var ubURL = $('#urlDelete').val();
		
		var postid = li.id;
		var action = (li).getAttribute("alt");

		//Process Ajax Form Submittion Without Page Reload                
		$.ajax
		({
			type: "POST",
			url: ubURL,
			data: "uniqueid="+uniqueid+"&username="+username+"&postid="+postid,

			//Show Message Before Sending
			beforeSend: function() {
				$('.flash-outer').html(
				   '<div class="flash-inner"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Processing, Please Wait...  </div>'
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
	
		
	}





