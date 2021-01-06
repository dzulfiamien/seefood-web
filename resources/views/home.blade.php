@extends('layouts.app')

@section('content')
<section id="services" style="background:black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase mb-5 section-heading" style="color: white;">Services</h2>

            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i> 
                    <i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="section-heading mt-3" style="color: white;">Fast and Portable</h4>
                <p class="text-muted">Food identification is done anywhere and anytime.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="section-heading mt-3" style="color: white;">Powerful</h4>
                <p class="text-muted">Recognizes more than 7000 kinds of food around the world.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-magic fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="section-heading mt-3" style="color: white;">Smart</h4>
                <p class="text-muted">Has the ability to repeat the last identification.</p>
            </div>
        </div>
    </div>
</section>
<section id="features" class="work" style="background: #F5F4F8;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-5 text-uppercase text-dark section-heading">HOW IT WORKS</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-text wow animated slideInLeft">
                    <img src="assets/img/work/front.png" class="img-responsive" alt="work">
                    <h4><img src="assets/img/work/1.svg" alt="download">Open</h4>
                    <p>Let's say you are in a store and see a food you like but you don't know the name of the food. Start the app and tap the Seefood button.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-text wow animated slideInRight">
                    <img src="assets/img/work/evaluating.png" class="img-responsive" alt="work">
                    <h4><img src="assets/img/work/2.svg" alt="check">Evaluating</h4>
                    <p>A digital fingerprint of the image is created and, in seconds, matches a database of millions of images in the cloud.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-text wow animated slideInRight">
                    <img src="assets/img/work/yes.png" class="img-responsive" alt="work">
                    <h4><img src="assets/img/work/3.svg" alt="check">Done</h4>
                    <p>You will then be given the name of the food along with information such as its origin, ingredients and the nearest place to find it.</p>
                </div>
            </div>
            <!-- <div class="col-md-12">
                <div class="buttons text-center wow animated bounce">
                    <a href="#" class="btn btn-pink" style="background: #FEC503;">Selengkapnya</a>

                </div>
            </div> -->
        </div>
    </div>
