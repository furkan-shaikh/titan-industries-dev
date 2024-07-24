<?php include 'head.php'; ?>

<body>
  <?php include 'nav.php'; ?>

  <section class="hero-wrap hero-wrap-2 degree-right ftco-no-slant contact-banner" style="background-image: url('images/contact-banner.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end">
        <div class="col-md-9 ftco-animate pb-5 mb-5">
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span>
            <span>Contact Us</span>
          </p>
          <h1 class="mb-3 bread">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bim-background">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-8">
          <div class=" heading-section heading-para ftco-animate">
            <h2 class="mb-2">Get In Touch</h2>
            <p>We Would love to hear from you</p>
          </div>
          <form id="contactForm" class="mt-5">
            <div class="row">
              <div class="col-md-3 pdr-0">
                <label class="float-left" for="Name">Name*</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" />
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-md-3 pdr-0">
                <label class="float-left" for="Name">Profession</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" name="profession" class="form-control" placeholder="Tell us what you do" />
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-md-3 pdr-0">
                <label class="float-left" for="Name">Email*</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Your email so that we can contact you" />
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-md-3 pdr-0">
                <label class="float-left" for="Name">Phone*</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" width="70%" name="phone" class="form-control" placeholder="Enter Phone Number" />
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-md-3 pdr-0">
                <label class="float-left" for="Name">Interested in</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <select class="form-control" name="intrested" style="font-weight: Spartan-Medium, sans-serif;">
                    <option value="">Select Product Category</option>
                    <option value="Cable Tray Systems">Cable Tray Systems</option>
                    <option value="Cable Trunking Systems1">Cable Trunking Systems</option>
                    <option value="Cable Ladder Systems">Cable Ladder Systems</option>
                    <option value="Channel Support Systems">Channel Support Systems</option>
                    <option value="Pipe Clamping Systems">Pipe Clamping Systems</option>
                    <option value="Finishes for Cable Management Systems">Finishes for Cable Management Systems</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mt-4 ">
              <div class="col-md-3 pdr-0">
                <label class="float-left" for="Name">Enquiry</label>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <textarea name="enquiry" cols="30" rows="7" class="form-control" placeholder="Drop a line or two about yourself"></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group text-center mt-5">
                  <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary py-3 px-5" />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="bim-side-section mt-5">
            <div class="bim-heading mb-5">
              <h1>Contact Us</h1>
              <div class="contact-address">
                <div class="dbox w-100 d-flex ftco-animate mt-4">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <div class="text">
                    <p><span>Address:</span>
                      Warehouse 1,
                      Plot No 6270,
                      Emirates Industrial City,
                      P O Box 60427,
                      Sharjah,
                      U.A.E.
                    </p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex ftco-animate mt-4">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="text">
                    <p><span>Phone:</span> <a href="tel:+97167406689">+971 6 542 6036
                      </a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex ftco-animate mt-4">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                  </div>
                  <div class="text">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">letstalk@titanuae.com</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex ftco-animate mt-4">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-fax"></span>
                  </div>
                  <div class="text">
                    <p><span>Fax:</span> <a href="fax:+97167406698">+971 6 740 6698</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'foot.php'; ?>
  <?php include 'scripts.php'; ?>

  <script>
    $('body').on('submit', '#contactForm', function(e) {
      // $('#contact_loader').fadeIn(400);
      e.preventDefault();
    
      // To Check reCAPTCHA
      // var recaptcha = $("#g-recaptcha-response").val();
      // if (recaptcha === "") {
      //    e.preventDefault();
      //    $('#contact_captcha_msg').fadeIn(200);
      //    setTimeout( function(){
      //      $('#contact_captcha_msg').fadeOut(200);
      //    }, 3000)
      //    return 0;
      // }

      // var that = $(this);
      $.ajax({
        type: 'post',
        url: 'contactMail.php',
        data: $(this).serialize(),
        global: true,
        beforeSend: function() {
          swal({
    title: 'Loading',
    allowEscapeKey: false,
    allowOutsideClick: false,
    // timer: 2000,
    onOpen: () => {
      swal.showLoading();
    }
  }).then(
    () => {},
    (dismiss) => {
      if (dismiss === 'timer') {
        console.log('closed by timer!!!!');
        swal({ 
          title: 'Finished!',
          type: 'success',
          timer: 2000,
          showConfirmButton: false
        })
      }
    }
  )
        },
        success: function(success) {
          if (success) {
              swal("Thank you!", "We will get back to you soon!")
          } else {
            swal("Oops!", "Something went wrong, you should choose again!", "error");
          }
          // $('#contact_loader').fadeOut(200);
          //$("#contactForm").hide(200);
          // $('#contact_success_msg').fadeIn(200);
          // setTimeout(function() {
          //     $('#contact_success_msg').fadeOut(400);
          // }, 4300);
          
          //reset form
          $("#contactForm")[0].reset();
          // grecaptcha.recaptchaeset();
          // grecaptcha.reset();
        },

        error: function(data) {
          swal("Oops!", "Something went wrong, you should choose again!", "error");
        }
      });
    });
  </script>

</body>

</html>