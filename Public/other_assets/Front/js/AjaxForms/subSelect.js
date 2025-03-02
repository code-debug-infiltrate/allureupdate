//Initialize Payment By Bank Transfer
$('#payWithTransfer').click(function(e){

    var delay = 2000;
    e.preventDefault();

    var uniqueid = $('#uniqueid').val();
    var username = $('#username').val();
    var email = $('#email').val();
    var currency = $('#currency').val();
    var method = "Bank Deposit";
    var cur_bal = $('#cur').val();
    var r = "ajax-bank-transfer/";

    //Process Pass 
    var amount = $('#amountDeposit').val();
    if(amount == ''){
        $('.amountDepositError_box').html(
        '<span style="color:red;">How Much Do You Want To Deposit?</span>'
        );
        $('#amountDeposit').focus();
        return false;
    }
        
    var url = $('#url').val();
    
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: url+r,
        data: "uniqueid="+uniqueid+"&email="+email+"&username="+username+"&currency="+currency+"&amount="+amount+"&method="+method+"&cur_bal="+cur_bal,
        //Show Message Before Sending
        beforeSend: function() {
        $('.flash-outer').html(
                '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
        );
        $('#payWithTransfer').hide('slow');
        },	

        success: function(data)
        {
        //console.log(data);
        //Process Data From Controller
        var info = JSON.parse(data);

        if (info.result_info.type == "success") {
            setTimeout(function() {
                $('.flash-outer').html(
                        '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                );
                $('.swiftCode').html('<div style="font-size: 16px;"><b>Swift Code:</b> '+info.result_message.swift+' (For International Transfers Only)</div>');
                $('.bankName').html('<div style="font-size: 16px;"><b>Bank Name:</b> '+info.result_message.bank+' </div>');
                $('.accountName').html('<div style="font-size: 16px;"><b>Account Name:</b> '+info.result_message.accountName+' </div>');
                $('.acccountNumber').html('<div style="font-size: 16px;"><b>Account Number:</b> '+info.result_message.accountNumber+' </div>');
                $('.amount').html('<div style="font-size: 16px;"><b>Amount:</b> '+currency+''+amount+':00 </div>');
                $('.narration').html('<div style="font-size: 16px;"><b>Narration:</b> '+uniqueid+'-'+memo+' </div>');
            }, delay);
                $('#depositForm').hide();
                $('#transfer_info').show('slow');
        } else {
            setTimeout(function() {
                $('.flash-outer').html(
                        '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                );
            }, delay);
            $('#payWithTransfer').show('slow');
        }
        }
    });
});


//Confirm Bank Transfer
$('#doneBankTransfer').click(function(e){

    e.preventDefault();

    var delay = 2000;
 
    var uniqueid = $('#uniqueid').val();
    var username = $('#username').val();
    var email = $('#email').val();
    var currency = $('#currency').val();
    var type = "Bank Deposit";
    var cur_bal = $('#cur').val();
    var r = "ajax-bank-transfer-done/";

    //Process Pass 
    var amount = $('#amountDeposit').val();
    if(amount == ''){
       $('.amountDepositError_box').html(
          '<span style="color:red;">How Much Do You Want To Deposit?</span>'
       );
       $('#amountDeposit').focus();
       return false;
    }

    if(amount.length < 4 || amount.length > 8){
       $('.amountDepositError_box').html(
          '<span style="color:red;">This Amount Is Not Acceptable.</span>'
       );
       $('#amountDeposit').focus();
       return false;
    }

    //Process Pass 
    var memo = $('#memoDeposit').val();
    if(memo == ''){
       $('.memoDepositError_box').html(
          '<span style="color:red;">Narration Cannot Be Empty!</span>'
       );
       $('#memoDeposit').focus();
       return false;
    }

    if(memo.length < 5 || memo.length > 40){
       $('.memoDepositError_box').html(
          '<span style="color:red;">Narration must Be 5 To 40 Characters Long</span>'
       );
       $('#memoDeposit').focus();
       return false;
    }
        
    var url = $('#urlWallet').val();
    
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
       type: "POST",
       url: url+r,
       data: "uniqueid="+uniqueid+"&email="+email+"&username="+username+"&currency="+currency+"&amount="+amount+"&type="+type+"&memo="+memo+"&cur_bal="+cur_bal,
       //Show Message Before Sending
       beforeSend: function() {
          $('.flash-outer').html(
               '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
          );
          $('#doneBankTransfer').hide('slow');
       },	

       success: function(data)
       {
          //console.log(data);
          //Process Data From Controller
          var info = JSON.parse(data);

          if (info.result_info.type == "success") {
                 setTimeout(function() {
                   $('.flash-outer').html(
                       '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
               $('.swiftCode').html('<div style="font-size: 16px;"><b>Swift Code:</b> '+info.result_message.swift+' (For International Transfers Only)</div>');
               $('.bankName').html('<div style="font-size: 16px;"><b>Bank Name:</b> '+info.result_message.bank+' </div>');
               $('.accountName').html('<div style="font-size: 16px;"><b>Account Name:</b> '+info.result_message.accountName+' </div>');
               $('.acccountNumber').html('<div style="font-size: 16px;"><b>Account Number:</b> '+info.result_message.accountNumber+' </div>');
               $('.amount').html('<div style="font-size: 16px;"><b>Amount:</b> '+currency+''+amount+':00 </div>');
               $('.narration').html('<div style="font-size: 16px;"><b>Narration:</b> '+uniqueid+'-'+memo+' </div>');
                }, delay);
                $('#depositForm').hide();
                $('#transfer_info').hide();
                $('#transfer_done_info').show('slow');
             } else {
                 setTimeout(function() {
                   $('.flash-outer').html(
                       '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
                }, delay);
                $('#doneBankTransfer').show('slow');
             }
       }
    });
});



