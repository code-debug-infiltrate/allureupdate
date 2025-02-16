    <!-- subscribe-section -->
    <section class="subscribe-section about-page bg-color-3">
        <div class="container">
            <div class="inner-box">
                <figure class="icon-box"><img src="/Images/Body/btm-baner-avatar.png" alt="Subscribe-Icon"></figure>
                <div class="content-box">
                    <h2>Love Relationship News And Tips?</h2>
                    <div class="text">Monthly Relationship News And Tips, Articles, and Resources, Sent Straight To You.</div>
                    
                    <div class="formError_box" style="margin:10px 0px;"></div>
                    
                    <form action="#" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="hidden" id="ip" value="<?php echo $ip?>">
                            <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                            <input type="hidden" id="urlSub" value="<?= trim(getenv('baseURL'))."ajax-subscribe/";?>">
                            <input type="email" id="email" placeholder="Enter Your Email ID" required>
                            <button type="submit" id="subscribe">Subscribe Now</button>
                        </div>
                    </form>
                    <script src="<?= public_asset('/other_assets/Front/js/AjaxForms/subscribe.js') ?>"></script>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->