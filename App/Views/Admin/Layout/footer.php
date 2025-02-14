<script>
  function myPrintFunction() {
  window.print();
  }
</script>

  <!-- Vendor JS Files -->
  <script src="<?= public_asset('/other_assets/Admin/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?= public_asset('/other_assets/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= public_asset('/other_assets/Admin/vendor/chart.js/chart.min.js') ?>"></script>
  <script src="<?= public_asset('/other_assets/Admin/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?= public_asset('/other_assets/Admin/vendor/quill/quill.min.js') ?>"></script>
  <script src="<?= public_asset('/other_assets/Admin/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?= public_asset('/other_assets/Admin/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?= public_asset('/other_assets/Admin/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= public_asset('/other_assets/Admin/js/main.js') ?>"></script>


<script>
    function validateImage(event){
        var formData = new FormData();

        var file = document.getElementById("profileimage").files[0];
        formData.append("FileData", file);

        var t = file.type.split('/').pop().toLowerCase();
        if (t != "BMP" && t != "PNG" && t != "JPG" && t != "JPEG" && t != "jpeg" && t != "jpg" && t != "png" && t != "bmp") {
         alert('Please Use a Valid Image File \n e.g. jpeg,jpg,png,bmp formats only.');
         document.getElementById("profileimage").value = '';
         return false;
        }
        if (file.size > 5120000){
            alert('Max Upload Size is 5MB Only');
            document.getElementById("profileimage").value = '';
            return false;
        }
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_profileimage');
            output.src = reader.result;
        }
    reader.readAsDataURL(event.target.files[0]);
        return true;
    }


function myFunction() {
    if (confirm("Hey You Clicked Delete? \n\nAre You Sure You Want To Delete This Record?")) {
       // do stuff
    } else {
      return false;
    }
}
</script>


</body>

</html>