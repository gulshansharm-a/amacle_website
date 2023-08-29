<?php
$tittle = "Amacle studio-Home";
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include('layout/head.php');?>
<body>
    <!-- navbar -->
    <?php include("layout/navbar.php"); ?>
    <ul class="side-nav">
        <li class="webli dblock" id="bord">
            <!-- video banner -->
            <div class="video-banner ">
                <!-- banner containe -->
                <div class="banner-container banner1">
                    <!-- video or img -->
                    <video autoplay loop muted>
                        <source src="videos/video.mp4" type="video/mp4">
                    </video>
                    <!-- <img src="images/banner.png" alt=""> -->
                </div>
                <!-- overlay -->
                <div class="overlay"></div>
                <div class="indicator flex-colomn align-center j-center  width100 padding20">
                    <img class="mouse" src="images/mouse.svg" alt="">
                    <img class="mouse" src="images/dropdown-arrow-svgrepo-com.svg" alt="">
                </div>
            </div>
        </li>
        <li class="webli">
            <!-- category-scroll -->
            <div class="section margin-t80">
                <div class="category-scroll flex align-start j-between width100 gap50">
                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/kid.png" alt="">
                            <p>Kids</p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/food.png" alt="">
                            <p>Food Deivery</p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/dating.png" alt="">
                            <p>Dating App</p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/websi.png" alt="">
                            <p>Websites</p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/rolet.png" alt="">
                            <p>Roulatte Games </p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/seo.png" alt="">
                            <p>Search Engine</br> Optamization</p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/ecom.png" alt="">
                            <p>E commer Website</p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/casino.png" alt="">
                            <p>Casino Games</p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="cate-div flex-colomn align-center j-center">
                            <img src="images/news.png" alt="">
                            <p>News Websites</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- main-banner -->
            <div class="banner margin-t10">
                <div class="section">
                    <section class="splide splide5">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="banner1 flex align-center j-between">
                                        <img src="images/banner1-img.png" alt="" id="banner1-img">
                                        <img src="images/banner1-background.png" alt="" id="banner1-background">
                                        <img src="images/banner1-left.png" alt="" id="banner1-right">
                                        <div id="left-text">24 /7
                                            CUSTOMER
                                            SUPPORT
                                            <p class="margin-t30">ALWAYS AVAILABLE . INSTANT ASSISTANCE</p>
                                        </div>
                                        <div id="mid-text">Our dedicated team of support experts is available
                                            round-the-clock to assist
                                            you with any questions or concerns.
                                            <div class="line margin-t30"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="banner1 banner2 flex align-center j-between">
                                        <img src="images/banner2-background.png" alt="" id="banner2-background">
                                        <img src="images/banner2-left.png" alt="" id="banner2-left">
                                        <img src="images/banner2-right.png" alt="" id="banner2-right">
                                        <div id="left-text">Experience Seamless
                                            UI Design -
                                            Free of Charge!
                                            <p class="margin-t30">Start Strong with Stunning UI Designs</p>
                                            <div class="line margin-t10"></div>
                                        </div>
                                        <div id="mid-text">
                                            <div class="line "></div>
                                            <p class="margin-t10">
                                                Your vision deserves nothing less than perfection, and we're here to
                                                bring it to life. Let's embark on this exciting development journey
                                                together!
                                            </p>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <!-- small bannrer -->
            <div class="small-banner width100 margin-t20">
                <img src="images/smallbaner.png" alt="">
            </div>
            <!-- addvert -->
            <div class="advertise margin-t10">
                <div class="left-section">
                    <img src="images/backg.png" alt="" class="responsive-image">
                </div>
            </div>
            <!-- hii-section -->
            <div class="hii-section chat-button">
                <div class="section flex align-center j-center padding20">
                    <div class="hii-main-div flex-colomn align-center j-center padding30">
                        <h1>It's more than a website it's your future</h1>
                        <div class="flex align-end j-center gap10 width100">
                            <input type="email" placeholder="Enter email">
                            <div class="flex-colomn align-center j-center">
                                <img class="av" src="images/hii-avatar.svg" alt="" >
                                <button>Start Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- popular category -->
            <div class="popular-category margin-t50">
                <div class="section">
                    <div class="heading">
                        <p>Popular Categories</p>
                    </div>
                    <!-- scrollable category -->
                    <div class="category-scroll flex align-start j-start width100 gap80">
                        <?php
                        $scroll_cate = $sql->prepare("select * from category");
                        $scroll_cate->execute();
                        $scroll_cate_res = $scroll_cate->get_result();
                        if($scroll_cate_res->num_rows>0){
                            while($data = $scroll_cate_res->fetch_assoc()){
                        ?>
                        <a onclick="cateload('<?php echo $data['id'];?>')">
                            <div class="cate-div flex-colomn align-center j-center">
                                <img src="<?php echo $data['cate_img'];?>" alt="">
                                <p><?php echo $data['cate_name'];?></p>
                            </div>
                        </a>
                        <?php
                        }
                    }
                        ?>
                    </div>
                    <!-- .cate-grids -->
                    <div class="cate-card-section margin-t30 flex align-center j-between flex-wrap" id="cate_content_data">
                        <?php
                       $category_content = $sql->prepare("select * from `cate_content` order by id desc limit 16");
                        $category_content->execute();
                        $category_content_res = $category_content->get_result();
                        if($category_content_res->num_rows > 0){
                            while($datsa = $category_content_res->fetch_assoc()){

                        ?>
                        <a href="game.php?id=<?php echo $datsa['id'];?>">
                            <div class="cate-card flex-colomn align-center j-start">
                                <img src="<?php echo $datsa['cate_img'];?>" alt="">
                                <p><?php echo $datsa['cate_name'];?></p>
                            </div>
                        </a>
                        <?php
                         }
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
            <!-- Project track -->
            <div class="project-track margin-t80">
                <div class="section text-center flex-colomn align-center j-center gap20">
                    <div class="heading flex align-center j-center text-center">
                        <p> Introducing Our App! </p>
                    </div>
                    <p>Track your projects effortlessly with our user-friendly app. Stay updated in real-time,
                        collaborate seamlessly, and enjoy complete transparency throughout your project's development.
                        Experience the ease and efficiency of project tracking like never before.</p>
                    <div class="swiper-container flex align-center j-center" style="overflow-x: hidden;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="images/image 70 (1).png" alt=""></div>
                            <div class="swiper-slide"><img src="images/image 71 (2).png" alt=""></div>
                            <div class="swiper-slide"><img src="images/image 73.png" alt=""></div>
                            <div class="swiper-slide"><img src="images/image 74.png" alt=""></div>
                            <div class="swiper-slide"><img src="images/image 75.png" alt=""></div>
                            <!-- Add more slides as needed -->
                        </div>
                        <div class="phoneframe">
                            <img src="images/phoneframe.png" alt="">
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>
            <!-- numbers -->
            <div class="numbers margin-t10">
                <div class="section flex-colomn align-center j-center gap20 padding30">
                    <h3>We're Good with Numbers</h3>
                    <div class="row flex align-center j-center gap30 ">
                        <div class="num-div flex-colomn align-center j-center gap5">
                            <h2>15</h2>
                            <p>Years of Experience</p>
                        </div>
                        <div class="round"></div>
                        <div class="num-div flex-colomn align-center j-center gap5">
                            <h2>36</h2>
                            <p>Qulified Experts</p>
                        </div>
                        <div class="round"></div>
                        <div class="num-div flex-colomn align-center j-center gap5">
                            <h2>120</h2>
                            <p>Client Every Year</p>
                        </div>
                        <div class="round"></div>
                        <div class="num-div flex-colomn align-center j-center gap5">
                            <h2>9</h2>
                            <p>Intl. Partners</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- steps-->
            <div class="steps margin-t80">
                <img src="images/step-background2.png" alt="" class="stepimg">
                <div class="section flex-colomn align-start gap30">
                    <div class="left-text">
                        We Build Innovate and deliver your dreams
                    </div>
                    <div class="content flex align-start j-center gap10">
                        <div class="content-div flex-colomn align-center j-center gap5">
                            <img src="images/Frame 123 (1).svg" alt="" style="height: 50px;width:50px;">
                            <p class="first-color text-center">Just as the base of a mountain provides stability and
                                support, we lay a strong foundation for your dreams.</p>
                        </div>
                        <div class="vertical-line"></div>
                        <div class="content-div flex-colomn align-center j-center gap5">
                            <img src="images/step2.svg" alt="" style="height: 50px;width:50px;">
                            <p class="second-color text-center">Like the middle section of a mountain, we embrace
                                innovation, pushing boundaries and reaching new heights.</p>
                        </div>
                        <div class="vertical-line"></div>
                        <div class="content-div flex-colomn align-center j-center gap5">
                            <img src="images/step3.svg" alt="" style="height: 50px;width:50px;">
                            <p class="third-color text-center">Finally, we reach the summit of success, with unwavering
                                dedication to detail, and a commitment to excellence.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- path partation -->
            <div class="path-partestion margin-t30">
                <div class="section flex align-center j-center width100 text-center">
                    <h1>The Path to Success : From Idea to Earnings</h1>
                </div>
            </div>
            <!-- path -->
            <div class="path margin-t50">
                <div class="section">
                    <div class="path-content path-content1 flex align-start j-start ">
                        <img src="images/road1.png" alt="" class="road">
                        <img src="images/path1.png" alt="" class="top-img">
                        <img src="images/path2.png" alt="" class="foot-img">
                        <div class="path-desc flex-colomn align-start j-start gap10">
                            <div class="header flex-colomn align-start j-start gap10">
                                <h1>Discover Your Journey:</h1>
                                <span>Join us on path</span>
                            </div>
                            <p>“Our experienced management team and dedicated project managers are here to guide you every step of the way. With their expertise and support, we'll bring your idea to life. Additionally, you'll have access to our mobile app, designed to keep your project on track, ensuring seamless collaboration and timely progress. Together, let's turn your dreams into a remarkable success story!”</p>
                        </div>
                    </div>
                    <div class="path-content path-content2 flex align-start j-start ">
                        <img src="images/road.png" alt="" class="road">
                        <div class="path-desc2 flex-colomn align-start j-start gap10 width100">
                            <div class="header flex-colomn align-start j-start gap10">
                                <h1>Build Your Idea:</h1>
                                <span>With hundreds  of advance tools</span>
                            </div>
                            <p>“At Amacle , we thrive on the latest technologies and frameworks. Our flexible team is well-versed in a multitude of technologies, ensuring that we can adapt to your preferred framework or technology stack. With our extensive expertise and advanced tools at your disposal, we'll collaborate closely to transform your idea into a remarkable reality. Together, let's unleash the full potential of your vision!"</p>
                        </div>
                    </div>
                    <div class="path-content flex align-start j-start ">                       
                        <img src="images/road1.png" alt="" class="road">
                        <img src="images/path1.png" alt="" class="top-img">
                        <img src="images/path2.png" alt="" class="foot-img">
                        <div class="path-desc flex-colomn align-start j-start gap10">
                            <div class="header flex-colomn align-start j-start gap10">
                                <h1>Reach Billions:</h1>
                                <span>Launch Your Product to the World!</span>
                            </div>
                            <p>“Seamlessly manage data through powerful APIs while benefiting from our reliable hosting solutions. With our expertise, we'll ensure smooth integration and optimal performance, allowing you to focus on your product's success. Prepare to captivate a global audience as you confidently launch your product to the world, knowing that your data is managed securely and your hosting is taken care of. Together, let's unlock endless opportunities and make your mark on the global stage!"</p>
                        </div>
                    </div>
                    <div class="path-content flex align-start j-start ">
                        <img src="images/lastroad.png" alt="" class="road">
                        <img class="lastimg" src="images/lastpath.png">
                        <div class="path-desc2 flex-colomn align-start j-start gap10 width100">
                            <div class="header flex-colomn align-start j-start gap10">
                                <h1>Time to Earn:</h1>
                                <span>Utilize Powerful Tools for Financial Success!</span>
                            </div>
                            <p>Our arsenal of cutting-edge tools enables us to optimize your online presence and secure top rankings across search engine results, ultimately driving more traffic to your website. By achieving higher visibility and attracting a larger audience, you'll have the opportunity to monetize your success and start earning. With our expertise in SEO and the power of these tools, we'll help you pave the way to financial success. Get ready to ascend to new heights and unlock your earning potential!"</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mpath -->
            <div class="mpath dnone  margin-t50">
                <div class="section flex-colomn align-start j-start gap20">
                    <div class="two-section mpath1 flex align-start j-start">
                        <div class="mid-section m flex-colomn align-center j-center">
                            <img src="images/path1.png" alt="">
                            <div class="vertical-line"></div>
                        </div>
                        <div class="left-section m">
                            <h3>Discover Your Journey:</h3>
                            <span>Join us on path</span>
                            <p>“Our experienced management team and dedicated project managers are here to guide you every step of the way. With their expertise and support, we'll bring your idea to life. Additionally, you'll have access to our mobile app, designed to keep your project on track, ensuring seamless collaboration and timely progress. Together, let's turn your dreams into a remarkable success story!”</p>
                        </div>
                    </div>

                    <div class="two-section mpath2 flex align-start j-start">
                        <div class="mid-section flex-colomn align-center j-center">
                            <img src="images/path2.png" alt="">
                            <div class="vertical-line"></div>
                        </div>
                        <div class="right-section">
                            <h3>Build Your Idea:</h3>
                            <span>With hundreds of advance tools</span>
                            <p>“At Amacle , we thrive on the latest technologies and frameworks. Our flexible team is well-versed in a multitude of technologies, ensuring that we can adapt to your preferred framework or technology stack. With our extensive expertise and advanced tools at your disposal, we'll collaborate closely to transform your idea into a remarkable reality. Together, let's unleash the full potential of your vision!"</p>
                        </div>
                    </div>
                    <div class="two-section mpath1 flex align-start j-start">
                        <div class="mid-section m flex-colomn align-center j-center">
                            <img src="images/path1.png" alt="">
                            <div class="vertical-line"></div>
                        </div>
                        <div class="left-section m">
                            <h3>Reach Billions:</h3>
                            <span>Launch Your Product to the World!</span>
                            <p>“Seamlessly manage data through powerful APIs while benefiting from our reliable hosting solutions. With our expertise, we'll ensure smooth integration and optimal performance, allowing you to focus on your product's success. Prepare to captivate a global audience as you confidently launch your product to the world, knowing that your data is managed securely and your hosting is taken care of. Together, let's unlock endless opportunities and make your mark on the global stage!"</p>
                        </div>
                        <div class="right-section m">
                          <p></p>
                        </div>
                    </div>
                    
                    <div class="two-section mpath2 flex align-start j-start">
                        <div class="left-section">
                        </div>
                        <div class="mid-section">
                            <img src="images/lastpath.png" alt="">
                        </div>
                        <div class="right-section">
                            <h3>Time to Earn:</h3>
                            <span>Utilize Powerful Tools for Financial Success!</span>
                            <p>"Our arsenal of cutting-edge tools enables us to optimize your online presence and secure top rankings across search engine results, ultimately driving more traffic to your website. By achieving higher visibility and attracting a larger audience, you'll have the opportunity to monetize your success and start earning. With our expertise in SEO and the power of these tools, we'll help you pave the way to financial success. Get ready to ascend to new heights and unlock your earning potential!"</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- blogs -->
            <div class="blogs-section margin-t80">
                <div class="section">
                    <div class="heading">
                        <p>Recent Blogs</p>
                    </div>
                    <div class="blogs-container margin-t30">
                        <section class="splide splide6">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide flex align-center j-center">
                                        <div class="blog-card flex-colomn gap5">
                                            <div class="blog-img">
                                                <img src="images/blog1.png" alt="">
                                            </div>
                                            <div class="blog-content padding10 flex-colomn align-center gap10">
                                                <div class="flex align-center gap10 width100 ">
                                                    <div class=" profile-content flex-colomn">
                                                        <h4>Free E-books for photographers </h4>
                                                    </div>
                                                </div>
                                                <div class=" profile-content flex align-center j-between width100 ">
                                                    <div class="flex align-center gap5">
                                                        <div class="profile-img flex align-center gap5">
                                                            <img src="images/step1.jpg" alt="">
                                                        </div>
                                                        <p>Harry jons</p>
                                                    </div>
                                                    <p>02 Dec 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide flex align-center j-center">
                                        <div class="blog-card flex-colomn gap5">
                                            <div class="blog-img">
                                                <img src="images/blog2.png" alt="">
                                            </div>
                                            <div class="blog-content padding10 flex-colomn align-center gap10">
                                                <div class="flex align-center gap10 width100 ">
                                                    <div class=" profile-content flex-colomn">
                                                        <h4>How to find Models For Fashion Photography </h4>
                                                    </div>
                                                </div>
                                                <div class=" profile-content flex align-center j-between width100 ">
                                                    <div class="flex align-center gap5">
                                                        <div class="profile-img flex align-center gap5">
                                                            <img src="images/step1.jpg" alt="">
                                                        </div>
                                                        <p>Harry jons</p>
                                                    </div>
                                                    <p>02 Dec 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide flex align-center j-center">
                                        <div class="blog-card flex-colomn gap5">
                                            <div class="blog-img">
                                                <img src="images/blog3.png" alt="">
                                            </div>
                                            <div class="blog-content padding10 flex-colomn align-center gap10">
                                                <div class="flex align-center gap10 width100 ">
                                                    <div class=" profile-content flex-colomn">
                                                        <h4>Best 15+ Photography Contest You should Enter in 2022-2023
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class=" profile-content flex align-center j-between width100 ">
                                                    <div class="flex align-center gap5">
                                                        <div class="profile-img flex align-center gap5">
                                                            <img src="images/step1.jpg" alt="">
                                                        </div>
                                                        <p>Harry jons</p>
                                                    </div>
                                                    <p>02 Dec 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <!-- maps -->
            <div class="map-container margin-t50">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7384.374237098756!2d75.69977959007188!3d31.25515163652222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f676e7d7fe7%3A0xe4a8094148da0abe!2sDivsion%20of%20student%20affairs%2C%20Punjab%20144411!5e0!3m2!1sen!2sin!4v1687610237760!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- testimonials -->
            <div class="testimanials margin-t50">
                <div class="section">
                    <div class="heading text-center">
                        <p>What people say about us</p>
                    </div>
                    <div class="testi-section margin-t30">
                        <section class="splide splide7">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide flex align-center j-center">
                                        <div class="testicard padding10 flex-colomn gap5">
                                           
                                            <div class="line width100"></div>
                                            <div class="content">
                                                <video src="videos/video.mp4" controls></video>
                                            </div>
                                            <div class="flex align-center gap10 width100">
                                                <div class="testi-profile-content">
                                                    <h4>New posted</h4>
                                                    <p>Mob:123448488</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                   <li class="splide__slide flex align-center j-center">
                                        <div class="testicard padding10 flex-colomn gap5">
                                           
                                            <div class="line width100"></div>
                                            <div class="content">
                                                <video src="videos/video.mp4" controls></video>
                                            </div>
                                            <div class="flex align-center gap10 width100">
                                                <div class="testi-profile-content">
                                                    <h4>New posted</h4>
                                                    <p>Mob:123448488</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                   <li class="splide__slide flex align-center j-center">
                                        <div class="testicard padding10 flex-colomn gap5">
                                           
                                            <div class="line width100"></div>
                                            <div class="content">
                                                <video src="videos/video.mp4" controls></video>
                                            </div>
                                            <div class="flex align-center gap10 width100">
                                                <div class="testi-profile-content">
                                                    <h4>New posted</h4>
                                                    <p>Mob:123448488</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                   <li class="splide__slide flex align-center j-center">
                                        <div class="testicard padding10 flex-colomn gap5">
                                           
                                            <div class="line width100"></div>
                                            <div class="content">
                                                <video src="videos/video.mp4" controls></video>
                                            </div>
                                            <div class="flex align-center gap10 width100">
                                                <div class="testi-profile-content">
                                                    <h4>New posted</h4>
                                                    <p>Mob:123448488</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <!-- footer -->
         <?php include("layout/footer.php");?>
        </li>
    </ul>
    <?php include("layout/script.php");?>
</body>

</html>