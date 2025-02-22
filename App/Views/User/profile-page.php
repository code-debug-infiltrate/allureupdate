<?php 
include 'Layout/top.php'; 
include 'Layout/sidebar.php';
include 'Layout/navbar.php';
?>


<title><?= $userInfo['username']; ?>'s Profile | Profile Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>


    <div class="container" style="background: #fbcdfb;">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-2"><b id="grtnMsg1"></b>  <?= $userInfo['username']; ?> </h3>
                    <!-- <h6 class="op-7 mb-2"> </h6> -->
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab-icon" data-bs-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                                <i class="fa fa-users"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab-icon" data-bs-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                                <i class="fa fa-envelope"></i>
                                Account
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4 class="card-title">Nav Pills With Icon (Horizontal Tabs)</h4>
                    </div> -->
                    <div class="card-body">
                        
                        <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                            
                            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                                
                                <?php include 'profile-page-inside.php'; ?>

                            </div>

                            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                                
                                <?php include 'profile-page-inside.php'; ?>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
                    
                
            
            </div>
        </div>
    </div>







<?php include 'Layout/footer.php'; ?>