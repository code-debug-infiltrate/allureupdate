//Send Buddy Action Form Action
function typeSearchFunction() {

        //a.preventDefault();
        var delay = 0;
        //Process And Validate EMail 
        var url = $('#url').val();
        // specify the server/url you want to load data from
        //var imgUrl = $('#imgUrl').val();
        //var viewUrl = $('#viewUrl').val();
        
        //var status = a.id;
	    //var postid = (a).getAttribute("alt");

        //Process ID 
        var search = $('#par').val();
        if(search == ''){
           $('.searchError_box').html(
              '<span style="color:red; font-size: 10px;">Search Box Cannot Be Empty!</span>'
           );
           $('#par').focus();
           return false;
        }

        if(search.length < 5 || search.length > 40){
            $('.searchError_box').html(
               '<span style="color:red; font-size: 10px;">Use Between 5 to 40 Characters!</span>'
            );
            $('#par').focus();
            return false;
         }

        var loginURL = url;
        
    //Process Ajax Form Submittion Without Page Reload                
    $.ajax
    ({
        type: "POST",
        url: loginURL,
        data: "search="+search+"&url="+url,	

        success: function(data)
        {       
            const postInfo = JSON.parse(data);
            const allPosts = postInfo.result_message;

            console.log(postInfo.result_message);

            function buildallPosts(parent, postInfo) {
            var html = "";
            allPosts.forEach(function(post) {
                //Set Our Post template
                let itemTemplate = `
                    <div class="col-lg-4 col-sm-6">
                        <div class="g-post-classic">
                            <figure>
                            <img src="/Images/Blog/${post.img}" alt="Post Image" class="img-size-50" style="width: 100%; height: 250px;">
                            </figure>
                            <div class="g-post-meta">
                                <div class="post-title" style="text-transform: capitalize; font-size: 9px;">
                                    <h4><a title="url" href="${post.url}">${post.title.substr(0, 55)}...</a></h4>
                                    <p>${post.introduction.substr(0, 60)}...<a title="url" href="${post.url}">Read More</a></p>
                                    <span class="p-date">${post.category}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                //update the html 
                html += itemTemplate
            });
            //Update the parent once
            parent.innerHTML += html;
            }

            buildallPosts(document.getElementById("ajaxAllPosts"), allPosts);

            $('#allPosts').hide('fast');

        }
    });
};









      //Send Buddy Action Form Action
function catSearchFunction() {

    //a.preventDefault();
    var delay = 0;
    //Process And Validate EMail 
    var url = $('#url').val();
    var status = a.id;
    var postid = (a).getAttribute("alt");

    var loginURL = url;
    
//Process Ajax Form Submittion Without Page Reload                
$.ajax
({
    type: "POST",
    url: loginURL,
    data: "postid="+postid+"&status="+status+"&url="+url,
    //Show Message Before Sending
    beforeSend: function() {
        $('.flash-outer').html(
            '<div class="flash-inner" style="color: black;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> Please Wait.. </div>'
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
            $('#smile').hide('fast');
            $('#likes').hide('fast');
            $('#dislikes').hide('fast');

        } else {

        setTimeout(function() {
            $('.flash-outer').html(
                '<div class="flash-inner" style="color: red;"><img src="/Images/Body/alert.png" style="width: 20px;" alt="Alert Image"/> '+info.result_info.message+'</div>'
                );
            }, delay);
            $('#smile').hide('fast');
            $('#likes').hide('fast');
            $('#dislikes').hide('fast');
        }
    }
    });
  };

