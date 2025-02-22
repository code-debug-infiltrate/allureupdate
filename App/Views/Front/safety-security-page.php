<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
 
<title>Safety & Security |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- case-banner -->
    <section class="case-banner centred" style="background-image: url(/Images/Body/privacy.png);">
        <div class="container">
            <div class="content-box" style="margin-top: 150px;">
                <h1>Safety & Security</h1>
                <h3>Since Inception, Singles Have <br />Depended on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> For a More Fulfilling Relationship Journey.</h3>
            </div>
        </div>
    </section>
    <!-- case-banner end -->


    
    <!-- testimonial-style-six -->
    <section class="testimonial-style-six testimonial-page centred">
        <div class="container">
            <div class="sec-title">
                <div class="top-text">Safety Tips</div>
                <h1>We strongly recommend our members follow these tips:</h1>
            </div>

            <div class="inner-box">
                <div class="text" style="text-align: left; font-size: 20px;">● Never send any money to another member. </div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● Clearly state your expectations to avoid misunderstanding.</div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● Conduct video chats with your partner once in a while</div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● Don’t share your password, access to your account or any official identity document with anyone.</div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● Refrain from sharing sensitive information such as home addresses, financial details, or private identification documents. </div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● Avoid meeting someone in person without proper precautions, such as informing a trusted friend, meeting in a public space, and ensuring safe transportation arrangements.</div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● We give this advice because no member can be completely sure how serious their partner is, and if communication happens outside of our system, we will not be capable of helping members who get into trouble.</div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● We prioritize user privacy by restricting unauthorized data collection or sharing of personal information </div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● Our platform is committed to fostering a safe, respectful, and trustworthy community. </div>
                
                <br>
                <div class="text" style="text-align: left; font-size: 20px;">● Violations of these policies will result in immediate account suspension and potential legal action.</div>
                <br><br><hr>
                <h1> Contact Information</h1>
                <p>If you have any issues, concerns or reports about these safety and security tips, please <a href="<?= baseURL('write-us/')?>">contact us</a> </p>
            </div>

        </div>
    </section>









    <?php include 'Layout/footer.php'; ?>