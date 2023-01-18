@extends('layouts.public')
@section('slider')
<section id="herokoooo" class="d-flex flex-column justify-content-center align-items-center"
        style="background-size:cover; background-image: linear-gradient(rgba(4, 30,55,0.6),rgba(4, 30,55,0.6)), url(./public_assets/kjasfaljflajlfkjalkfjakldjfaljfdkajdjsigna.gif)">
        <div class="container mt-3 mb-5" data-aos="fade-in">
            <h3 class="text-light mt-5 mb-3">TRADE IN THE MOMENT, INVEST IN THE FUTURE!</h3>
            <h2 class="text-light">Automated investing designed to earn passive income while you focus on what matters.</h2>
            <div class="d-flex align-items-center mb-5">

                <a href="{{route('register')}}" class="btn btn-lg btn-outline-warning btn-get-started scrollto ">Get Started</a>
            </div>
        </div>
@endsection
@section('public_section')
<main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us" style="background: #161A28">
        <div class="container">

            <div class="row">
                <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                    <div class="content" style="background: #000">
                        <h3 class="text-warning">Why Choose {{env('APP_NAME')}}?</h3>
                        <p>
                            We are Professional Traders & Portfolio Managers who return profit to investors,
                            guaranteed and Regulated by the Securities and Exchange Commission.
                            We offer optimum trading service that is capable of delivering profits on invested funds every week.
                            We Trade on a Wide Range of Assets, Cryptos, Fx Options & Commodities.
                        </p>
                        <div class="text-center">
                            <a href="{{route('about')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-flex">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>We are Innovative</h4>
                                    <p>We innovate systematically, continuously and successfully</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt" style="color:green"></i>
                                    <h4>Licensed and certified</h4>
                                    <p>We received 5 out of 5 stars for "research" and "user experience" by
                                        Kiplinger's Personal research, "Best Online Brokers" 2018.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="icofont-workers-group" style="color:brown"></i>
                                    <h4>Professionals</h4>
                                    <p>We're a team of digital natives with deep financial expertise, backed by
                                        of the world's most notable investors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                    data-aos="fade-right" style="background: url('./public_assets/klfjaljflajflajlfjaphonegif.gif');background-repeat: no-repeat;height: 600px;background-size: contain;
                        background-position: center;background-color: #FFF9F7">
                    <a href="https://youtu.be/e7jdmOlEN7E" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h4 data-aos="fade-up">About {{env('APP_NAME')}}</h4>
                    <h3 data-aos="fade-up">WHO ARE WE?</h3>
                    <p data-aos="fade-up">{{env('APP_NAME')}} is the leading exchange in the United States offering binary
                        options and Cryptocurrency trades. Regulated by the CFTC and based in Florida, with member
                        funds held in segregated accounts in major US banks, {{env('APP_NAME')}} offers secure and
                        innovative ways to participate in the markets.</p>

                    <p data-aos="fade-up">In {{env('APP_NAME')}}, trading is done by us using movements in a wide range
                        of markets. From one account, we trade stock indices, forex, commodities, Bitcoin, and
                        economic events. With 5000 hourly, daily and weekly contracts traded 5 days a week, 23 hours
                        a day, {{env('APP_NAME')}} get an ongoing series of short-term trading opportunities.</p>



                    <p data-aos="fade-up">{{env('APP_NAME')}} is the first binary options broker in the world which
                        provides its traders with an opportunity to gain profit by analyzing cryptocurrency pairs.
                        Profit per deal up to 91%. Guarantee of integrity. Stock data is received on the server and
                        is transmitted to the platform every second. Traditional instruments for trading: currency
                        pairs, indices, stocks, commodities. Accurate quote data from global stock exchanges.</p>

                    <p data-aos="fade-up">Online support of clients 24/7. It's a great opportunity to test platform
                        operations.</p>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>How it Works</h2>
                <p>While the financial markets have become accessible to more people, it has become challenging for
                    them to to choose the most suitable one. A trader should consider the potential advantages and
                    drawbacks of a financial market before investing, that's why at {{env('APP_NAME')}} we try to bear
                    all the risk of investing on your behalf while you consistently make gains without breaking a
                    sweat.</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-computer"></i></div>
                        <h4 class="title"><a href="">Open Account</a></h4>
                        <p class="description">Register a free account in less than 1 minute.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon" style="background:red"><i class="icofont-money-bag"></i></div>
                        <h4 class="title"><a href="">Make a Deposit</a></h4>
                        <p class="description">Make deposit into your trading account using bitcoin.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon" style="background:green"><i class="icofont-chart-bar-graph"></i></div>
                        <h4 class="title"><a href="">Select Trading Plan</a></h4>
                        <p class="description">Choose a trading plan and relax while we do the trading for you.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon" style="background:orange"><i class="icofont-money"></i></div>
                        <h4 class="title"><a href="">Withdraw</a></h4>
                        <p class="description">Earn commissions and withdraw to your bitcoin wallet.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">


        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">Pricing</h2>
                <p data-aos="fade-up">Choose How You Want to Invest With Us</p>
            </div>



        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Solomon Goodman</h3>
                    <h4>UK</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Received my third investment. Well over here, every time invested is the charm. HIGHLY
                        RECOMMENDED..
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>



                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Oscar Mercy</h3>
                    <h4>Brazil</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I want to thank you for your payment in bitcoin that I received today. I'm a Brazilian, I'm
                        always discriminated when it comes to making money online, every time I try to register on a
                        site online to make money they tell me they don't accept my country. But not with your
                        website.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Jenar Wilsson</h3>
                    <h4>Canada</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I'm just a beginner to this and I'm so happy to receive my first pay from flash
                        investmentz. You guys are awesome!!!
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Olivia Brandon</h3>
                    <h4>United Kingdom</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I have been purchasing the gold plan for more than 4 months now and I can boldly say that I
                        have never been disappointed by {{env('APP_NAME')}}. Thank you
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Gates</h3>
                    <h4>Sweden</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Wow! I am so exicited. Got my first profit. I am investing a higher amount now. More grace
                        to the administrators. I am very grateful
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">Team</h2>
                <p data-aos="fade-up"></p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Tyron jaggs</h4>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Elizabeth simpsons</h4>
                            <span>Telegram account manger</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Alyssa tsonte</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Kelvin Patrick</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">F.A.Q</h2>
                <p data-aos="fade-up">Frequently Asked Questions</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                            href="#faq-list-1">What is the minimum amount required to open an account with {{env('APP_NAME')}}.com? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                            <p>
                                1,000 USD is the minimum amount required to open an account.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                            class="collapsed">How do we calculate out deposit in BTC? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                Our bitcoin price is pegged at 9000 USD per bitcoin
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                            class="collapsed">Can I have more than 1 account? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                            <p>
                                No, there is no need to have more than one account as the system is design to allow
                                you make multiple simultenous investments with one account.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                            class="collapsed">How long does it take to process withdrawals? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                            <p>
                                Processing withdrawals do not take more than 3 hours of making a withdrawal request.
                                If it does, contact our customer care.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">Contact</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-4 mt-4" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Address</h3>
                        <p>A18 Adam Street, New York, United State</p>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-xl-9 col-lg-12 mt-4">
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function(){
                                //process signin
                                $(".contactform").on('submit', function(et){
                                et.preventDefault();
                            $(".moreloading").show();
                                $.ajax({
                                    url: "sendmail.php",
                                type: "POST",
                                data:  new FormData(this),

                                contentType: false,
                                    cache: false,
                                processData:false,
                                beforeSend: function(data){ $(".showprocesscontact").html('<span>loading..</span>'); },
                                success: function(data){
                                    $(".showprocesscontact").show();
                                $(".showprocesscontact").html(data);
                                //$(".showprocesscontact").scrollTop($(".showprocesscontact")[0].scrollHeight);
                                // $(".moreloading").remove();
                                    },
                                    error: function(){}
                                });
                            });
                                });
                    </script>
                    <form onsubmit="event.preventDefault()" method="post" role="form"
                        class="php-email-form contactform">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="fullname" class="form-control" id="name"
                                    placeholder="Your Name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />

                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />

                            </div>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" id="email" placeholder="Your Phone"
                                data-rule="number" data-msg="Please enter a valid Phone Number" />
                            <div class="validate"></div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Type your message here"></textarea>
                        </div>
                        <div class="text-center"><button type="submit" name="send"><span class="showprocesscontact"></span> Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
@endsection
