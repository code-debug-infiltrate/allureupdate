function postFormFunction() {
    var postButton = document.getElementById('postButton');
    var postForm = document.getElementById('postForm');
    
    if (postButton.style.display === "none") {
        postButton.style.display="block";
        postForm.style.display="none";
    } else {
        postForm.style.display="block";
        postButton.style.display="none";
    }
}








function validatePostImage(event){
    var formData = new FormData();

    var file = document.getElementById("postimage").files[0];
    
    formData.append("FileData", file);

    var t = file.type.split('/').pop().toLowerCase();
    
    if ((t != "jpeg" && t != "jpg" && t != "png" && t != "bmp") && (t != "mp4" && t != "mkv")) {
     alert('Please Use a Valid Image/Video File \n e.g. jpeg, jpg, png, bmp, mp4, mkv formats only.');
     document.getElementById("postimage").value = '';
     return false;
    }
    
    if (t == "jpeg" && t == "jpg" && t == "png" && file.size > 1024000){
        alert('Max Upload Size is 1MB Only');
        document.getElementById("postimage").value = '';
        return false;
    } else if (t == "mp4" && t == "mkv" && file.size > 10240000) {
        alert('Max Upload Size is 10MB Only');
        document.getElementById("postimage").value = '';
        return false;
    }
    
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('output_postimage');
        output.src = reader.result;
    }
    
    reader.readAsDataURL(event.target.files[0]);
    return true;
}






$(document).ready(function() {

    //Check Post Details
    $('#createPost').click(function(e){

        e.preventDefault();

        //Process And Validate EMail 
        var postDetails = $('#postDetails').val();
        if(postDetails == ''){
            $('.postDetailsError_box').html(
                '<span style="color:red;">Enter Post Details</span>'
            );
            $('#postDetails').focus();
            return false;
        }
        if(postDetails.length < 50 || postDetails.length > 1500 ){
            $('.postDetailsError_box').html(
                '<span style="color:red;">Post Details Must Be Between 50 to 1500 Characters</span>'
            );
            $('#postDetails').focus();
            return false;
        }

        var uniqueid = $('#uniqueid').val();
        var username = $('#username').val();
        var url = $('#url').val();
        var url5 = $('#url50').val();

        var loginURL = url+url5;

        return true;
        
      });
                
   });


 