//Initialize Payment By Online Card
$('#payWithOnline').click(function(e){

  var delay = 2000;
  e.preventDefault();

  var uniqueid = $('#uniqueid').val();
  var username = $('#username').val();
  var fname = $('#fname').val();
  var lname = $('#lname').val();
  var email = $('#email').val();
  var currency = $('#currency').val();
  var type = "Online Card";
  var cur_bal = $('#cur').val();
  var r = "ajax-online-card/";

  //Process Pass 
  var amount = $('#amountDeposit').val();
  if(amount == ''){
      $('.amountDepositError_box').html(
      '<span style="color:red;">How Much Do You Want To Deposit?</span>'
      );
      $('#amountDeposit').focus();
      return false;
  }

  if(amount.length < 4 || amount.length > 8){
      $('.amountDepositError_box').html(
      '<span style="color:red;">This Amount Is Not Acceptable.</span>'
      );
      $('#amountDeposit').focus();
      return false;
  }

  //Process Pass 
  var memo = $('#memoDeposit').val();
  if(memo == ''){
      $('.memoDepositError_box').html(
      '<span style="color:red;">Narration Cannot Be Empty!</span>'
      );
      $('#memoDeposit').focus();
      return false;
  }

  if(memo.length < 5 || memo.length > 40){
      $('.memoDepositError_box').html(
      '<span style="color:red;">Narration must Be 5 To 40 Characters Long</span>'
      );
      $('#memoDeposit').focus();
      return false;
  }
      
  var url = $('#urlWallet').val();
  
  //Process Ajax Form Submittion Without Page Reload                
  $.ajax
  ({
      type: "POST",
      url: url+r,
      data: "uniqueid="+uniqueid+"&fname="+fname+"&lname="+lname+"&email="+email+"&username="+username+"&currency="+currency+"&amount="+amount+"&type="+type+"&memo="+memo+"&cur_bal="+cur_bal,
      //Show Message Before Sending
      beforeSend: function() {
      $('.flash-outer').html(
              '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
      );
      $('#payWithOnline').hide('slow');
      },	

      success: function(data)
      {
      //console.log(data);
      //Process Data From Controller
      var info = JSON.parse(data);

      if (info.status == true) {
          setTimeout(function() {
              $('.flash-outer').html(
                      '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.message+'</div>'
              );
              $('.urlLink').html('<a href="'+info.data.authorization_url+'" target="_blank" class="btn-secondry add-item m-r5"><img src="/Images/Body/thumb-up.png" style="width: 15%; margin-right: 20px;">Pay With Card Or USSD Code</a>');
          }, delay);
              $('#depositForm').hide();
              $('#online_info').show('slow');
      } else {
          setTimeout(function() {
              $('.flash-outer').html(
                      '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.message+'</div>'
              );
          }, delay);
          $('#payWithOnline').show('slow');
      }
      }
  });
});





//Fetch Fondo User Account Details
$('#fondoAmount').click(function(e){

    e.preventDefault();

    var delay = 2000;
 
    var uniqueid = $('#uniqueid').val();
    var r = "ajax-check-fondo-email/";

    //Process Pass 
    var fondoEmail = $('#fondoEmail').val();
    if(fondoEmail == ''){
       $('.fondoEmailError_box').html(
          '<span style="color:red;">Enter Beneficiary Email ID</span>'
       );
       $('#fondoEmail').focus();
       return false;
    }
        
    var url = $('#urlWallet').val();
    
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
       type: "POST",
       url: url+r,
       data: "uniqueid="+uniqueid+"&fondoEmail="+fondoEmail,
       //Show Message Before Sending
       beforeSend: function() {
          $('.fondoEmailAlert_box').html(
               '<span style="color: red;">Checking Account Details... </span>'
          );
       },	

       success: function(data)
       {
          //console.log(data);
          //Process Data From Controller
          var info = JSON.parse(data);

          if (info.result_info.type == "success") {
                 setTimeout(function() {
                    $('.fondoEmailAlert_box').html(
                        '<span style="color: green; text-transform: capitalize;">Beneficiary Name: '+info.user_info.fname+' '+info.user_info.lname+' </span>'
                   );
                }, delay);
             } else {
                 setTimeout(function() {
                    $('.fondoEmailAlert_box').html(
                        '<span style="color: red;">'+info.result_info.message+'...</span>'
                   );
                }, delay);
             }
       }
    });
 });



 //Fondo Internal Transfer
