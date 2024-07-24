<?php
include 'head.php';

// session_start();                                        //start new or resume existing session    

// $_SESSION['token']        = bin2hex(random_bytes(32));  //Generate CSRF-TOKEN
// $_SESSION['token-expire'] = time() + 3600;              //1 hour = 3600 secs  
// 
?>

<body>
    <?php include 'nav.php'; ?>
    <section class="hero-wrap hero-wrap-2 degree-right ftco-no-slant solutions-banner" style="background-image: url('images/solutions-banner.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end">
				<div class="col-md-9 ftco-animate pb-5 mb-5">
					<p class="breadcrumbs">
						<span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span>
						<span>Our Products</span>
					</p>
					<h1 class="mb-3 bread">Our Products</h1>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section ftco-4 ftco-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ftco-animate heading-section-products">
                    <h2 class="mb-2">Titan Industries e-Catalogue</h2>
                    <!-- <p>Fusce congue odio ut lorem posuere, at mattis dolor auctor. Suspendisse potenti. Quisque ac felis ac magna gravida finibus. </p> -->
                    <div class="product-list">
                        <ul>
                            <li><img src="images/listimage.png" alt=""> Cable Tray Systems</li>
                            <li> <img src="images/listimage.png" alt="">Cable Trunking Systems</li>
                            <li> <img src="images/listimage.png" alt="">Cable Ladder Systems</li>
                            <li> <img src="images/listimage.png" alt="">Channel Support Systems</li>
                            <li> <img src="images/listimage.png" alt="">Pipe Clamping Systems</li>
                            <li> <img src="images/listimage.png" alt="">Finishes for Cable Management Systems</li>
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


    <section class="product-category" id="CableTraySystems">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products ftco-animate">
                        <h2 class="mb-2">Cable Tray Systems</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <img onclick=" SliderOne()" src="images/arrow.png" id="arrow-up" alt="" style="display: none;"></button>
                        <img onclick=" SliderOne()" src="images/down_arrow.png" id="arrow-down" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="accordian-image">
                        <img src="./images/Cable Tray Systems/C-Profile Flange Type.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-md-8 accordian-image-section">
                    <div class="product-category-para">
                        <p>A comprehensive range of steel and aluminium
                            cable trays and accessories suitable for a variety
                            of industrial and commercial cable support
                            requirements. With speed of installations and cost-saving in mind all systems are manufactured
                            to comply with International standards.</p>
                    </div>
                </div>
            </div>

            <div class="row" id="catogery" style="display: none;">
                <div class="col-md-12 ">
                    <div class=" heading-section heading-para ftco-animate">
                        <p>Perforated Cable Tray</p>
                    </div>
                    <div class="row align-items-center justify-content-center " style="background-color:#ECF0F0;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Cable Tray Design
                                <span class="badge">12</span>
                            </h2>
                            <div class="query-button">
                                <a onclick="ModalOpen()" class="btn btn-primary">Ask for a Quote</a>
                                <a href="./specification.php" class="btn btn-primary mx-4">Dimension</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Return Flange Type.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Return Flange Type</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Return Flange Type')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Outside Return Flange Type.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Outside Return Flange Type</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('Outside Return Flange Type')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3 col-sm-6 col-12 mt-4 ">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/C-Profile Flange Type.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">C-profile Flange Type</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('C-profile Flange Type')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Straight Type.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Straight Type</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Straight Type')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Perforated Return Flange Cable Tray-1.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Perforated Return <br> Flange Cable Tray-1</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('Perforated Return Flange Cable Tray-1')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Perforated Return Flange Cable Tray-2.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Perforated Return <br> Flange Cable Tray-2</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('Perforated Return Flange Cable Tray-2')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3 col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Straight Coupler.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Straight Coupler</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Straight Coupler')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Wrap Over Coupler.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Wrap Over Coupler</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Wrap Over Coupler')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Closed Cable Tray Cover.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Closed Cable Tray <br> Cover</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('Closed Cable Tray Cover')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3 col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Ventilated Cable Tray Cover.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Ventilated Cable Tray Cover</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('Ventilated Cable Tray Cover')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Push Type Closed Cover Clip.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Push Type Closed Cover Clip</h5>
                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('Push Type Closed Cover Clip')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3 col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Systems/Ventilated Screw Type Cover Clip.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Ventilated Screw Type Cover Clip</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('Ventilated Screw Type Cover Clip')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 mt-5">
                    <div class="row align-items-center justify-content-center " style="background-color:#ECF0F0;padding:1rem">
                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Cable Tray Angular Accessories <span class="badge">14</span></h2>
                            <div class="query-button">
                                <a onclick="ModalOpen()" class="btn btn-primary">Ask for a Quote</a>
                                <!-- <a href="./specification-cable-trunking.php" class="btn btn-primary mx-4">Dimension</a> -->
                                <a onclick="DimModalOpenCableTrayAngular()" class="btn btn-primary mx-4">Dimension</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/90 Degree Flat Bend.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">90 Degree Flat Bend</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-1</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('90 Degree Flat Bend')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/45 Degree Bend.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">45 Degree Bend</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-2</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('45 Degree Bend')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/90 Degree Inside Riser.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">90 Degree Inside Riser</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-3</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('90 Degree Inside Riser')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/90 Degree Outside Riser.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">90 Degree Outside Riser</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-4</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('90 Degree Outside Riser')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Equal Tee.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Equal Tee</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-5</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Equal Tee')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Equal Cross.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Equal Cross</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-6</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Equal Cross')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Straight Reducer.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Straight Reducer</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-7</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Straight Reducer')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Right Reducer.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Right Reducer</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-8</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Right Reducer')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Left Reducer.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Left Reducer</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-9</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Left Reducer')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/End Cap.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">End Cap</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-10</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('End Cap')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Fish Plate.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Fish Plate</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-11</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Fish Plate')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Earth Braid.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Earth Braid</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-12</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Earth Braid')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Drop Out.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Drop Out</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-13</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Drop Out')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Cable Tray Angular Accessories/Tray Divider.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Tray Divider</h5>
                                    <h6 class="card-title">Code: TCM/R/AT-14</h6>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Tray Divider')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-category product-background" id="CableTrunkingSystems">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products ">
                        <h2 class="mb-2">Steel Surface Cable Trunking</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <img onclick=" SliderTwo()" src="images/down_arrow.png" id="arrow-drop" alt=""></button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 ">
                    <div class="accordian-image">
                        <img src="./images/Steel Surface Cable Trunking/45 Degree Inside Open Bend.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-md-8 accordian-image-section">
                    <div class="product-category-para">
                        <p>Steel Surface Cable Trunking and fittings are designed and
                            manufactured to comply with BS 4678:Part 1. Trunking is
                            manufactured in single or multi-compartment versions of
                            2.44 and 3 meter lengths. The smooth return edges
                            increase strength and rigidity and the trunking is supplied
                            with lid, coupler and screws.</p>
                    </div>
                </div>
            </div>

            <div class="row" id="catogeryOne" style="display: none;">

                <div class="col-md-12 mt-5">
                    <div class="row align-items-center justify-content-center " style="background-color:#ECF0F0;padding:1rem">
                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Cable Trunking <span class="badge">3</span></h2>
                            <div class="query-button">
                                <a onclick="ModalOpen()" class="btn btn-primary">Ask for a Quote</a>
                                <a href="./specification-cable-trunking.php" class="btn btn-primary mx-4">Dimension</a>
                                <!-- <a onclick="DimModalAngularAccessoriesOpen()" class="btn btn-primary mx-4">Dimension</a> -->
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Single Compartment.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Single Compartment</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Single Compartment')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Double Compartment.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Double Compartment</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Double Compartment')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Triple Compartement.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Triple Compartement</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Triple Compartement')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class=" heading-section heading-para ftco-animate">
                        <!-- <p>Perforated Cable Tray</p> -->
                    </div>
                    <div class="row align-items-center justify-content-center " style="background-color:#ECF0F0;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Cable Trunking Angular Accessories <span class="badge">20</span></h2>
                            <div class="query-button">
                                <a onclick="ModalOpen()" class="btn btn-primary">Ask for a Quote</a>
                                <a onclick="DimModalOpen()" class="btn btn-primary mx-4">Dimension</a>
                            </div>
                        </div>



                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/45 Degree Inside Open Bend.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">45 Degree Inside Open Bend</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('45 Degree Inside Open Bend')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/45 Degree Out Side Open Bend.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">45 Degree Out Side Open Bend</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('45 Degree Out Side Open Bend')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/90 Degree Inside Open Bend.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">90 Degree Inside Open Bend</h5>

                                    <input style="float: right;margin-top: -30px;" type="checkbox" onclick="ProductDetails('90 Degree Inside Open Bend')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Cable Retainer.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Cable Retainer</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Cable Retainer')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Earth Link.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Earth Link</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Earth Link')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Equal Cross.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Equal Cross</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Equal Cross')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Hanger Bracket.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Hanger Bracket</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Hanger Bracket')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Horizontal Offset.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Horizontal Offset</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Horizontal Offset')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Joint Coupler.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Joint Coupler</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Joint Coupler')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Pin Rack.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Pin Rack</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Pin Rack')">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Reducer.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Reducer</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Reducer')">
                                </div>
                            </div>
                        </div>





                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Tee Inside Open Band.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Tee Inside Open Band</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Tee Inside Open Band')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Tee Outside Open Band.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Tee Outside Open Band</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Tee Outside Open Band')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Tee Top Open Bend.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Tee Top Open Bend</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Tee Top Open Bend')">
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Trunking Divider.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Trunking Divider</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Trunking Divider')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Surface Cable Trunking/Vertical Offset.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Vertical Offset</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Vertical Offset')">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="product-category" id="CableLadderSystems">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products ">
                        <h2 class="mb-2">Steel Cable Ladder</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <img onclick="SliderThree()" src="images/down_arrow.png" id="arrow-drop" alt=""></button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="accordian-image">
                        <img src="./images/Steel Cable Ladder/TCM_NT.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-md-8 accordian-image-section">
                    <div class="product-category-para">
                        <p>Metal cable ladders and fittings are designed to accommodate heavy
                            duty power distribution cables within industrial buildings. The system
                            has high load carrying capabilities, is simple to install and is available
                            with a full range of accessories.</p>
                    </div>
                </div>
                </divv>

                <div class="row" id="catogeryThree" style="display: none;">
                    <div class="col-md-12 ">
                        <div class=" heading-section heading-para ftco-animate">
                            <!-- <p>Perforated Cable Tray</p> -->
                        </div>
                        <div class="row align-items-center justify-content-center  mb-5" style="background-color:#ECF0F0;padding:1rem">

                            <div class="col-md-12">
                                <h2 class="product-sub-section-heading mt-3"> Cable Ladder Design <span class="badge">4</span></h2>
                                <div class="query-button">
                                    <a onclick="ModalOpen()" class="btn btn-primary">Ask for a Quote</a>
                                </div>
                            </div>


                            <!-- <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Steel Cable Ladder/Cable Ladder.png" alt="Card image cap">
                                <div class="card-body">
                                    
                                    <h5 class="card-title">Cable Ladder</h5>
                                   
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Cable Ladder')">
                                </div>
                            </div>
                        </div> -->
                            <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                                <div class="card">
                                    <img class="card-img-top" src="./images/Steel Cable Ladder/TCM_NT.png" alt="Card image cap">
                                    <div class="card-body">

                                        <h5 class="card-title">TCM_NT</h5>

                                        <input style="float: right;" type="checkbox" onclick="ProductDetails('TCM_NT')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                                <div class="card">
                                    <img class="card-img-top" src="./images/Steel Cable Ladder/TCM_OT.png" alt="Card image cap">
                                    <div class="card-body">

                                        <h5 class="card-title">TCM_OT2</h5>

                                        <input style="float: right;" type="checkbox" onclick="ProductDetails('TCM_OT2')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                                <div class="card">
                                    <img class="card-img-top" src="./images/Steel Cable Ladder/TCM_XT.png" alt="Card image cap">
                                    <div class="card-body">

                                        <h5 class="card-title">TCM_XT</h5>

                                        <input style="float: right;" type="checkbox" onclick="ProductDetails('TCM_XT')">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                                <div class="card">
                                    <img class="card-img-top" src="./images/Steel Cable Ladder/TCM_ZT.png" alt="Card image cap">
                                    <div class="card-body">

                                        <h5 class="card-title">TCM_ZT</h5>

                                        <input style="float: right;" type="checkbox" onclick="ProductDetails('TCM_ZT')">
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>
            </div>
    </section>

    <section class="product-category product-background" id="ChannelSupportSystems">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products">
                        <h2 class="mb-2">Metal Cable Channels</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <img onclick="SliderFour()" src="images/down_arrow.png" id="arrow-drop" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="accordian-image">
                        <img src="images/Metal Cable Channels/Plain Channel.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-md-8 accoridan-image-section">
                    <div class="product-category-para">
                        <p>Metal cable channels and fittings are designed to hold a maximum
                            load. Metal Channels and concrete inserts can be manufactured to
                            client specification and are available in 2.9 metre, 3 metre and 6 metre
                            lengths. Support systems include cantilever arms, support brackets
                            and base post supports respectively.</p>
                    </div>
                </div>
            </div>

            <div class="row" id="catogeryFour" style="display: none;">
                <div class="col-md-12 ">
                    <div class=" heading-section heading-para ftco-animate">
                        <!-- <p>Perforated Cable Tray</p> -->
                    </div>
                    <div class="row align-items-center justify-content-center " style="background-color:#ECF0F0;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Type of Channel <span class="badge">11</span></h2>
                            <div class="query-button">
                                <a onclick="ModalOpen()" class="btn btn-primary">Ask for a Quote</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/Plain Channel.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Plain Channel</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Plain Channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/Slotted Channel.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Slotted Channel</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Slotted Channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/Back to Back Channel.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Back to Back channel</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Back to Back channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/Concrete Insert Channel.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Concrete Insert Channel</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Concrete Insert Channel')">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/41x21 Plain Channel.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">41x21 Plain Channel</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('41x21 Plain Channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels//41x21 Slotted Channel.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">41x21 Slotted Channel</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('41x21 Slotted Channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/41x42 back to back channel.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">41x42 back to back channel</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('41x42 back to back channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/41x41 Plain Channel.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">41x41 Plain Channel</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('41x41 Plain Channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/41x41 Slotted Channel.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">41x41 Slotted Channel</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('41x41 Slotted Channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/41x82 Back to Back Channel.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">41x82 Back to Back Channel</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('41x82 Back to Back Channel')">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="images/Metal Cable Channels/Threaded Rod.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Threaded Rod</h5>
                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Threaded Rod')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-category" id="PipeClampingSystems">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products">
                        <h2 class="mb-2">Pipe Clamps</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <img onclick="SliderFive()" src="images/down_arrow.png" id="arrow-drop" alt=""></button>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="accordian-image">
                        <img src="./images/Pipe Clamps/Pipe Clamps-01.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-md-8 accordian-image-section">
                    <div class="product-category-para">
                        <p>The Pipe Clamps manufactured by Titan Industries are suitable for the fixing of light to heavy channel system and to support a wide variety of pipe sizes.</p>
                    </div>
                </div>
            </div>

            <div class="row" id="catogeryFive" style="display: none;">
                <div class="col-md-12 ">
                    <div class=" heading-section heading-para ftco-animate">
                        <!-- <p>Perforated Cable Tray</p> -->
                    </div>
                    <div class="row align-items-center justify-content-center " style="background-color:#ECF0F0;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3"> </h2>
                            <div class="query-button mt-5">
                                <a href="#" class="btn btn-primary">Ask for a Quote</a>
                                <a onclick="DimModalPipeClambsOpen()" class="btn btn-primary mx-4">Dimension</a>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-3  col-sm-6 col-12 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/Pipe Clamps/Pipe Clamps-01.png" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Pipe Clamps-01</h5>

                                    <input style="float: right;" type="checkbox" onclick="ProductDetails('Pipe Clamps-01')">
                                </div>
                            </div>
                        </div>

                    </div>


                </div>


            </div>
    </section>


    <section class="product-category product-background mt-5 " id="FinishesforCableManagementSystems">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="heading-section-products">
                        <h2 class="mb-2">Finishes for Cable Management Systems</h2>
                    </div>
                    <div class="heading-section-category text-right">
                        <img onclick="SliderSix()" src="images/down_arrow.png" id="arrow-drop" alt=""></button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-category-para">
                        <p>Our products are available in the following finishes: Pre-Galvanized Steel (PG), Hot Dip Galvanized Steel (HDG), Stainless Steel (SS) and Epoxy Powder Coating.</p>
                    </div>
                </div>
            </div>

            <div class="row" id="catogerySix" style="display: none;">
                <div class="col-md-12 ">
                    <div class=" heading-section heading-para ftco-animate">
                        <!-- <p>Perforated Cable Tray</p> -->
                    </div>
                    <div class="row align-items-center justify-content-center " style="background-color:#ffff;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Pre-Galvanized Steel (PG)</h2>
                        </div>

                        <div class="col-md-12  mt-4">
                            <strong>Pre-Galvanized (PG) steel has an economic and effective
                                anti-corrosion finish that is highly suitable for interior
                                applications in conditions of low corrosive atmosphere
                                and humidity.</strong>

                            <p class="mt-2">Mild steel is treated in an uninterrupted operation
                                while it is still in the coil form to clean the steel and
                                passed through a bath of molten zinc to form a
                                Zinc/Iron alloy. As the steel is cooled, a coating of pure
                                zinc will form on the steel and its then re coiled. It is
                                then cut to length and formed with the advantage of
                                the steel already being galvanized. The Zinc will be able
                                to offer an electro-chemical protection even at
                                unprotected edges which is why the coating is not
                                allowed to become thick due to the chance of splitting
                                during the forming process. </p>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center mt-3" style="background-color:#ffff;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Hot Dip Galvanized Steel (HDG)</h2>
                        </div>


                        <div class="col-md-12  mt-4">
                            <strong>Pre-Galvanized (PG) steel has an economic and effective
                                anti-corrosion finish that is highly suitable for interior
                                applications in conditions of low corrosive atmosphere
                                and humidity.</strong>
                            <p class="mt-2">After the forming, manufacturing and finally cleaning
                                process of the product in mild steel is completed, the final
                                product will be submerged in a bath of molten zinc hence
                                making sure that the whole product is coated with a thick
                                layer of zinc. Due to this process, products with a HDG
                                finish will have a thicker coating of zinc as opposed to the
                                PG finish. Surface distortion and coarseness will be
                                evident but it does not hamper the technical qualities of
                                the product in any manner as it is just a byproduct of the
                                hot working process.</p>
                        </div>
                    </div>


                    <div class="row align-items-center justify-content-center mt-3" style="background-color:#ffff;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Stainless Steel (SS)</h2>
                        </div>


                        <div class="col-md-12  mt-4">
                            <strong>Pre-Galvanized (PG) steel has an economic and effective
                                anti-corrosion finish that is highly suitable for interior
                                applications in conditions of low corrosive atmosphere
                                and humidity.</strong>
                            <p class="mt-2">Stainless Steel contains an alloy of iron with varying
                                levels of other elements such as Chromium, Carbon, and
                                Nickel etc. which prevents corrosion of the surface by
                                forming a thin layer of oxide on the surface and thus
                                reducing the rate at which iron will oxidize. Stain-less
                                steel should not be misunderstood for stain-impossible
                                as pollutants and chemicals will eventually stain the
                                surface but it will not deteriorate the strength of the
                                steel. In more aggressive conditions, the basic type of
                                stainless steel may corrode. In such cases, stainless steel
                                that are highly alloyed can be used.</p>
                        </div>
                    </div>


                    <div class="row align-items-center justify-content-center mt-3" style="background-color:#ffff;padding:1rem">

                        <div class="col-md-12">
                            <h2 class="product-sub-section-heading mt-3">Epoxy Powder Coating</h2>
                        </div>

                        <div class="col-md-12  mt-4">
                            <strong>Pre-Galvanized (PG) steel has an economic and effective
                                anti-corrosion finish that is highly suitable for interior
                                applications in conditions of low corrosive atmosphere
                                and humidity.</strong>

                            <p class="mt-2">These coatings are primarily used for aesthetic requirements
                                and is particularly useful to identify the type of cabling running
                                through the different types of cable management. They are
                                available in a variety of colours and can be standardized in a
                                project by using the RAL codes to identify the different types
                                of colours required thus enhancing the architectural
                                requirements.</p>
                        </div>
                    </div>

                </div>

            </div>
    </section>

    <div class="col-md-12">
        <div class="s-msg" id="contact_success_msg" style="display: none;">
            <p>Information you shared was successfully submitted. Thank you, we'll get back to you soon!</p>
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


    <script type="text/javascript">

    </script>
    <?php include 'diamensions.php'; ?>
    <?php include 'foot.php'; ?>
    <?php include 'scripts.php'; ?>
</body>