@extends('layouts.public')
@section('public_section')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>
        <h2>Contact Us</h2>
      </div>
    </section><!-- End Breadcrumbs -->

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
              <h3>Our Address</h3>
              <p>
               @php
                            $addresses = explode("<br>", env("APP_SITE_ADDRESS"));
                            foreach($addresses as $address){
                                echo $address."<br>";
                            }
                        @endphp
              </p>
            </div>
          </div>

          <div class="col-xl-6 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>{{env("APP_SITE_PHONE")}}</p>
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
            <form action="sendmail.php" method="post" role="form" class="php-email-form contactform">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fullname" class="form-control" id="name" placeholder="Your Name" required="" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
               <input type="number" class="form-control" name="phone" placeholder="Your Phone" required="" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" required=""></textarea>
                <div class="validate"></div>
              </div>

              <div class="text-center">
                  <button type="submit" name="send"><span class="showprocesscontact"></span>Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->
  @endsection
