<script>
    //Print Page
  function myPrintFunction() {
  window.print();
  }

  //Delete Option
  function myFunction() {
    if (confirm("Hey You Clicked Delete? \n\nAre You Sure You Want To Delete This Record?")) {
       // do stuff
    } else {
      return false;
    }
}
</script>

<script type="text/javascript">
    const date = new Date();
    const hrs = date.getHours();
    const grtnMsg = document.getElementById('grtnMsg');
    const grtnMsg1 = document.getElementById('grtnMsg1');
    var msg;

    if (hrs > 0) msg = "Mornin', ";
    if (hrs > 5) msg = "Good Morning, ";
    if (hrs > 12) msg = "Good Afternoon, ";
    if (hrs > 17) msg = "Good Evening, ";
    if (hrs > 22) msg = "Go To Bed, ";

    grtnMsg.textContent = msg
    grtnMsg1.textContent = msg
    
    //console.log(msg);
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


<!-- Image Validation -->
<script src="<?= public_asset('/other_assets/User/js/validateImage.js') ?>"></script> 


</body>

</html>