$('#fondoTransfer').click(function(e){

    e.preventDefault();

    var delay = 2000;
 
    var uniqueid = $('#uniqueid').val();
    var username = $('#username').val();
    var email = $('#email').val();
    var currency = $('#currency').val();
    var type = "Internal";
    var cur_bal = $('#cur').val();
    var sec_p = $('#sec').val();
    var r = "ajax-internal-transfer/";

    //Process Pass 
    var fondoEmail = $('#fondoEmail').val();
    if(fondoEmail == ''){
       $('.fondoEmailError_box').html(
          '<span style="color:red;">Enter Beneficiary Email ID</span>'
       );
       $('#fondoEmail').focus();
       return false;
    }

    var fondoAmount = $('#fondoAmount').val();
    if(fondoAmount == ''){
       $('.fondoAmountError_box').html(
          '<span style="color:red;">How Much Do You Want To Send?</span>'
       );
       $('#fondoAmount').focus();
       return false;
    }

    if(fondoAmount.length < 3 || fondoAmount.length > 6){
       $('.fondoAmountError_box').html(
          '<span style="color:red;">This Amount Is Not Acceptable.</span>'
       );
       $('#fondoAmount').focus();
       return false;
    }

    // var bal = Number(parseFloat(cur_bal));
    // var pur = Number(parseFloat(fondoAmount));
    if(Number(parseFloat(cur_bal)) <= Number(parseFloat(fondoAmount))){
        $('.fondoAmountError_box').html(
           '<span style="color:red;">Insufficient Balance. Add Money</span>'
        );
        $('#fondoAmount').focus();
        return false;
     }


    var fondoPin = $('#fondoPin').val();
    if(fondoPin == ''){
       $('.fondoPinError_box').html(
          '<span style="color:red;">Transaction Pin Is Needed</span>'
       );
       $('#fondoPin').focus();
       return false;
    }

    if(Number(parseFloat(fondoPin)) !== Number(parseFloat(sec_p))){
       $('.fondoPinError_box').html(
          '<span style="color:red;">Wrong Transaction Pin</span>'
       );
       $('#fondoPin').focus();
       return false;
    }
    
    //Process Pass 
    var fondoMemo = $('#fondoMemo').val();
    if(fondoMemo == ''){
       $('.fondoMemoError_box').html(
          '<span style="color:red;">Narration Cannot Be Empty!</span>'
       );
       $('#fondoMemo').focus();
       return false;
    }

    if(fondoMemo.length < 5 || fondoMemo.length > 40){
       $('.fondoMemoError_box').html(
          '<span style="color:red;">Narration must Be 5 To 40 Characters Long</span>'
       );
       $('#fondoMemo').focus();
       return false;
    }
        
    var url = $('#urlWallet').val();
    
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
       type: "POST",
       url: url+r,
       data: "uniqueid="+uniqueid+"&email="+email+"&username="+username+"&currency="+currency+"&fondoEmail="+fondoEmail+"&fondoAmount="+fondoAmount+"&fondoPin="+fondoPin+"&type="+type+"&fondoMemo="+fondoMemo+"&cur_bal="+cur_bal,
       //Show Message Before Sending
       beforeSend: function() {
          $('.flash-outer').html(
               '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
          );
          $('#fondoTransfer').hide('slow');
       },	

       success: function(data)
       {
          //console.log(data);
          //Process Data From Controller
          var info = JSON.parse(data);

          if (info.result_info.type == "success") {
                 setTimeout(function() {
                   $('.flash-outer').html(
                       '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
                    $('.swiftCode').html('<div style="font-size: 16px;"><b>Swift Code:</b> '+info.result_message.swift+' (For International Transfers Only)</div>');
                }, delay);
                $('#fondoTransfer').hide();
                $('#fondoTransfer_done').show('fast');
             } else {
                 setTimeout(function() {
                   $('.flash-outer').html(
                       '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 50px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                     );
                }, delay);
                $('#fondoTransfer').show('slow');
             }
       }
    });
 });






 
