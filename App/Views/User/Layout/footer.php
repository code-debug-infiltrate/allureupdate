        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item" style="font-size: 11px; margin-left: 10px;">
                    <a href="<?= $coyInfo['channel']; ?>" target="_blank" style="color: white;" title="Channel Link"> Channel</a>
                </li>
                <li class="nav-item" style="font-size: 11px; margin-left: 10px;">
                    <a href="#" title="Report Violation" style="color: white;">Report Violation</a>
                </li>
                <li class="nav-item" style="font-size: 11px;">
                  <a class="nav-link" href="<?= baseURL('blog/'); ?>all/" target="_blank" style="color: white;"> News & Updates</a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
                <a target="_blank" href="<?= baseURL('index/'); ?>" style="color: white;">
				          <strong>&copy; Copyright <span> <script type="text/JavaScript">document.write(new Date().getFullYear()); </script> <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></span>. All Rights Reserved </strong>
				        </a>
            </div>
            <div style="font-size: 11px;">
                Powered By <a href="<?= getenv('DV_LINK')?>" class="text-muted" target="_blank"><?= getenv('DV_NAME')?></a>
            </div>
          </div>
        </footer>
      </div>

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

        grtnMsg.textContent = msg;
        grtnMsg1.textContent = msg;
        
    </script>

    </div>
    <!--   Core JS Files   -->
    <script src="<?= public_asset('/other_assets/User/js/core/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= public_asset('/other_assets/User/js/core/popper.min.js') ?>"></script>
    <script src="<?= public_asset('/other_assets/User/js/core/bootstrap.min.js') ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>

    <!-- Chart JS -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/chart.js/chart.min.js') ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

    <!-- Chart Circle -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/chart-circle/circles.min.js') ?>"></script>

    <!-- Datatables -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/datatables/datatables.min.js') ?>"></script>

    <!-- Bootstrap Notify -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

    <!-- Kaiadmin JS -->
    <script src="<?= public_asset('/other_assets/User/js/kaiadmin.min.js') ?>"></script>

  </body>
</html>