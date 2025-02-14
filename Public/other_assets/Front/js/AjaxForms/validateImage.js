      function validateProfileImage(event){
        
        var formData = new FormData();

        var file = document.getElementById("profileimage").files[0];
        formData.append("FileData", file);

        var t = file.type.split('/').pop().toLowerCase();
        
        if ((t != "jpeg" && t != "jpg" && t != "png" && t != "bmp") && (t != "mp4" && t != "mkv")) {
         alert('Please Use a Valid Image/Video File \n e.g. jpeg, jpg, png, bmp, mp4, mkv formats only.');
         document.getElementById("profileimage").value = '';
         return false;
        }

        if (t == "jpeg" && t == "jpg" && t == "png" && file.size > 1024000){
            alert('Max Upload Size is 1MB Only');
            document.getElementById("profileimage").value = '';
            return false;
        }else if (t == "mp4" && t == "mkv" && file.size > 10240000) {
            alert('Max Upload Size is 10MB Only');
            document.getElementById("profileimage").value = '';
            return false;
        }
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_profileimage');
            output.src = reader.result;
        }

        $('.submitProfile').show();

        reader.readAsDataURL(event.target.files[0]);
        return true;
    }
 









    function validateDatapage(event){
        var formData = new FormData();

        var file = document.getElementById("datapage").files[0];
        formData.append("FileData", file);

        var t = file.type.split('/').pop().toLowerCase();
        
        if ((t != "jpeg" && t != "jpg" && t != "png" && t != "bmp") && (t != "mp4" && t != "mkv")) {
         alert('Please Use a Valid Image/Video File \n e.g. jpeg, jpg, png, bmp, mp4, mkv formats only.');
         document.getElementById("datapage").value = '';
         return false;
        }

        if (t == "jpeg" && t == "jpg" && t == "png" && file.size > 1024000){
            alert('Max Upload Size is 1MB Only');
            document.getElementById("datapage").value = '';
            return false;
        }else if (t == "mp4" && t == "mkv" && file.size > 10240000) {
            alert('Max Upload Size is 10MB Only');
            document.getElementById("datapage").value = '';
            return false;
        }
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_datapage');
            output.src = reader.result;
        }
        
        
        $('.submitCover').show();
        reader.readAsDataURL(event.target.files[0]);
        return true;
    }
 



    