</section>
<section id="portfolio" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mb-5 text-uppercase text-dark section-heading">OUR PARTNER</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-eye fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/portfolio/pied_piper.png">
                </a>
                <div class="portfolio-caption">
                    <h4>Pied Piper</h4>

                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-eye fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/portfolio/hooli.png">
                </a>
                <div class="portfolio-caption">
                    <h4>Hooli</h4>

                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-eye fa-3x"></i></div>
                    </div><img class="img-fluid" src="assets/img/portfolio/techcrunch_disrupt.png">
                </a>
                <div class="portfolio-caption">
                    <h4>Techcrunch Disrupt</h4>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" style="background:black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mb-5 text-uppercase" style="color: white;">About</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-group timeline">
                    <li class="list-group-item">
                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                src="assets/img/about/beginning.png"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                                <h4>April 30, 2017</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Erlich makes a play to be involved in Jian-Yang's new app, but
                                    he has no idea what the hell Jian-Yang is up to, nor why this is the first he’s
                                    heard of it. Eventually, Erlich blindly invests in what he thinks is a VR
                                    project but is actually Jian-Yang’s octopus recipe. </p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                src="assets/img/about/agreement_reached.png"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                                <h4>May 7, 2017</h4>
                                <h4 class="subheading">An Agreement was Reached</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">At Jian-Yang’s venture capitalist meeting, Erlich still
                                    refuses to accept that the software in question is nothing more than eight
                                    octopus recipes written by a loving Chinese grandmother. The VCs are also
                                    confused: They thought Jian-Yang was saying “see food,” not “seafood,” and are
                                    expecting a Shazam-like app that works on food. In a fit of desperation, Erlich
                                    brokers a $200,000 deal for this non-existent product.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                src="assets/img/about/initial_release.png"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                                <h4>May 14, 2017</h4>
                                <h4 class="subheading">Initial Release</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Everyone rejoices when SeeFood correctly identifies a hot dog.
                                    Their joy is short-lived, however, because SeeFood only has two responses to the
                                    food it sees: “hot dog” and “not hot dog.” Dinesh explains that Jian-Yang’s core
                                    algorithm is solid and can work if it’s better trained. Unfortunately, that
                                    requires showing the algorithm pictures of every single food in the known
                                    universe.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                src="assets/img/about/expansion.png"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                                <h4>June 4, 2017</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Bertram Gilfoyle hatred of humanized technology. The tech in
                                    question is a $14,000 refrigerator Jian-Yang buys to replace Erlich’s
                                    now-deceased appliance. The fridge has a friendly male voice that has vocal tics
                                    like “oh,” “ahh,” and “umm.” “The tics make it seem more human,” Dinesh tells
                                    Gilfoyle.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="timeline-image"><img class="rounded-circle img-fluid"
                                src="assets/img/about/saves.png"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                                <h4>June 25, 2017</h4>
                                <h4 class="subheading">Save Our Server</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">When Gilfoyle used Anton to hack Jian-Yang’s smart fridge, the
                                    appliance registered the hack as an upgrade, sending the code to every other
                                    registered Smart Fridge. That code included PP:TNG, meaning that Dan Melcher’s
                                    data is not only alive and well, it’s living in the kitchens of 30,000
                                    Americans. “Anton died so we can live!” says an amused and proud Gilfoyle.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="team" class="bg-light" style="background: #F5F4F8;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mb-5 text-uppercase text-dark">TEAM</h2>
            </div>
        </div>
        <div class="row">
            <div class="col ">
                <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/jian-yang.png">
                    <h5 class="mt-3">Jian Yang</h5>
                    <p class="text-muted">Founder</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col ">
                <div class="team-member"><img class="rounded-circle mx-auto"
                        src="assets/img/team/richard-hendricks.png">
                    <h5 class="mt-3">Richard Hendricks</h5>
                    <p class="text-muted">Co-Founder</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col ">
                <div class="team-member"><img class="rounded-circle mx-auto"
                        src="assets/img/team/dinesh-chugtai.png">
                    <h5 class="mt-3">Dinesh Chugtai</h5>
                    <p class="text-muted">Lead Engineer</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col ">
                <div class="team-member"><img class="rounded-circle mx-auto"
                        src="assets/img/team/bertram-gilfoyle.png">
                    <h5 class="mt-3">(Bertram) Gilfoyle</h5>
                    <p class="text-muted">Systems Architect</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col ">
                <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/jared-dunn.png">
                    <h5 class="mt-3">Jared Dunn</h5>
                    <p class="text-muted">Bussiness Development</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase text-dark section-heading">What Other Say</h2>
                        <hr class="midline">
                        <h3 class="text-muted mb-5">Our team created best opportunities for your business.</h3>
                    </div>
                </div>
                
                
                <div class="card col-md-12 mt-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"
                        data-interval="100000">
                        <div class="w-100 carousel-inner mb-5" role="listbox">
                            <div class="carousel-item active">
                                <div class="bg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="assets/img/testimoni/michael.jpg" alt=""
                                                        class="rounded-circle img-fluid">
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                    <h2>Michael Setyo - <span>Food Lover</span></h2>
                                                    <small>This app has changed my life. I even used it to save
                                                        someone's life. One can not live without such an essential
                                                        its like the bread and butter of apps. Perfect life saving
                                                        tools!</small>
                                                    <small class="smallest mute">- admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="assets/img/testimoni/ahsan.jpg" alt=""
                                                        class="rounded-circle img-fluid">
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                    <h2>Ahsan Firdaus - <span>Lotek Addict</span></h2>
                                                    <small>Fantastic app! Helps me identify Lotek or not Lotek. This
                                                        app brought me out of chronic depression. Jin Yang is a tech
                                                        genius.</small>
                                                    <small class="smallest mute">- admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bg"></div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="assets/img/testimoni/masyun.png" alt=""
                                                        class="rounded-circle img-fluid">
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                    <h2>Mas Yunanto - <span>Penikmat Senja</span></h2>
                                                    <small>This all changed my life. All these years I've been
                                                        searching for a true pizza and I have finally found it
                                                        thanks to this app. Thank you for ending my 1000 year
                                                        fast.</small>
                                                    <small class="smallest mute">- admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="assets/img/testimoni/johnmayer.jpg" alt=""
                                                        class="rounded-circle img-fluid">
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                    <h2>John Mayer - <span>Singer</span></h2>
                                                    <small>10/10 it really work if I don't know whether it is a food
                                                        or not I can just go to this app love it thank you so much.
                                                        For my fans, just download it. It really helpful!</small>
                                                    <small class="smallest mute">- admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                    class="fa fa-chevron-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                    class="fa fa-chevron-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<section id="contact" style="background-image:url('assets/img/stay-in-touch.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Stay in Touch</h2>
                <h3 class="section-subheading text-muted">We want to hear your feedback</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="contactForm" novalidate="novalidate">
                    <div class="form-row">
                        <div class="col col-md-6">
                            <div class="form-group"><input class="form-control" type="text" id="name"
                                    placeholder="Your Name *" required=""><small
                                    class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                            <div class="form-group"><input class="form-control" type="email" id="email"
                                    placeholder="Your Email *" required=""><small
                                    class="form-text text-danger help-block lead"></small></div>
                            <div class="form-group"><input class="form-control" type="tel"
                                    placeholder="Your Phone *" required=""><small
                                    class="form-text text-danger help-block lead"></small></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><textarea class="form-control" id="message"
                                    placeholder="Your Message *" required=""></textarea><small
                                    class="form-text text-danger help-block lead"></small></div>
                        </div>
                        <div class="col">
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase"
                                id="sendMessageButton" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
