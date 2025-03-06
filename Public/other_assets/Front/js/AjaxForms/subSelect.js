    //Initialize Payment By Bank Transfer
    $('#payWithTransfer').click(function(e){

        var delay = 2000;
        e.preventDefault();

        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var cardamount = $('#cardamount').val();
        var currency = $('#currency').val();
        var memo = $('#memo').val();
        var method = "Bank Deposit";
        var r = "ajax-bank-transfer/";

        //Process Pass 
        var amount = $('#planAmount').val();
        if(amount == ''){
            $('.amountDepositError_box').html(
            '<span style="color:red;">Select a Subscription Plan Before Paying With Bank Transfer</span>'
            );
            $('#planAmount').focus();
            return false;
        }
            
        var url = $('#url').val();
        
        //Process Ajax Form Submittion Without Page Reload                
        $.ajax
        ({
            type: "POST",
            url: url+r,
            data: "uniqueid="+uniqueid+"&email="+email+"&username="+username+"&currency="+currency+"&amount="+amount+"&method="+method+"&memo="+memo,
            //Show Message Before Sending
            beforeSend: function() {
            $('.flash-outer').html(
                    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
            );
            $('#payWithTransfer').hide('slow');
            },	

            success: function(data)
            {
            //console.log(data);
            //Process Data From Controller
            var info = JSON.parse(data);

            if (info.bank.result_info.type == "success") {
                setTimeout(function() {
                    $('.flash-outer').html(
                            '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.bank.result_info.message+'</div>'
                    );
                    $('.swiftCode').html('<div style="font-size: 16px;"><b>Swift Code:</b> '+info.bank.result_message.swiftcode+' (For International Transfers Only)</div>');
                    $('.bankName').html('<div style="font-size: 16px;"><b>Bank Name:</b> '+info.bank.result_message.bankname+' </div>');
                    $('.accountName').html('<div style="font-size: 16px;"><b>Account Name:</b> '+info.bank.result_message.acctname+' </div>');
                    $('.acccountNumber').html('<div style="font-size: 16px;"><b>Account Number:</b> '+info.bank.result_message.acctnum+' </div>');
                    $('.amount').html('<div style="font-size: 16px;"><b>Amount:</b> '+currency+''+info.plan.amount+':00 (NGN'+cardamount*info.plan.amount+' Naira Only)</div>');
                    $('.narration').html('<div style="font-size: 16px;"><b>Narration:</b> '+amount+'-'+memo+' </div>');
                }, delay);
                    $('#depositForm').hide();
                    $('#transfer_info').show('slow');
            } else {
                setTimeout(function() {
                    $('.flash-outer').html(
                            '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
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
        var memo = $('#memo').val();
        var r = "ajax-bank-transfer-confirm/";

        //Process Pass 
        var amount = $('#planAmount').val();
        if(amount == ''){
        $('.amountDepositError_box').html(
            '<span style="color:red;">You Have Not Selected a Subscription Plan</span>'
        );
        $('#planAmount').focus();
        return false;
        }
            
        var url = $('#url').val();
        //console.log(amount);
        //Process Ajax Form Submittion Without Page Reload                
        $.ajax
        ({
        type: "POST",
        url: url+r,
        data: "uniqueid="+uniqueid+"&email="+email+"&username="+username+"&currency="+currency+"&amount="+amount+"&type="+type+"&memo="+memo,
        //Show Message Before Sending
        beforeSend: function() {
            $('.flash-outer').html(
                '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
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
                        '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
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
                        '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
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
        var r = "ajax-user-online-card/";

        //Process Pass 
        var amount = $('#planAmount').val();
        if(amount == ''){
            $('.amountDepositError_box').html(
            '<span style="color:red;">Select a Subscription Plan Before Payment Can be Done Online</span>'
            );
            $('#planAmount').focus();
            return false;
        }

        
        var url = $('#url').val();
    
        //Process Ajax Form Submittion Without Page Reload                
        $.ajax
        ({
            type: "POST",
            url: url+r,
            data: "uniqueid="+uniqueid+"&fname="+fname+"&lname="+lname+"&email="+email+"&username="+username+"&currency="+currency+"&amount="+amount+"&type="+type+"&memo="+memo,
            //Show Message Before Sending
            beforeSend: function() {
            $('.flash-outer').html(
                    '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/>  Processing, Please Wait.. </div>'
            );
            $('#payWithOnline').hide('slow');
            },	

            success: function(data)
            {
            console.log(data);
            //Process Data From Controller
            var info = JSON.parse(data);

            if (info.status == true) {
                setTimeout(function() {
                    $('.flash-outer').html(
                            '<div class="flash-inner" style="color: green;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.message+'</div>'
                    );
                    $('.urlLink').html('<a href="'+info.data.authorization_url+'" target="_blank"><img src="/Images/Body/card-pay.png" style="width: 400px;"></a>');
                }, delay);
                    $('#depositForm').hide();
                    $('#online_info').show('slow');
            } else {
                setTimeout(function() {
                    $('.flash-outer').html(
                            '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px; top: -50px;" alt="Alert Image"/> '+info.message+'</div>'
                    );
                }, delay);
                $('#payWithOnline').show('slow');
            }
            }
        });
    });













 
