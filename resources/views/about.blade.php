@extends('layouts.public')
@section('public_section')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>About</li>
            </ol>
            <h2>About Us</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                    <div class="content">
                        <h3>Why Choose {{env('APP_NAME')}}?</h3>
                        <p>
                            {{env('APP_NAME')}} is the leading exchange in the U.S offering binary options and
                            Cryptocurrency trades. Regulated by the CFTC and based in Florida, with member funds
                            held in segregated accounts in major US banks, {{env('APP_NAME')}} offers secure and
                            innovative ways to participate in the markets.
                        </p>
                        <div class="text-center">
                            <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-flex">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>We are Innovative</h4>
                                    <p>We innovate systematically, continuously and successfully</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Licensed & certified</h4>
                                    <p>We received 5 out of 5 stars for "research" and "user experience" by
                                        Kiplinger's Personal Finance, "Best Online Brokers" 2018.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>We are professionals</h4>
                                    <p>We're a team of digital natives with deep financial expertise, backed by some
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
                    data-aos="fade-right">
                    <a href="https://youtu.be/e7jdmOlEN7E" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h4 data-aos="fade-up">About us</h4>
                    <h3 data-aos="fade-up">WHO ARE WE?</h3>
                    <p data-aos="fade-up">{{env('APP_NAME')}} is the leading exchange in the U.S offering binary
                        options and Cryptocurrency trades. Regulated by the CFTC and based in Florida, with member
                        funds held in segregated accounts in major US banks, {{env('APP_NAME')}} offers secure and
                        innovative ways to participate in the markets.</p>

                    <p data-aos="fade-up">In {{env('APP_NAME')}}, trading is done by us using movements in a wide range
                        of markets. From one account, we trade stock indices, forex, commodities, Bitcoin, and
                        economic events. With 5000 hourly, daily and weekly contracts traded 5 days a week, 23 hours
                        a day, {{env('APP_NAME')}} get an ongoing series of short-term trading opportunities.</p>

                    <p data-aos="fade-up">{{env('APP_NAME')}} is regulated by the Commodity Futures Trading Commission
                        as a financial exchange. As such, we assist investors and investors do not take positions in
                        any markets. Many people increase their capital through cryptocurrency stock exchanges.
                        Demand for binary options is growing, as while trading binary options, it's really easy to
                        gain profit using asset fluctuation, and one does not need special skills and education for
                        that. Binary options are perfectly suitable for newbies who want to try and experience
                        trading and for professionals who know financial markets quite good.</p>

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
                        <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                        <h4 class="title"><a href="">Make a Deposit</a></h4>
                        <p class="description">Make deposit into your trading account using bitcoin.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-earth"></i></div>
                        <h4 class="title"><a href="">Select Trading Plan</a></h4>
                        <p class="description">Choose a trading plan and relax while we do the trading for you.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-image"></i></div>
                        <h4 class="title"><a href="">Withdraw</a></h4>
                        <p class="description">Earn commissions and withdraw to your bitcoin wallet.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>UK</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Received my third investment. Well over here, every time invested is the charm. HIGHLY
                        RECOMMENDED..
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Jena Wilsson</h3>
                    <h4>Canada</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I'm just a beginner to this and I'm so happy to receive my first payment from flash
                        investmentz. You guys are awesome!!!
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Olivia Brandon</h3>
                    <h4>UK</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I have been purchasing the gold plan for more than 4 months now and I can boldly say that I
                        have never been disappointed by {{env('APP_NAME')}}. Thank you
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Oscar Santos</h3>
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
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Sweden</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Wow! I am so exicited. Got my first payment. I am investing a higher amount now. More grace
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
                <p data-aos="fade-up">Questions You Often Ask</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                            href="#faq-list-1">What is the minimum amount required to open an account? <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                            <p>
                                1000 USD is the minimum amount required to open an account.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                            class="collapsed">How do we calculate out deposit in BTC? <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                Our bitcoin price is pegged at 9000 USD per bitcoin
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                            class="collapsed">Can I have more than 1 account? <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
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
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
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
    </section><!-- End F.A.Q Section -->


</main>

@endsection
