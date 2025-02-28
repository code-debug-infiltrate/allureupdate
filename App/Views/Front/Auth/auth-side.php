<div class="content-box">
    <h2 class="top-title">Welcome To <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></h2>
    <h2>Matchmaker And Therapist</h2>
    <div class="text">Our mission is to be there for you at all times. Get Expert help, tips and support for a healthier, happier and more fulfilling relationship</div>
    <div class="partners-content">
        <h3>Follow <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> Socials:</h3>
        <div class="partners-carousel owl-carousel owl-theme">
            <i class="slide-item"><a href="https://youtube.com/@allure-dofficial?si=eCmKzc1uX3vcUy9M" target="_blank"><img src="/Images/Socials/youtube.png" alt="youtube" style="width: 250px; height: 150px;"></a></i>
            <i class="slide-item"><a href="https://www.tiktok.com/@alluredofficial" target="_blank"><img src="/Images/Socials/tiktok.png" alt="tiktok" style="width: 100px; height: 100px;"></a></i>
            <i class="slide-item"><a href="https://instagram.com/<?= $coyInfo['instagram']?>" target="_blank"><img src="/Images/Socials/instagram.png" alt="instagram" style="width: 80px; height: 80px;"></a></i>
            <i class="slide-item"><a href="https://facebook.com/<?= $coyInfo['facebook']?>" target="_blank"><img src="/Images/Socials/facebook.png" alt="facebook" style="width: 80px; height: 80px;"></a></i>
            <i class="slide-item"><a href="<?= $coyInfo['channel']; ?>" target="_blank"><img src="/Images/Socials/whatsapp.png" alt="whatsapp" style="width: 100px; height: 100px;"></a></i>
        </div>
        <h3>We’ve built a reputation for helping singles  <br />succeed in <a href="#">Relationships</a></h3>
    </div>
</div>