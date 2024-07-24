<body>
    <?php
    include 'head.php'; ?>
    <?php include 'nav.php'; ?>


    <section class="hero-wrap hero-wrap-3 degree-right ftco-no-slant solutions-banner" style="background-image: url('images/banner/productBanner.png');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-6 ftco-animate pb-5 mb-5">
                    <h1 class=" bread">Our Products</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-4 ftco-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ftco-animate heading-section-products">
                    <h2 class="mb-2">Titan Industries e-Catalogue</h2>
                    <p>
                        Titan UAE can now offer its cable management solutions for airports, palaces, multi-storied commercial and residential buildings, hospitals and educational institutions as downloadable BIM objects. 
                    </p>
                    <div class="product-list">
                        <ul>
                            <li><img src="images/listimage.png" alt=""> Cable Tray and accessories</li>
                            <li> <img src="images/listimage.png" alt="">Steel Surface Cable Trunking</li>
                            <li> <img src="images/listimage.png" alt="">Cable Ladder Systems</li>
                            <li> <img src="images/listimage.png" alt="">Cable Ladder and accessories</li>
                            <li> <img src="images/listimage.png" alt="">Channel Systems and accessories</li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 ftco-animate product-title-image-section">
                    <div class="abt-img-wrap product-image text-center">
                        <img src="images/img-Cable Tray.png" alt="About Titan Industries">
                    </div>
                    <div class="product-image-one text-center">
                        <img src="images/productImage2.png" alt="">
                    </div>
                    <div class="product-image-two text-center">
                        <img src="images/productImage3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-category mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products ftco-animate">
                        <h2 class="mb-2">Cable Tray and accessories</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <div class="query-button">
                            <a onclick="DimModalOpen(), BimDetails('Cable Tray and accessories')" class="btn btn-primary">Ask for File</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-category-para">
                        <p>A comprehensive range of steel and aluminium cable trays and accessories suitable for a variety of industrial and commercial cable support requirements. With speed of installations and cost-saving in mind all systems are manufactured to comply with International standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-category product-background mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products ">
                        <h2 class="mb-2">Steel Surface Cable Trunking</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <div class="query-button">
                            <a onclick="DimModalOpen(), BimDetails('Steel Surface Cable Trunking')" class="btn btn-primary">Ask for File</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-category-para">
                        <p>Steel Surface Cable Trunking and fittings are designed and manufactured to comply with BS 4678:Part 1. Trunking is manufactured in single or multi-compartment versions of 2.44 and 3 meter lengths. The smooth return edges increase strength and rigidity and the trunking is supplied with lid, coupler and screws.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-category mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products ">
                        <h2 class="mb-2">Cable Ladder and accessories</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <div class="query-button">
                            <a onclick="DimModalOpen(),BimDetails('Cable Ladder and accessories')" class="btn btn-primary">Ask for File</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-category-para">
                        <p>Metal cable ladders and fittings are designed to accommodate heavy duty power distribution cables within industrial buildings. The system has high load carrying capabilities, is simple to install and is available with a full range of accessories.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-category product-background mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products">
                        <h2 class="mb-2">Channel Systems and accessories</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <div class="query-button">
                            <a onclick="DimModalOpen(),BimDetails('Channel Systems and accessories')" class="btn btn-primary">Ask for File</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-category-para">
                        <p>Metal cable channels and fittings are designed to hold a maximum load. Metal Channels and concrete inserts can be manufactured to client specification and are available in 2.9 metre, 3 metre and 6 metre lengths. Support systems include cantilever arms, support brackets and base post supports respectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- The Modal -->
    <div id="BimModal" class="modal ">
        <!-- Modal content -->
        <div class="modal-content-custom">
            <span id="BimClose" class="close">&times;</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <section>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-8">
                                        <form class="mt-5" method="POST" id="bimForm">

                                            <div class="row">
                                                <div class="col-md-3 pdr-0">
                                                    <label class="float-left" for="Name">Name*</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-3 pdr-0">
                                                    <label class="float-left" for="Name">Profession</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="profession" placeholder="Tell us what you do" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-3 pdr-0">
                                                    <label class="float-left" for="Name">Email*</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="email" placeholder="Your email so that we can contact you" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-3 pdr-0">
                                                    <label class="float-left" for="Name">Bim File</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <!-- <input type="text" width="70%"  class="form-control" placeholder="Products" /> -->
                                                        <textarea id="bimProducts" style="width: 100%;" name="BimList" rows="2" cols="30" required>  </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-3 pdr-0">
                                                    <label class="float-left" for="Name">Choose Bim File*</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="">Cable Tray and accessories</label>
                                                        <input type="checkbox" onclick="BimDetails('Cable Tray and accessories')">
                                                        <label for="">Steel Surface Cable Trunking</label>
                                                        <input type="checkbox" onclick="BimDetails('Steel Surface Cable Trunking')">
                                                        <label for="">Cable Ladder Systems</label>
                                                        <input type="checkbox" onclick="BimDetails('Cable Ladder Systems')">
                                                        <label for="">Cable Ladder and accessories</label>
                                                        <input type="checkbox" onclick="BimDetails('Cable Ladder and accessories')">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-3 pdr-0">
                                                    <label class="float-left" for="Name">phone*</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" width="70%" name="phone" class="form-control" placeholder="Enter Phone Number" required />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mt-2 ">
                                                <div class="col-md-3 pdr-0">
                                                    <label class="float-left" for="Name">Enquiry</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <textarea id="bimProducts" cols="30" name="enquery" rows="3" class="form-control" placeholder="Drop a line or two about yourself" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group text-center mt-5">
                                                        <input type="submit" value="SUBMIT" class="btn btn-primary py-3 px-5" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cta">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h3 class="ftco-animate">Call us or drop a line to get a quote or to know more about our products.
                    </h3>
                    <ul class="cta-list ftco-animate">
                        <li>
                            <a href="tel:+97167406689" class="cta-item-white">
                                <span class="ico-wrap">
                                    <!-- <i data-feather="phone"></i> -->
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                                <span class="txt">+971 6 542 6036</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:letstalk@titanuae.com" class="cta-item-primary">
                                <span class="ico-wrap">
                                    <!-- <i data-feather="mail"></i> -->
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                                <span class="txt">letstalk@titanuae.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <?php include 'foot.php'; ?>
    <?php include 'scripts.php'; ?>


    <script>
        var BimModal = document.getElementById("BimModal");
        var BimClose = document.getElementById("BimClose");
        //Bim Modal open function

        function DimModalOpen() {
            BimModal.style.display = "block";
        }



        BimClose.onclick = function() {
            BimModal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == BimModal) {
                BimModal.style.display = "none";
            }
        }


        //adding products to bim

        var bimArray = [];

        function BimDetails(data) {

            console.log("Bim tesing", bimArray);
            bimArray.push(data)
            //console.log(productArray)
            document.getElementById("bimProducts").value = bimArray;
        }


        // Bim Form        

        $('body').on('submit', '#bimForm', function(e) {
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
                url: 'bimMail.php',
                data: $(this).serialize(),
                global: true,
                success: function(data) {
                    // $('#contact_loader').fadeOut(200);
                    //$("#contactForm").hide(200);
                    // $('#contact_success_msg').fadeIn(200);
                    // setTimeout(function() {
                    //     $('#contact_success_msg').fadeOut(400);
                    // }, 4300);
                    var BimModal = document.getElementById("BimModal");

                    BimModal.style.display = "none";

                    swal("Thank you!", "We will get back to you soon!")
                    //reset form
                    $("#bimForm")[0].reset();
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