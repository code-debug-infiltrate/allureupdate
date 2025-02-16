<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>
<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
<title>Terms Of Service | Legal |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>



    <!-- about-banner -->
    <section class="about-banner" style="background-image: url(/Images/Body/head.png);">
        <div class="container">
            <div class="content-box">
                <h1>Terms & Conditions</h1>
                <div class="text">These Terms of Service ("Terms") govern your use of our website, services, and any related content provided by <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> ("we," "us," or "our"). By accessing or using our services, you agree to be bound by these Terms. If you do not agree with any part of these Terms, please do not use our services.</div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->


    <!-- about-style-five -->
    <section class="about-style-five">
        <div class="container">
            <div class="inner-container">
                <div class="title-box">
                    <h1> 1. General Terms</h1>
                    <p>1.1 Eligibility: You must be at least 18 years old or have parental/guardian consent to use our services. <br>1.2 Acceptance: By using our services, you agree to comply with and be bound by these Terms, along with our Privacy Policy. <br>1.3 Modifications: We reserve the right to update or modify these Terms at any time. Changes will be effective immediately upon posting. Your continued use of the services constitutes acceptance of the revised Terms.</p>
                    <h1> 2. Services Provided</h1>
                    <p>2.1 Therapy Programs: We offer various therapy programs, both online and in-person, designed to improve skills and performance. <br>2.2 Content: Our services may include videos, articles, training materials, and other content. This content is for personal use only and may not be redistributed without our permission.</p>
                    <h1> 3. User Accounts</h1>
                    <p>3.1 Registration: To access certain features, you may need to create an account. You agree to provide accurate and complete information during registration. <br>3.2 Account Security: You are responsible for maintaining the confidentiality of your account and password. You agree to notify us immediately of any unauthorized use of your account.</p>
                    <h1> 4. Payment and Refunds</h1>
                    <p>4.1 Fees: Some services may require payment. Fees are outlined on our website and are subject to change. <br>4.2 Refund Policy: Refunds for services will be provided in accordance with our Refund Policy, which is available on our website.</p>
                    <h1> 5. Code of Conduct</h1>
                    <p>5.1 Respect: Users are expected to behave respectfully towards others while using our services. Harassment, discrimination, or any form of abusive behavior will not be tolerated. <br>5.2 Compliance: Users must comply with all applicable laws and regulations when using our services.</p>
                    <h1> 6. Intellectual Property</h1>
                    <p>6.1 Ownership: All content provided by <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>, including text, graphics, logos, and videos, is owned by us or our licensors and is protected by intellectual property laws. <br>6.2 Usage: You may not reproduce, distribute, or create derivative works from our content without our explicit permission.</p>
                    <h1> 7. Limitation of Liability</h1>
                    <p>7.1 No Warranty: Our services are provided "as is" without any warranties, express or implied. <br>7.2 Liability: To the maximum extent permitted by law, <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> shall not be liable for any indirect, incidental, or consequential damages arising out of or in connection with the use of our services.</p>
                    <h1> 8. Termination</h1>
                    <p>8.1 Termination by Us: We reserve the right to suspend or terminate your access to our services at any time, without notice, for conduct that we believe violates these Terms or is otherwise harmful to other users or us. <br>8.2 Termination by You: You may terminate your account at any time by following the instructions on our website.</p>
                    <h1>  9. Governing Law</h1>
                    <p>These Terms shall be governed by and construed in accordance with the laws of [Your Country/State], without regard to its conflict of law principles.</p>
                    <h1> 10. Contact Information</h1>
                    <p>If you have any questions about these Terms, please <a href="<?= baseURL('write-us/')?>">contact us</a> </p>
                </div>
            </div>
        </div>
    </section>





<?php include 'Layout/footer.php'; ?>