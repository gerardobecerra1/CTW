<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="<?= URL::to("resources/css/owl.carousel.min.css")?>">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="<?= URL::to("resources/css/style.css")?>">
    <title>CTW | Landing</title>
</head>
<body>

    <!-- Navbar comienzo -->
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="<?= URL::base()?>"><img src="<?= URL::to("resources/img/LogoB.png")?>" class="logito" alt="Logo" style="width:200px;"></a>
            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" data-scroll-nav="0" href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="1" href="#" ><i class="fas fa-list"></i> Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="2" href="#"><i class="fas fa-comments"></i> Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="3" href="#"><i class="fas fa-dollar-sign"></i> Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="4" href="#"><i class="fas fa-phone-alt"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Final -->

    <!-- Home Inicio -->
    <section class="home d-flex align-items-center" id="home" data-scroll-index="0" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="home-text">
                        <h1>Curious students change the world</h1>
                        <p>Gain skills with online courses, certificates and degrees offered by the world's leading universities and companies.</p>
                        <div class="sign-up-btn">
                            <a href="<?= URL::to("Login") ?>" class="btn btn-1">Sign up</a>
                            <button type="button" class="btn btn-1 video-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <div class="home-img">
                        <img src="<?= URL::to("resources/img/Landing/OnlineLearning.svg")?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Final -->
    
    <!-- Features Inicio -->
    <section class="features section-padding" id="features" data-scroll-index="1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Awesome <span>Features</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel features-carousel">
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-eye"></i></div>
                        <h3>View anywhere</h3>
                        <p>See our content anywhere, home, transport, plane, you choose where and when.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        <h3>Teaches</h3>
                        <p>Teach classes on our platform so you can earn extra money by teaching what you know.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-award"></i></div>
                        <h3>Certificate</h3>
                        <p>Finish the course and get a certificate that will help you get a better job.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-comments"></i></div>
                        <h3>Conversation</h3>
                        <p>Talk instantly with teachers or other users in our messages section.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Final -->

    <!-- Steps Incio -->
    <section class="steps section-padding" >
        <div class="contaner">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>How it <span>works</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="steps-item line-right">
                        <div class="step">1</div>
                        <h3>Create a profile</h3>
                        <p>Create an account and fill in your details correctly.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="steps-item line-right">
                        <div class="step">2</div>
                        <h3>Find a course</h3>
                        <p>Find any course you want to learn.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="steps-item ">
                        <div class="step">3</div>
                        <h3>Buy and enjoy</h3>
                        <p>Buy the course and enjoy it wherever and whenever you want.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Steps Final -->
    
    <!-- Comments Incio -->
    <section class="comments section-padding" id="comments" data-scroll-index="2">
        <div class="container">
            <div class="row justify-content-center">
                <dv class="col-lg-8">
                    <div class="section-title">
                        <h2>What our <span>users</span> say</h2>
                    </div>
                </dv>
            </div>
            <div class="row">
                <div class="owl-carousel comments-carousel">
                    <div class="comments-item">
                        <div class="img-box">
                            <img src="<?= URL::to("resources/img/Landing/eljefe.jfif")?>" alt="User Photo">
                            <i class="fas fa-comments"></i>
                        </div>
                        <p>It is the best platform to learn.</p>
                        <h3>Alberto Villanueva</h3>
                        <span>Teacher</span>
                        <div class="rating">
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                    <div class="comments-item">
                        <div class="img-box">
                            <img src="<?= URL::to("resources/img/Landing/eldonas.jfif")?>" alt="User Photo">
                            <i class="fas fa-comments"></i>
                        </div>
                        <p>It is easy to handle and learn fast.</p>
                        <h3>Donato Calvillo</h3>
                        <span>Apprentice</span>
                        <div class="rating">
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                    <div class="comments-item">
                        <div class="img-box">
                            <img src="<?= URL::to("resources/img/Landing/becerron.jfif")?>" alt="User Photo">
                            <i class="fas fa-comments"></i>
                        </div>
                        <p>The tool is very practical for teachers.</p>
                        <h3>Gerardo Becerra</h3>
                        <span>Teacher</span>
                        <div class="rating">
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                    <div class="comments-item">
                        <div class="img-box">
                            <img src="<?= URL::to("resources/img/Landing/larome.jfif")?>" alt="User Photo">
                            <i class="fas fa-comments"></i>
                        </div>
                        <p>UFFFF!, IAM SO EXCITED.</p>
                        <h3>Romelia Soto</h3>
                        <span>Apprentice</span>
                        <div class="rating">
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- Comments Final -->

    <!-- Prices Inicio -->
    <section class="pricies section-padding" id="prices" data-scroll-index="3">
        <div class="conainer">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Price <span>plan</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="prices-plan">
                        <div class="price-header">
                            <h3>Basic</h3>
                        </div>
                        <div class="price-price">
                            <span class="currency">$</span>
                            <span class="price">19</span>
                            <span class="type">One Video</span>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="fas fa-times"></i> Access to all course videos</li>
                                <li><i class="fas fa-times"></i> Choose the resolution</li>
                                <li><i class="fas fa-times"></i> Download videos</li>
                                <li><i class="fas fa-times"></i> No commercials</li>
                                <li><i class="fas fa-times"></i> Course certificate</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="btn btn-2">Get plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="prices-plan">
                        <div class="price-header">
                            <h3>Pro</h3>
                        </div>
                        <div class="price-price">
                            <span class="currecy">$</span>
                            <span class="price">499</span>
                            <span class="type">All Course</span>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="fas fa-check"></i> Access to all course videos</li>
                                <li><i class="fas fa-check"></i> Choose the resolution</li>
                                <li><i class="fas fa-check"></i> Download videos</li>
                                <li><i class="fas fa-check"></i> No commercials</li>
                                <li><i class="fas fa-check"></i> Course certificate</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="btn btn-3">Get plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Prices Final -->

    <!-- Team Inicio -->
    <section class="team section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Team <span>Members</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel team-carousel">
                    <div class="team-item">
                        <img src="<?= URL::to("resources/img/Yo.jpg")?>" alt="Alberto Daniel Hernandez Villanueva">
                        <h3>Alberto Daniel Hernandez Villanueva</h3>
                        <span>Frontend/Backend</span>
                    </div>
                    <div class="team-item">
                        <img src="<?= URL::to("resources/img/Landing/front.jfif")?>" alt="Luis Gerardo Becerra Jim??nez">
                        <h3>Luis Gerardo Becerra Jim??nez</h3>
                        <span>Frontend/Backend</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Final -->

    <!-- Conact Inicio -->
   <footer class="footer" data-scroll-index="4">
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-6">
                   <div class="footer-col">
                       <h3>About us</h3>
                       <p>We are a company that is dedicated to giving the opportunity to learn and earn money doing what you like.</p>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Lates blogs</a></li>
                            <li><a href="#">Page services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>Quick links</h3>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#comments">Comments</a></li>
                            <li><a href="#prices">Prices</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>Contact us</h3>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instragram</a></li>
                            <li><a href="#">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
           </div>
           <div class="row">
               <div class="col-lg-12">
                   <p class="copyright-text">&copy;2021 Change the world</p>
               </div>
           </div>
       </div>
   </footer>
    <!-- Conact Final -->

    <!-- Video Popup Inicio -->
    <div class="video-popup">
        <div class="video-popup-inner">
            <i class="fas fa-times video-popup-close"></i>
            <div class="iframe-box">
                <iframe id="player-1" src="https://www.youtube.com/embed/kKd7PVvA1wg" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- Video Popup Final -->

    <!-- jquery js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?= URL::to("resources/js/owl.carousel.min.js")?>"></script>
    <!-- ScrollIt js -->
    <script src="<?= URL::to("resources/js/scrollIt.min.js")?>"></script>
    <!-- main js -->
    <script src="<?= URL::to("resources/js/main.js")?>"></script>

</body>
</html>

