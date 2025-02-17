<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>
<link href="<?= public_asset('/other_assets/Front/css/faq-style.css') ?>" rel="stylesheet">
<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
<title>Frequently Asked Questions | Support |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>



    <!-- about-banner -->
    <section class="about-banner" style="background-image: url(/Images/Body/head.png);">
        <div class="container">
            <div class="content-box">
                <h1>Frequently Asked Questions</h1>
                <div class="text">Below's a Recent Basic Collection Of Frequently Asked Questions<br> If You Have Any Other Question Asides Stated Below <br />If you don't find answers here, kindly <a href="<?= baseURL('write-us/'); ?>" style="color:rgb(116, 3, 177);">write us</a></div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->


    <!-- about-style-five -->
    <section class="about-style-five">
        <div class="container">
            <div class="inner-container">

                 <button onclick="myFunction('Faq1')" class="w3-btn w3-block w3-black w3-left-align"> How Can I Become a Member of <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>? </button>
                <div id="Faq1" class="w3-container w3-hide">
                  <h4>How Can I Become a Member of <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>?  </h4>
                  <p>Simply Click On <a href="<?= baseURL('new-member/'); ?>">Find a Match</a>. <br>Fill The Form fields and click register. An email will be sent to the provided email ID. The message contains your membership information like password etc, which will be requested when you want to login.</p>
                </div>

                <br>

                 <button onclick="myFunction('Faq2')" class="w3-btn w3-block w3-black w3-left-align">How Much Does The Membership Cost? </button>
                <div id="Faq2" class="w3-container w3-hide">
                  <h4>How Much Does The Membership Cost?</h4>
                  <p>Membership on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> is free of cost. some services are premium but you dont need a card or any payment to register.</p>
                </div>

                <br>
                
                 <button onclick="myFunction('Faq3')" class="w3-btn w3-block w3-black w3-left-align">How Does This Platform Work? </button>
                <div id="Faq3" class="w3-container w3-hide">
                  <h4>How Does This Platform Work? </h4>
                  <p>Making The right choices, finding the right person for yourself, being happy in your relationship are few of many tasks <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> helps you achieve.
                  <br>The process is seamless and funfilled. Simply register, make your profile look attractive enough for your potential match and start meeting people.</p>
                </div>

                <br>
                
                <button onclick="myFunction('Faq4')" class="w3-btn w3-block w3-black w3-left-align">Is <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> Safe? </button>
                <div id="Faq4" class="w3-container w3-hide">
                  <h4>Is <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> Safe? </h4>
                  <p>We protect your privacy with end to end encryption. We also provide limit to your contact information shown to others. </p>
                </div>

                <br>
                
                <button onclick="myFunction('Faq5')" class="w3-btn w3-block w3-black w3-left-align">How can i get the best out of my membership? </button>
                <div id="Faq5" class="w3-container w3-hide">
                  <h4>How can i get the best out of my membership?</h4>
                  <p>Update your profile picture often, Thats what everyone sees first, Stay active by posting, reply to messages and follow latest updates. </p>
                </div>

                <br>
                
                 <button onclick="myFunction('Faq6')" class="w3-btn w3-block w3-black w3-left-align">How long does it take to meet a partner? </button>
                <div id="Faq6" class="w3-container w3-hide">
                  <h4>How long does it take to meet a partner? </h4>
                  <p>This depends on your kind of person and your preferences in a potentail partner. Fill the form fields about you correct and also make sure you select the right options on your preferences to have a seamless matching experience. </p>
                </div>

                <br>
                
                 <button onclick="myFunction('Faq7')" class="w3-btn w3-block w3-black w3-left-align">Why might members not get lots of attention and engagement? </button>
                <div id="Faq7" class="w3-container w3-hide">
                  <h4>Why might members not get lots of attention and engagement?</h4>
                  <p>Yes, we offer personalized matching to meet single's needs and goals. Our matching system works to deliver a streamlined engagement so you can quickly and flawlessly reach your goals.</p>
                </div>

                <br>
                
                <button onclick="myFunction('Faq8')" class="w3-btn w3-block w3-black w3-left-align">Why is there no membership available that gives unlimited access to the site?</button>
                <div id="Faq8" class="w3-container w3-hide">
                  <h4>Why is there no membership available that gives unlimited access to the site?</h4>
                  <p>Fees vary depending on the service requested, Our model is “pay-per-action.” Members only pay for services that they use.</p>
                </div>

                <br>
                
                <button onclick="myFunction('Faq9')" class="w3-btn w3-block w3-black w3-left-align">Do you organize dating tours or meet-ups abroad? </button>
                <div id="Faq9" class="w3-container w3-hide">
                  <h4>Do you organize dating tours or meet-ups abroad? </h4>
                  <p>Yes, we organize dating tours and meet-ups abroad to provide international exposure and experience. These tours are a great way for you to experience different cultures and dynamics.</p>
                </div>

                

            </div>
        </div>
    </section>


    <script>
        function myFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else { 
            x.className = x.className.replace(" w3-show", "");
          }
        }
    </script>


<?php include 'Layout/footer.php'; ?>