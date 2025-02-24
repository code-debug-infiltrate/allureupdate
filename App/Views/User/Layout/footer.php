    <?php 
    
    include 'business-tools-modal.php';

    include 'business-support-modal.php';

    include 'my-wallet-modal.php';

    ?>
    
    
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

	<div class="ttr-overlay"></div>

    <button class="back-to-top fa fa-chevron-up" ></button>

<!-- External JavaScripts -->



<script src="<?= public_asset('/other_assets/User/vendors/bootstrap/js/popper.min.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/bootstrap-select/bootstrap-select.min.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/magnific-popup/magnific-popup.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/counter/waypoints-min.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/counter/counterup.min.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/imagesloaded/imagesloaded.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/masonry/masonry.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/masonry/filter.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/owl-carousel/owl.carousel.js') ?>"></script>
<script src='<?= public_asset('/other_assets/User/vendors/scroll/scrollbar.min.js') ?>'></script>
<script src="<?= public_asset('/other_assets/User/js/functions.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/vendors/chart/chart.min.js') ?>"></script>
<script src="<?= public_asset('/other_assets/User/js/admin.js') ?>"></script>


<!-- Image Validation -->
<!-- <script src="<?= public_asset('/other_assets/User/js/validateImage.js') ?>"></script> -->


</body>
</html>