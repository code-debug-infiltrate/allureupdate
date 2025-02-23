<div class="row">

    <!-- First Column Side -->
    <div class="col-md-6 col-lg-3">

                    

    </div>
    <!-- End First Column Side -->




    <!-- Second Column Side -->
    <div class="col-md-6 col-lg-6">

        <div class="col-md-12 center-content pull-center" style="margin-bottom: 30px;">
            <?php if ($userInfo['profileimage'] != "favicon.png") { ?>
                <center><img src="<?= public_asset('/other_assets/Profile/'); ?><?= $userInfo['profileimage']; ?>" id="output_profileimage" alt="Profile Photo" style="width: 200px;"></center>
                <!-- <br><br>
                <a style="font-size: 14px; margin: 10px;" href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>"> Update Passport</a> -->
            <?php } else { ?>
                <center><img src="/Images/Body/passportPhoto.jpg" id="output_profileimage" alt="Profile Page" style="width: 200px;"></center>
            <?php } ?>
            <br>
            <form method="POST" action="" class="edit-phto" enctype="multipart/form-data"> 
                <input type="hidden" name="uniqueid" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
                <input type="hidden" name="username" id="username" value="<?= $userInfo['username']; ?>" required>
                <div class="form-group">
                    <label> Select And Upload a Profile Photo  <br><i style="font-size: 12px; color:rgb(238, 46, 46);">Face Must Be Visible And Crystal Clear</i></label>
                    <input type="file" class="form-control" name="profileimage" id="profileimage" placeholder="Profile Photo Image" onchange="validateProfileImage(event)" accept="image/*" required>
                </div>

                <div class="card-action message-btn" style="margin-top: 50px; margin-bottom: 50px; border-radius: 1px; width: 100%;">
                    <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                    <button class="btn btn-success" type="submit" name="submitProfile" id="submitProfile">Update Photo</button>
                </div>

            </form>
        </div>

    </div>
    <!-- End Second Column Side -->




    <!-- Third Column Side -->
    <div class="col-md-6 col-lg-3">

                    

    </div>
    <!-- End Third Column Side -->

</div>




<script src="<?= public_asset('/other_assets/Front/js/ajaxForms/validateImage.js') ?>"></script>