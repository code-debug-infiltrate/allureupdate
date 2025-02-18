<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>


<title><?= str_replace('_', ' ', $_GET['match']); ?> Testimonial | Love Stories |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- case-banner -->
    <section class="case-banner centred" style="background-image: url(/Images/Banner/6.jpg);">
        <div class="container">
            <div class="content-box" style="margin-top: 150px;">
                <h1><?= str_replace('_', ' ', $_GET['match']); ?></h1>
                <h3>Since Inception, Singles Have <br />Depended on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> For a More Fulfilling Relationship Journey.</h3>
            </div>
        </div>
    </section>
    <!-- case-banner end -->



     <!-- blog-single -->
     <section class="blog-single sidebar-page-container">
        <div class="container">
            <div class="row">


                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">

                        <?php if ($_GET['match'] == "John_And_Yana") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>Here’s where our memories began. We started chatting when he texted me "hi," and I didn't expect that such a simple "hi" could lead to such good memories. He was actually looking for a girl who is funny, smart, and also open to a long-term relationship.</p>

                                <p>Having a good conversation with him was such an honor because it was more than just a conversation. We also built trust, friendship, and confidence. We shared thoughts, dislikes, likes, and favorite things, and I learned a lot from him.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/johnandyana.jpg" alt=""></figure>
                            <br><br>
                            <p>We got to know each other better, including what his ideal girl or wife would be like, and more. It felt very natural to be myself around him because we enjoy the same types of sports and share similar silly interests.</p>

                            <p>Finally, we met up. Our conversations were always about food, people, beaches, and the beautiful places he had visited. I was overwhelmed by the good times we spent together and the conversations we had.</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Richy_And_Anj"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>

                        <?php } ?>


                        <?php if ($_GET['match'] == "Richy_And_Anj") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>I didn't expect that such a simple "hi" could lead to such good memories. He was actually looking for a girl who is funny, smart, and also open to a long-term relationship.</p>

                                <p>Having a good conversation with him was such an honor because it was more than just a conversation. We also built trust, friendship, and confidence. We shared thoughts, dislikes, likes, and favorite things, and I learned a lot from him.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/manfredandecho.jpg" alt=""></figure>
                            <br><br>
                            <p>We got to know each other better, including what his ideal girl or wife would be like, and more. It felt very natural to be myself around him because we enjoy the same types of sports and share similar silly interests.</p>

                            <p>Finally, we met up. Our conversations were always about food, people, beaches, and the beautiful places he had visited. I was overwhelmed by the good times we spent together and the conversations we had.</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Morayo_And_Cole"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>


                        <?php if ($_GET['match'] == "Morayo_And_Cole") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>we talked for two hours, sharing stories about our lives. I grew to admire him more and more, and I especially liked his beautiful voice.</p>

                                <p>On another occasion, Cole asked again if I wanted coffee, tea, or juice, and this time, he took me out for my favorite Chinese tea. We had another long conversation, talking for two hours, and I felt a deeper connection with him. I fell in love with his beautiful voice—he is so talented and always makes me laugh.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/stewardandapril.jpg" alt=""></figure>
                            <br><br>
                            <p>He sent me red roses through a website for Valentine’s Day and pink roses on my birthday. We couldn’t wait to meet in person, so Cole flew to Nigeria, and that’s when our relationship truly began.</p>

                            <p>Lastly, I would like to thank this site for bringing such a wonderful man into my life. I can hardly believe that this perfect gentleman from Germany is mine.</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Anny_And_Fred"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>


                        <?php if ($_GET['match'] == "Anny_And_Fred") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>Fred and I started off with a simple correspondence. And it grew into something more that can't be described in simple words already. Sometimes I could not notice how several hours passed in a chat with him. His smile, his attitude to life, his sense of humor coincided with what is in my mind, and it captivated even more.</p>

                                <p>I didn't think I would enjoy online texting and chatting, but I was wrong. Video chats helped us feel closer to each other. We had dinners together every Saturday online. It was very charming, starting with cooking dinner together - each in their own kitchen in video chat, ending with enjoying this meal together. And at some point I realized that this could be in my real life, not only online.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/yanaandkurt.jpg" alt=""></figure>
                            <br><br>
                            <p>He invited me to Germany. And despite all the difficulties that arose, I have found a way to be with him. Now my son and I live with Fred. We are a starting good friendly family, we have an incredible amount of joint plans. </p>

                            <p>Finally, I don't regret that I took a chance, because we're making each other happy.</p>
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Odette_And_James"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>


                        <?php if ($_GET['match'] == "Odette_And_James") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>Unlike the others, her profile felt genuine. It had a picture of her, eyes sparkling with joy, and a bio that spoke of her love for adventures and long walks on the beach. She sent a message and we clicked instantly. Hours would fly by as we chatted about everything. </p>

                                <p>One day, she sent a voice recording. I hit play, and a beautiful melody filled my ears. It was her singing, raw and heartfelt, and it sent shivers down my spine. I knew right then I had to save it, a constant reminder of this incredible woman. Inspired, I sent her a song spoke of the connection we shared, from the first nervous spark to the blossoming affection. We talked for weeks after that, the music becoming our own private language. The decision to fly across the country to meet her was an easy one.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/odetteandjames.jpg" alt=""></figure>
                            <br><br>
                            <p>The moment I saw her at the airport, her smile mirroring the one in her pictures, the nerves melted away. She was even more captivating in person. The following days were a blur of laughter, shared adventures, and a deepening connection. Her voice, heard in person, was even more beautiful. We spent hours gazing at the sunset in Negros Oriental, the playlist we'd created playing softly in the background.</p>

                            <p>It was a testament to the power of music, the power of connection, and the power of taking a chance on a dating app on the verge of deletion. At that moment, I knew this girl was worth the flight, worth everything.</p>
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Antonin_and_Deji"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>


                        <?php if ($_GET['match'] == "Antonin_and_Deji") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>My name is Antonina and I always had a preconceived opinion concerning dating sites, but I tried a chance and got a registered profile on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>. Once in the evening, may be in about a month after my registration, I received a message via the Live Chat service from a man with a name Deji and he proposed to get acquainted and to communicate further. I checked his profile and liked what he had written there about himself very much. We started to communicate, we told each other about our lives, about work, family, kids and so on.</p>

                                <p>We had been chatting for hours and it was amazing and very interesting! Deji is a very kind-hearted, thoughtful, well-mannered man, who takes care about kids, his parents, is very sensitive, very smart, man of a big heart and kind soul.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/antoninanddeji.jpg" alt=""></figure>
                            <br><br>
                            <p>I invited Deji to Ukraine to meet me in my native city in order to know each other even better. The agency organised everything like the renting of apartment, transfer, interpreter - everything to make his staying comfortable and our meeting wonderful.</p>

                            <p>Our meeting in my city went very good - the communication was easy, we laughed a lot together, walked much together. I showed Deji my city, architecture, my culture, my national traditions, presented gifts to him and his kids.</p>
                            <p>We communicate very often, we are interested in each other`s life, congratulate each other with all the holidays, find out the details about work, family and so on.</p>

                            <p>I am very happy to get to know such a great man as Deji from <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> dating site.</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Fabian_and_Maria"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>


                        <?php if ($_GET['match'] == "Fabian_and_Maria") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>On <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> I met Fabian, a man whose kindness and warmth captivated me from our first conversations. After weeks of laughter and confidence, I traveled to Bogota for work and we took the opportunity to meet in person. Our first meeting was in a park, where we walked, laughed and enjoyed a delicious ice cream. The connection was immediate and magical.</p>

                                <p>During the weekend, we explored the city together. We visited a shopping mall, drank coffee and, later, dined at a restaurant with exquisite cuts of meat and glasses of wine. The evening was filled with deep conversations about our dreams and futures, and after dinner, we enjoyed a few more drinks, strengthening our connection. Fabian and I shared our future plans, including the idea of a second date in my city, to which he is willing to travel.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/fabianandmaria.jpg" alt=""></figure>
                            <br><br>
                            <p>We also talk about our careers. I run my own company, which takes me to meetings all over the country, while Fabian mentors people in Spain, helping them achieve their goals. We discovered that, despite our different occupations, we share a strong work ethic and a desire to grow professionally. </p>

                            <p>What started as a simple online conversation has turned into an exciting story full of potential. Each new plan and shared laugh brings us closer together, consolidating the spark we ignited at that first meeting.</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Diego_and_Iryada"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>


                        <?php if ($_GET['match'] == "Diego_and_Iryada") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>When we started talking on the site <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> we spent a couple of months getting to know each other. After that we had decided to make a first move. We were clear about our sincere intentions about each other and despite the distance we haven’t lost our special feeling.</p>

                                <p>For our first meeting, we have chosen the city of Pasto, Colombia where the Lagoon of Cocha is located. It is a very attractive place for tourism to enjoy the beautiful nature and nice climate. We had spent three wonderful days there and enjoyed a boat trip to see the islands and shared nice dinners in local restaurants.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/diegoandiryada.jpg" alt=""></figure>
                            <br><br>
                            <p>I would love to say to a person who is reading about our story to make a first step to find your love and enjoy the application <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> as we did. We are absolutely grateful because we found our love on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>.</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Karll_and_Kristen"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>



                        <?php if ($_GET['match'] == "Karll_and_Kristen") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            <div class="text">
                                <p>I just wanted to talk to someone and decided to try this <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>. Upon trying the app, I stumble at Karll John's profile and he started a conversation saying "happy valentines" . We then talked and just shared some cheesy lines. It was really nice having someone to talk to and celebrating heart's day with someone right?</p>

                                <p>Karll is working overseas that time, despite the miles that separated us, the flame of connection burned bright, fueled by late-night conversations and shared laughter over cheesy lines that echoed with the promise of something more. As days turned into weeks and weeks into months, the anticipation of our eventual meeting on June 3, 2024, became a beacon of hope in the vast expanse of time and space.</p>
                            </div>
                            <figure class="image-box"><img src="/Images/Testimonials/karllandkristen.jpg" alt=""></figure>
                            <br><br>
                            <p>When the day of reunion finally arrived, Manila became the stage for our long-awaited embrace. Amidst the hustle and bustle of the city, we found each other, and in that moment, the world around us faded into insignificance, leaving only the echo of our beating hearts and the promise of a future entwined.</p>

                            <p>Here's to a lifetime of cherished memories and adventures yet to come. Cheers to the love that binds us and the journey that lies ahead.</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Tatyana_and_Edward"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div>
                        </div>
                        <?php } ?>



                        <?php if ($_GET['match'] == "Tatyana_and_Edward") { ?>
                        <div class="content-style-one">
                            <h2 class="group-title"><?= str_replace('_', ' ', $_GET['match']); ?>'s Love Spark</h2>
                            
                            <figure class="image-box"><img src="/Images/Testimonials/johnnny1.jpg" alt=""></figure>
                            <br><br>
                            <div class="text">
                                <p>I would like to tell you about how we found each other...
                                    <br>
                                    It's quite an interesting story, from the very beginning we hit it off, we have a lot of common interests, we are both very creative people... maybe that's why we have that 'zing'
                                </p>

                                <p>Story from Edward:
                                    <br>
                                    The first time I saw Yana, I already felt that there was something special about her, so I looked at her photos and my feeling was confirmed. I read her profile letter and there was something about her sense of humor that I couldn't ignore.

                                    She talked about how her mother was dismissive of makeup, but I sensed that she wasn't sure about that and that other girls who wear makeup might have an unfair advantage over her because they wear silicone.

                                    I quickly dispelled her doubts by writing: “Your mom is right, you don't need makeup. Moms are always right!” I quickly received a reply from this beauty. She wrote that I was very handsome and that I was exactly what she was looking for.
                                </p>
                            </div>
                            <center><figure class="image-box"><img src="/Images/Testimonials/johnnny.jpg" alt="" style="width: 50%;"></figure></center>
                            <br><br>
                            <p>Story from Yana:
                            <br>
                                The first time I read his letter he wrote to me, it took my breath away... he said so many nice things to me.
                                <br>
                                I am very grateful for his many words of support.

                                We talked a lot... I felt like I could talk to him forever...
                                <br>
                                We have a lot of common topics to talk about. We always had something to talk about.
                                <br>
                                I admired his work very much, he even wrote me a song, it's so romantic, I wish everyone could feel these emotions...

                                We've been together for 1 year now, and we've probably been through everything, his support is the best.
                            </p>

                            <p>So I wish everyone to find their love, because when there is love there is a reason to live. That's why only love solves all the problems in the world...
                                <br>We are very grateful to the Dating Group! You are the best!!!</p>
                            
                        </div>

                        <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="<?= baseURL('testimonials/'); ?>">Go Back To<br />Testimonials<i class="flaticon-slim-left"></i></a></div>
                            <!-- <div class="next-btn pull-right"><a href="<?= baseURL('love-story/'); ?>?match=Tatyana_and_Edward"> Read Next<br />Love Story<i class="flaticon-slim-right"></i></a></div> -->
                        </div>
                        <?php } ?>

                        <br><br><hr>
                        <h1> Submit Your Love Story</h1>
                        <p>Want to share with others how you met your ideal partner on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>, the world is waiting to hear your unique story, please <a href="<?= baseURL('write-us/')?>">contact us</a> </p>
                        
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- blog-single end -->


<?php include 'Layout/footer.php'; ?>