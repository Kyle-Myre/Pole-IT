<!DOCTYPE html>
<html lang="en">
@include('home.components.navbar')
<body>
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{url('images/sky%20(2).jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Discover the Wonders of the Universe at <span class="text-glow">PoleIt Astronomy Center</span></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Explore the cosmos like never before at PoleIt, your gateway to the stars nestled in the heart of Orléans.
                                    Whether you're a budding astronomer or a seasoned stargazer</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img1/interstellar.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Discover the Unknown
                                    Join us at PoleIt for a Journey Beyond the Stars</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2"></p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"></a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid h-100" src="{{url('images/astrodud.png')}}" style="object-fit: cover; right: 100px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h1 class="mb-5"></h1>
                    <p class="mb-5">Welcome to PoleIt, the premier astronomy center located in the heart of Orléans.
                        Established with the vision to democratize access to astronomy and inspire a new generation of stargazers,
                        PoleIt serves as a vibrant community hub for education and discovery.</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fas fa-newspaper fa-3x text-primary mb-3"></i>
                            <h5>Global News</h5>
                            <p class="m-0">At PoleIt, we actively share the latest in global astronomy news and activities,
                                connecting our community with cutting-edge discoveries and upcoming celestial events through
                                engaging workshops, social media updates, and informative newsletters.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fas fa-smile-beam fa-3x text-primary mb-3"></i>
                            <h5>Community</h5>
                            <p class="m-0"> we deepen community ties through astronomy, offering educational
                                partnerships and public events that make the cosmos accessible to everyone.
                                Our programs include public lectures, observation nights,
                                and activities designed for families and learners of all ages.</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                    <h1 class="mb-5">#1 Destination for Astronomy Enthusiasts</h1>
                    <p class="mb-5">At PoleIt, we're dedicated to making astronomy accessible and engaging.
                        We bring the latest global astronomy news, breakthroughs,
                        and celestial events directly to you through our vibrant workshops,
                        active social media presence, and detailed newsletters.</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+33 5 53 60 74 12</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Happy Astronomers</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-school fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">290</h2>
                                <p class="text-white mb-0">Educational Events Hosted</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">825</h2>
                                <p class="text-white mb-0">Stellar Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Discover our activities</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/8111969orig.jpg')}}" alt="">
                        </div>
                        <h4 class="mb-3">Image Of The Day</h4>
                        <p>The new era in space flight began on April 12, 1981. That is when the first Space
                            Shuttle mission (STS-1) was launched. The Marshall Space Flight Center developed
                            the propulsion system for the Space Shuttle. This photograph depicts the launch of the Space Shuttle
                            Orbiter Columbia crewed with two astronauts, John Young and Robert Crippen.</p>
                        <a class="btn-slide mt-2" href="https://www.instagram.com/nasakennedy/p/C5qjgoQOXBd/"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/moon-event.jpg')}}" alt="">
                        </div>
                        <h4 class="mb-3">On the Moon again</h4>
                        <p>On the Moon Again invites you to take out your instrument on June 14, 15 and 16, 2024
                            to introduce the Moon to your neighbors, friends and passers-by.
                            To participate, it's very simple, just register before May 1st</p>
                        <a class="btn-slide mt-2" href="https://www.onthemoonagain.org/"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/earth.jpg')}}" alt="">
                        </div>
                        <h4 class="mb-3">New Initiatives to Enhance Our Understanding of Climate Change</h4>
                        <p>On May 7, 2024, NASA announced the selection of four proposals for concept studies
                            of missions to benefit humanity through the study of Earth science.</p>
                        <a class="btn-slide mt-2" href="https://www.nasa.gov/news-release/new-proposals-to-help-nasa-advance-knowledge-of-our-changing-climate/"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/clock-universe.jpg')}}" alt="">
                        </div>
                        <h4 class="mb-3">AstroCiel Meetings</h4>
                        <p>En raison de la fermeture de la station de Valdrôme décidée par le Conseil départemental de la Drôme,
                            les Rencontres AstroCiel organisées par la Société astronomique de France auront lieu dans le domaine
                            de Pradines, route de Millau, 30750 Lanuéjols.</p>
                        <a class="btn-slide mt-2" href="https://saf-astronomie.fr/astrociel/"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/Younivers.jpeg')}}" alt="">
                        </div>
                        <h4 class="mb-3">Younivers: The astro-teen channel</h4>
                        <p>La Société astronomique de France se mobilise pour aider les jeunes de 11 à 18 ans
                            dans leurs activités astronomiques. Afin de rassembler un maximum de jeunes autour
                            d’un projet commun, nous avons créé en 2020 la chaine YouTube Younivers – La chaine
                            des astro-ados parrainée par Sébastien Carassou.
                            En 2022, le projet Younivers est devenu international (francophone). </p>
                        <a class="btn-slide mt-2" href="https://saf-astronomie.fr/younivers/"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/BibliothequeSAF02.jpg')}}" alt="">
                        </div>
                        <h4 class="mb-3">The astronomical library</h4>
                        <p>Située au siège de la SAF, elle est la seule bibliothèque astronomique ouverte
                            à tout public. Elle contribue aux autres activités : l’Astronomie,  les Commissions,
                            les séances d’observation. C’est aussi un lieu d’échanges privilégié et convivial.</p>
                        <a class="btn-slide mt-2" href="https://saf-astronomie.fr/bibliotheque/"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                    <h1 class="mb-5">PoleIt: Your Gateway to the Cosmos Since 2024</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-university text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Educational Activities for All Ages</h5>
                            <p class="mb-0">Participate in a variety of educational activities tailored to both young aspiring astronomers and seasoned stargazers.
                                From building your own telescope workshops to lectures on cosmic events, there’s something to spark everyone’s interest.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-space-shuttle text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Interactive Daytime Exhibitions</h5>
                            <p class="mb-0">Engage with our interactive exhibits that explain complex astronomical concepts in simple terms. Perfect for learners of all ages,
                                our exhibitions are designed to inspire curiosity and foster a deeper understanding of the universe.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-broadcast-tower text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Giant Radio Telescope Access</h5>
                            <p class="mb-0">Peer further into space than ever before with our giant radio telescope.
                                Our observatory nights offer a hands-on experience observing distant galaxies and celestial phenomena under the guidance of expert astronomers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{url('images/astrogirl.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Subscription Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Pricing Plan</h6>
                <h1 class="mb-5">Perfect Pricing Plan</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item">
                        <div class="border-bottom p-4 mb-4">
                            <h5 class="text-primary mb-1">Skywatcher Plan</h5>
                            <h1 class="display-5 mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>29.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                        <div class="p-4 pt-0">
                            <p><i class="fa fa-check text-success me-3"></i>Unlimited access to planetarium shows</p>
                            <p><i class="fa fa-check text-success me-3"></i>Weekend access to the observatory</p>
                            <p><i class="fa fa-check text-success me-3"></i>Monthly newsletter with skywatching tips</p>
                            <p><i class="fa fa-check text-success me-3"></i>10% discount on all workshops</p>
                            <p><i class="fa fa-check text-success me-3"></i>Special viewing glasses provided for solar event</p>
                            <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span >Order Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="border-bottom p-4 mb-4">
                            <h5 class="text-primary mb-1">Stargazer Plan</h5>
                            <h1 class="display-5 mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>59.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                        <div class="p-4 pt-0">
                            <p><i class="fa fa-check text-success me-3"></i>Includes all features of the Skywatcher Plan</p>
                            <p><i class="fa fa-check text-success me-3"></i>Weekly guided telescope sessions</p>
                            <p><i class="fa fa-check text-success me-3"></i>Priority booking for special celestial events</p>
                            <p><i class="fa fa-check text-success me-3"></i>Two free guest passes per month</p>
                            <p><i class="fa fa-check text-success me-3"></i>Access to member-only night exhibitions</p>
                            <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span >Order Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="price-item">
                        <div class="border-bottom p-4 mb-4">
                            <h5 class="text-primary mb-1">Cosmos Enthusiast Plan</h5>
                            <h1 class="display-5 mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>89.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                        <div class="p-4 pt-0">
                            <p><i class="fa fa-check text-success me-3"></i>Includes all features of the Stargazer Plan</p>
                            <p><i class="fa fa-check text-success me-3"></i>Opportunity to contribute to real astronomical research</p>
                            <p><i class="fa fa-check text-success me-3"></i>Private viewing sessions during new celestial discoveries</p>
                            <p><i class="fa fa-check text-success me-3"></i>Free access to all special courses and educational programs</p>
                            <p><i class="fa fa-check text-success me-3"></i>Annual VIP dinner with keynote astronomers</p>
                            <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span >Order Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Team</h6>
                <h1 class="mb-5">Expert Team Members</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item p-3 text-center">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/jawad.PNG')}}" alt="">
                        </div>
                        <h5 class="mb-0">Nathalan</h5>
                        <p>Designation</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item p-3 text-center">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/muhy.jpg')}}" alt="">
                        </div>
                        <h5 class="mb-0">Mohy-Eddine Bouthaim</h5>
                        <p>BackEnd developer</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="team-item p-3 text-center">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{url('images/jawad2.PNG')}}" alt="">
                        </div>
                        <h5 class="mb-0">Abdeljaouad MIMOUNI</h5>
                        <p>FrontEnd developer</p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="{{url('images/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Jane Doe</h5>
                            <p class="m-0">Astronomy Enthusiast</p>
                        </div>
                    </div>
                    <p class="mb-0">"My family and I are absolutely thrilled with our experiences at PoleIt! Each visit offers new insights
                                        and the staff's enthusiasm makes every event special. It's our favorite weekend destination!"</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="{{url('images/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">John Smith</h5>
                            <p class="m-0">Amateur Astronomer</p>
                        </div>
                    </div>
                    <p class="mb-0">"The workshops and sky-watching events are top-notch at PoleIt. I've been able to enhance my understanding
                                    of the cosmos thanks to the knowledgeable guides and their helpful tips. Highly recommend their membership!"</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="{{url('images/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Antonio Hernández</h5>
                            <p class="m-0">Teacher</p>
                        </div>
                    </div>
                    <p class="mb-0">"As an educator, finding resources that can captivate and educate is gold. PoleIt's educational programs have
                                    not only enriched my curriculum, but they've also ignited a spark of curiosity about astronomy among my students."</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="{{url('images/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Emily Turner</h5>
                            <p class="m-0">Photography Hobbyist</p>
                        </div>
                    </div>
                    <p class="mb-0">"At PoleIt, I captured some of my best celestial photographs during their guided night sessions.
                                    The staff's expertise and the advanced facilities make it the perfect place for anyone interested in astrophotography."</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('lib/wow/wow.min.js')}}"></script>
    <script src="{{url('lib/easing/easing.min.js')}}"></script>
    <script src="{{url('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>

</html>