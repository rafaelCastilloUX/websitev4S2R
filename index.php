<?php include('templates/header.php'); ?>
    <main>
      <!--hero-->
      <section class="Hero bg-navy hero-home pb-5" >              
            <div class="container-fluid overflow-hidden ">
              <div class="row " data-aos="fade-in" data-aos-anchor-placement="top" data-aos-delay="300">
                <div class="col-12  align-self-lg-end pt-5 px-lg-5 align-items-end">
                    <div class="container-fluid">
                        <div class="row py-3 py-sm-5 py-xl-9 pd-lg-5 mt-lg-10 justify-content-sm-center text-center">
                          <div class="col-12 col-sm-10 position-relative" id="leadForm">
                            <div class="rotating-text-wrapper display-4 fw-bold mt-4 text-white">
                              <p class="mb-0">How homeowners facing</p>
                              <div class="words text-verde">
                                <span class="">Debt</span>
                                <span class="">Divorce</span>
                                <span class="">Foreclosure</span>
                                <span class="">Retirement</span>
                                <!--<span class="">Medical Bills</span>-->
                                <span class="">Debt</span>
                              </div><!--/words-->
                              <p>access their equity.</p>
                            </div> 
                            <div class="row">
                              <div class="col-12">
                                <p class="fs-5 mb-5 text-white fw-semibold">Let us find the ideal investor for your home. <br> <span class="text-verde">Start Now </span> by entering your address!</p>
                              </div>
                            </div><!--/.row--> 
                            <div class="row my-sm-2 my-xxl-4 px-xl-5" style="display: contents;">
                              <div class="col-12 col-lg-8 offset-lg-2 pb-4 pb-md-0">
                                  <form  class="row row-cols-lg-auto g-2 align-items-center overflow-hidden rounded-1 p-2 bg-white">
                                      <div class="col-12 col-lg-7 col-xl-8 p-2 mt-0">
                                        <!-- <label class="visually-hidden" for="inlineFormInputemail">email</label> -->
                                        <!-- <input type="text" class="form-control form-control-lg border-0" id="inlineFormInputemail" placeholder="Enter your address" required> -->
                                        <?php include('templates/batchdata-input.php'); ?>
                                      </div>
                                      <div class="col-12 col-lg-5 col-xl-4  mt-0 ">
                                        <button disabled id="get-started-button" onclick="goToForms()" type="button" class="btn btn-verde btn-lg w-100 fw-bold py-3 fs-5">GET STARTED <i class="fa-solid fa-chevron-right"></i></button>
                                      </div>
                                    </form>
                              </div><!--/col-->
                            </div><!--/.row-->
                            
                          </div>
                        </div><!--/.row-->
                    </div><!--/.container-fluid -->
                </div><!--/col-lg-7 -->
              </div><!--/row-->              
            </div><!--/container-->
            <div class="position-absolute bottom-0 w-100 overflow-hidden d-none d-sm-block">
              <div class="ticker-container bg-navy">
                <div class="ticker">  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter. | </div>
                <div class="ticker">  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter. | </div>
              </div><!--/ticker-container-->
            </div><!--/band tricker -->          
        </section><!--/.Hero-->
        <section class="Info py-2" >          
          <div class="container">
            <div class="row g-4 py-5 px-4 row-cols-1 row-cols-lg-3">
              <div class="col d-flex align-items-center"  data-aos="fade-in" data-aos-delay="300">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="img/icons/icon_house-find-blue.svg" alt="Properties Check">
                </div>
                <div>
                  <h4 class="fw-bold">Property <br> Check</h4>
                  <p class="mb-0">Single-family homes, townhouses, or Condos under $1MM, built after 1900, with lots under 1 acre.</p>
                </div>
              </div><!--/.col-->
              <div class="col d-flex align-items-center"  data-aos="fade-in" data-aos-delay="300">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="img/icons/icon_changes-rounded-blue.svg" alt="Tailored for Life's Changes">
                </div>
                <div>
                  <h4 class="fw-bold">Tailored for <br> Life's Changes</h4>
                  <p class="mb-0">Life is a roller coaster. We'll help you ease financial strains, retire comfortably, stay in place.</p>
                  
                </div>
              </div><!--/.col-->
              <div class="col d-flex align-items-center"  data-aos="fade-in" data-aos-delay="300">
                <div class="icon-square text-body-emphasis -inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="img/icons/icon_unlock-fill-blue.svg" alt="unlock Your Home's Equity">
                </div>
                <div>
                  <h4 class="fw-bold">Unlock Your Home's Equity</h4>
                  <p class="mb-0">Access your property's equity with a minimum requirement of 20% (Home Value - Mortgage).</p>
                  
                </div>
              </div><!--/.col-->
            </div><!--/.row-->            
          </div><!--/.container-fluid-->
          
        </section><!--/.info-->
        <section class="match">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-lg-6" data-aos="fade-left" data-aos-anchor-placement="top" data-aos-delay="300">
                <div class="mano-phone w-100">
                </div><!--/mano-phone-->
 
              </div><!--/.col-->
              <div class="col-sm-12 col-lg-6 pt-5" data-aos="fade-right" data-aos-anchor-placement="top" data-aos-delay="500">
                <div class="bg-dark py-5 matchDark">
                  <div class="cta-form-container m-5 pb-3 text-center text-white">
                    <div class="heading position-relative">
                      <h2 class="textFrame rotate3 fw-semibold bg-verde position-absolute z-2">Is Your Home</h2>
                      <h2 class="textFrame bg-white position-relative z-1" style="left:-1.5em; bottom:-1.5em">A <span class="fw-semibold">Match?</span></h2>
                    </div><!--/heading-->
                  </div><!--/cta-form-container-->
                  <form id="simulator-form">
                    <?php include('templates/simulator-form/step1.php'); ?>
                    <?php include('templates/simulator-form/step2.php'); ?>                 
                    <?php include('templates/simulator-form/step3.php'); ?>
                    <?php include('templates/simulator-form/step4.php'); ?>
                  </form>  
                  <!--/preqForm-->
                </div><!--/bg-dark-->
                  </div><!--/cta-form-container--> 
              </div><!--/.col-->
            </div>
          </div>
        </section><!--/.match-->                
        <section class=" mt-5 pt-4" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 21.35%, rgba(227, 227, 227, 0.67) 100%);">
          <div class="container">
            <div class="row" data-aos="fade-in" data-aos-delay="300">
              <div class="col">
                <div class="hgroup text-center">
                  <h4 class="fw-semibold text-azul mb-0">Discover the</h4>
                  <h2 class="fw-bold display-3 d-inline-block lh-1"> <span class="text-azul">Sell</span><span class="text-verde">2</span><span class="text-azul">Rent</span></h2>
                  <h2 class="fw-semibold display-3 d-inline-block lh-1"> Advantage</h2>
                </div><!--Headingroup-->
              </div><!--/.col-->
            </div><!--/.row-->
            <div class="row "  data-aos="fade-in" data-aos-delay="300">
              <div class="col ">
                <div class="container-fluid p-5 riplecircle-bg">
                  <div class="row align-items-center">
                    <div class="col-12 col-lg-3 offset-lg-2 flex flex-row align-items-start p-2 ">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_mapmarker-blue.svg" alt="Nationwide Icon" width="40" class="icon-verde">
                        <h5 class="fw-bold">Nationwide support, always here</h5>
                      </div><!---->
                      <div><!--/.flex-row-->
                        <p>From coast to coast, we are by your side. Coverage in all 50 states means we're your national family.</p>                        
                      </div><!---->
                    </div><!--/.col-->
                    <div class="col-sm-12 col-lg-3  offset-lg-2 flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_users-blue.svg" alt="Users Icon" width="40" class="icon-verde">
                        <h5 class="fw-bold">Maximize options, multiple choices</h5>
                      </div><!---->
                      <div><!--/.flex-row-->
                        <p>Take control with Sell2Rent. Explore tailored competitive offers designed to boost your sale price and expand your possibilities.</p>                        
                      </div><!---->
                    </div><!--/.col-->

                    <div class="col-12 col-lg-3 flex flex-row align-items-start p-2 ">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_privacy-tip-blue.svg" alt="Networks Icon" width="40" class="icon-verde">
                        <h5 class="fw-bold">Your privacy, <br> our priority</h5>
                      </div><!---->
                      <div><!--/.flex-row-->
                        <p>Relax knowing your privacy is paramount with Sell2Rent. No open houses, just a confidential journey for your peace of mind.</p>                        
                      </div><!---->
                    </div><!--/.col-->
                    <div class="col-12 col-lg-6 flex flex-row align-items-start p-2 position-relative ">
                      <img src="img/MapDark.svg" alt="Map" class="img-fluid mapa-users start-0">
                    </div><!--/.col-->
                    <div class="col flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_note-check-blue.svg" alt="Check Icon" width="40" class="icon-verde">
                        <h5 class="fw-bold">Valuations <br> made clear</h5>
                      </div><!---->
                      <div><!--/.flex-row-->
                        <p>Clarity is key. Our valuation process considers trends and risks, delivering practical valuations with transparent explanations.</p>                        
                      </div><!---->
                    </div><!--/.col--> 

                    <div class="col-12 col-lg-3 offset-lg-2 flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_money-off-blue.svg" alt="Budget Icon" width="40" class="icon-verde">
                        <h5 class="fw-bold">Budget-Friendly, <br> no surprises</h5>
                      </div><!---->
                      <div><!--/.flex-row-->
                        <p>Your financial well-being matters at Sell2Rent. No upfront costs ensure a stress-free path forward.</p>                        
                      </div><!---->
                    </div><!--/.col-->
                    <div class="col-12 col-lg-3 offset-lg-2 flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_real-estate-blue.svg" alt="Real Estate Icon" width="40" class="icon-verde">
                        <h5 class="fw-bold">Flexibility to achieve your goals</h5>
                      </div><!---->
                      <div><!--/.flex-row-->
                        <p>Customized leaseback options with Sell2Rent. Your comfort is our priority, giving you the flexibility you need.</p>                        
                      </div><!---->
                    </div><!--/.col-->
                  </div><!--/.row-->
                </div><!--/.what to expect -->
              </div><!--/col-->
            </div><!--/.row-->
          </div><!--/.container-->
        </section><!--/.map-->
        <section class="our-program" style="background-color: #ededed;">
          <div class="upper-section">
            <nav class="mt-0">
              <div class="nav nav-tabs justify-content-center gap-3" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-stay-tab" data-bs-toggle="tab" data-bs-target="#nav-stay" type="button" role="tab" aria-controls="nav-home" aria-selected="true"> Sell & Stay </button>
                <!-- <button class="nav-link" id="nav-move-out-tab" data-bs-toggle="tab" data-bs-target="#nav-move-out" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> Sell & Move Out </button>-->
              </div>
            </nav>
          </div><!--/upper-->
          <div class="down-section bg-dark">
            <div class="container">
              <div class="tab-content text-white p-xl-5 rounded-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-stay" role="tabpanel" aria-labelledby="nav-stay-tab" tabindex="0">
                  <div class="container">
                    <div class="row" data-aos="fade-in">
                      <div class="col-12 col-md-10 offset-md-1">
                        <div class="hgroup text-center">
                          <h4 class="fw-bold text-white mb-0">Our Programs</h4>
                          <h2 class="fw-semibold display-4">For <span class="text-verde">homeowners</span>  who <span class="text-verde"> need equity </span>with less headaches</h2>
                        </div><!--Headingroup-->
                      </div><!--/.col-->
                    </div><!--/.row-->
                    <div class="row my-2 row-cols-1 row-cols-lg-2" data-aos="fade-in">
                      <div class="col order-2 order-lg-1">
                        <div class="hgroup text-start p-xl-5">
                          <h2 class="fw-semibold text-white mb-0">Sell and Leaseback</h2>
                          <h2 class="fw-semibold text-verde font-mulish">to continue enjoying your home</h2>
                          <p>Sell your home and rent it back while you get the cash you 
                            need to move forward. We'll match you with home buying
                            investors for a cash offer and will help manage the details so you can rent with ease.</p>
                        </div><!--Headingroup-->
                      </div><!--/.col-->
                      <div class="col order-1 order-lg-2">
                        <div class="p-0">
                          <img src="img/img_sellALeaseback.png" alt="Sell and Stay" class="img-fluid" style="box-shadow: 15px 13px 44px 0px rgba(30, 147, 255, 0.15), 61px 50px 79px 0px rgba(30, 147, 255, 0.13), 138px 113px 107px 0px rgba(30, 147, 255, 0.08), 246px 200px 127px 0px rgba(30, 147, 255, 0.02), 384px 313px 139px 0px rgba(30, 147, 255, 0.00);">
                        </div>
                      </div><!--/.col-->
                    </div><!--/.row-->
                    <div class="row row-cols-1 row-cols-lg-2">
                      <div class="col p-4" data-aos="fade-in">
                        <div class="hgroup">
                          <h4 class="text-verde fw-semibold">Navigating The Journey</h4>
                          <h2 class="text-white fw-bold">Easy Steps To Follow</h2>
                        </div><!--/hgroup-->
                        <img src="img/img_sellAStay_laptop.png" alt="Sell and Stay" class="img-fluid">
                      </div><!--/col -->
                      <div class="col p-4 overflow-y-auto" style="height: 60vh;margin-top: 5em;">
                        <!-- Section: Timeline -->
                        <section class="py-5">
                          <ul class="timeline-with-icons" data-aos="fade-in-up" data-aos-delay="300">                            
                            <li class="timeline-item mb-5">
                              <div class="d-flex gap-1">
                                <span class="timeline--icon" id="step01">
                                  <span class="timeline-step">STEP</span>
                                  <span class="timeline-number">01</span>
                                </span>
                                <div class="heading ms-1">
                                  <img src="img/journey-step01.svg" alt="Complete the Form and Schedule a Call: " class="img-fluid">
                                </div><!--/in step-->
                              </div><!--/d-flex-->
                              <div class="timeline--card_step bg-light text-body-emphasis">
                                <p class="fs-5 mb-0 mt-2">Fill out the form and schedule a call with our sales team. (We're nice. We promise.)</p>
                              </div><!--/card-step--> 
                            </li><!--/step 1-->
                            <li class="timeline-item mb-5">
                              <div class="d-flex gap-1">
                                <span class="timeline--icon" id="step01">
                                  <span class="timeline-step">STEP</span>
                                  <span class="timeline-number">02</span>
                                </span>
                                <div class="heading ms-1">
                                  <img src="img/journey-step02.svg" alt="Complete the Form and Schedule a Call: " class="img-fluid">
                                </div><!--/in step-->
                              </div><!--/d-flex-->
                              <div class="timeline--card_step bg-light text-body-emphasis">
                                <p class="fs-5 mb-0 mt-2">At the scheduled time, we’ll hop on a meeting together and make progress towards your goals.</p>
                              </div><!--/card-step--> 
                            </li><!--/step 2-->
                            <li class="timeline-item mb-5">
                              <div class="d-flex gap-1">
                                <span class="timeline--icon" id="step01">
                                  <span class="timeline-step">STEP</span>
                                  <span class="timeline-number">03</span>
                                </span>
                                <div class="heading ms-1">
                                  <img src="img/journey-step03.svg" alt="Complete the Form and Schedule a Call: " class="img-fluid">
                                </div><!--/in step-->
                              </div><!--/d-flex-->
                              <div class="timeline--card_step bg-light text-body-emphasis">
                                <p class="fs-5 mb-0 mt-2">Upload the necessary documents, property photos, and a video for assessment. Access the guide here.</p>
                              </div><!--/card-step--> 
                            </li><!--/step 3-->
                            <li class="timeline-item mb-5">
                              <div class="d-flex gap-1">
                                <span class="timeline--icon" id="step01">
                                  <span class="timeline-step">STEP</span>
                                  <span class="timeline-number">04</span>
                                </span>
                                <div class="heading ms-1">
                                  <img src="img/journey-step04.svg" alt="Complete the Form and Schedule a Call: " class="img-fluid">
                                </div><!--/in step-->
                              </div><!--/d-flex-->
                              <div class="timeline--card_step bg-light text-body-emphasis">
                                <p class="fs-5 mb-0 mt-2">Our team assesses your property's value, shares the results with our investor network, and you sign a PSA allowing us to market the property.</p>
                              </div><!--/card-step--> 
                            </li><!--/step 4-->
                            <li class="timeline-item mb-5">
                              <div class="d-flex gap-1">
                                <span class="timeline--icon" id="step01">
                                  <span class="timeline-step">STEP</span>
                                  <span class="timeline-number">05</span>
                                </span>
                                <div class="heading ms-1">
                                  <img src="img/journey-step05.svg" alt="Complete the Form and Schedule a Call: " class="img-fluid">
                                </div><!--/in step-->
                              </div><!--/d-flex-->
                              <div class="timeline--card_step bg-light text-body-emphasis">
                                <p class="fs-5 mb-0 mt-2">We match you with home-buying investors in our national network. (We aim for multiple, competing bids.)</p>
                              </div><!--/card-step--> 
                            </li><!--/step 5-->
                            <li class="timeline-item mb-5">
                              <div class="d-flex gap-1">
                                <span class="timeline--icon" id="step01">
                                  <span class="timeline-step">STEP</span>
                                  <span class="timeline-number">06</span>
                                </span>
                                <div class="heading ms-1">
                                  <img src="img/journey-step06.svg" alt="Complete the Form and Schedule a Call: " class="img-fluid">
                                </div><!--/in step-->
                              </div><!--/d-flex-->
                              <div class="timeline--card_step bg-light text-body-emphasis">
                                <p class="fs-5 mb-0 mt-2">You review one or more cash offers with rental terms to choose and accept your favorite</p>
                              </div><!--/card-step--> 
                            </li><!--/step 6-->
                            <li class="timeline-item mb-5" >
                              <div class="d-flex gap-1">
                                <span class="timeline--icon" id="step01">
                                  <span class="timeline-step">STEP</span>
                                  <span class="timeline-number">07</span>
                                </span>
                                <div class="heading ms-1">
                                  <img src="img/journey-step07.svg" alt="Complete the Form and Schedule a Call: " class="img-fluid">
                                </div><!--/in step-->
                              </div><!--/d-flex-->
                              <div class="timeline--card_step bg-light text-body-emphasis">
                                <p class="fs-5 mb-0 mt-2"> You receive cash at closing, sign a lease agreement, and continue living in the comfort of your own home.</p>
                              </div><!--/card-step--> 
                            </li><!--/step 7--> 
                          </ul>
                        </section>
                        <!-- Section: Timeline -->
                      </div><!--/col-->
                    </div>
                  </div><!--/.container-->
                </div><!--/inner tab Sell and STAY -->
                <div class="tab-pane fade" id="nav-move-out" role="tabpanel" aria-labelledby="nav-move-out-tab" tabindex="0">... Sell and move out content </div>              
              </div>
            </div><!--/container-->
          </div><!--/down-->
        </section><!--/.our program -->
        <section class="our-approach position-relative pb-5">
          <div class="container py-4">
            <div class="row"  data-aos="fade-in" data-aos-delay="300">
              <div class="col">
                <div class="hgroup text-center">
                  <h4 class="fw-bold text-azul mb-0">Our Approach</h4>
                  <h2 class="fw-semibold display-4">Delivering a Smooth Transaction</h2>
                </div><!--Headingroup-->
              </div><!--/col-->
            </div><!--/.row-->
            <div class="row what-not-expect"  data-aos="fade-in-up" data-aos-delay="600">
              <div class="col-12 col-lg-4 order-2 order-lg-1">
                <div class="dettails">
                  <h3 class="fw-bold mb-0">Our Clear Commitments</h3>
                  <p class="mb-0">We value your privacy, will always have the homeowners back, and will work relentlessly to achieve the sellers goals. While we're committed to these, let's openly go over  what we won't DON'T DO.</p>
                  <a href="#" class="btn btn-lg btn-dark fw-bold">GET STARTED <i class="fa-solid fa-chevron-right"></i></a><!--CTA-->
                </div><!--/.details-->
              </div><!--/.col-->
              <div class="col-12 col-lg-8 order-1 order-lg-2">
                <div class="container-fluid">
                  <div class="row row-cols-1 row-cols-lg-2 my-lg-5">
                    <div class="col flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_network.svg" alt="Networks Icon">
                        <h3 class="fw-bold">Linking you to investors</h3>
                      </div>
                      <div>
                        <p>We don't buy properties directly; we create competition by connecting you with investors who make offers for your property.</p>                        
                      </div>
                    </div><!--/.col -->
                    <div class="col flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_home-search.svg" alt="Networks Icon">
                        <h3 class="fw-bold">Precise Property Assessment</h3>
                      </div>
                      <div>
                        <p>We meticulously evaluate your property to ensure the best offers from our investor network.</p>                        
                      </div>
                    </div><!--/.col -->
                    <div class="col flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon-do-not-touch.svg" alt="Networks Icon">
                        <h3 class="fw-bold">No Buy-Back Guarantee</h3>
                      </div>
                      <div>
                        <p>Unfortunately, we do not provide a buy-back option for properties on our platform.</p>                        
                      </div>
                    </div><!--/.col -->
                    <div class="col flex flex-row align-items-start p-2">
                      <div class="flex-row d-flex gap-3 me-3">
                        <img src="img/icons/icon_tag-price.svg" alt="Networks Icon">
                        <h3 class="fw-bold">Your Price, <br>Your Terms</h3>
                      </div>
                      <div>
                        <p>We avoid promising specific sale prices or guaranteed outcomes, prioritizing transparent interactions.</p>                        
                      </div>
                    </div><!--/.col -->
                  </div><!--/.row-->
                </div><!--/.container-->
              </div><!--/.col-->
            </div><!--/.what not expect -->
          </div><!--/.container-->
          <div class="position-absolute bottom-0 w-100 overflow-hidden" style="transform: skewY(-2deg);">
            <div class="ticker-container bg-azul">
              <div class="ticker text-white">  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter. | </div>
              <div class="ticker text-white">  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter.  |  Sell your house, cash out, & stay as a renter. | </div>
            </div><!--/ticker-container-->
          </div><!--/band tricker -->
        </section><!--/ourapproach -->
        <section class="who-benefits py-3">
          <div class="container">
            <div class="row align-items-center"  data-aos="fade-in" data-aos-delay="300">
              <div class="col-sm-12 col-lg-4 offset-lg-1">
                <h2 class="display-5 fw-bold">Who Benefits <br> from <span class="text-azul">Sell</span><span class="text-verde">2</span><span class="text-azul">Rent?</span> </h2>
                <p class="fs-6 fw-medium" >Find out how Sell2Rent empowers homeowners by leveling up the home selling experience.</p>
              </div>
              <div class="col-sm-12 col-lg-6">
                <div id="carouselWhoBenefits" class="carousel slide carousel-dark">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/whobenefits_slide1.png" class="d-block w-100" alt="Caption pendiente ...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/whobenefits_slide2.png" class="d-block w-100" alt="Caption pendiente ...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/whobenefits_slide3.png" class="d-block w-100" alt="Caption pendiente ...">
                    </div>
                  </div>
                  <div class="carousel-controls-s2r">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselWhoBenefits" data-bs-slide="prev">
                      <i class="fa-solid fa-arrow-left icon-arrow"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselWhoBenefits" data-bs-slide="next">
                      <i class="fa-solid fa-arrow-right icon-arrow"></i>
                    </button>
                  </div><!--controls-->
                </div>
              </div><!--/carousel how benefits -->
            </div>
          </div>
        </section><!--/who-benefits-->
        <section class="reels pb-5">
          <div class="container">
            <div class="row" data-aos="fade-in" data-aos-delay="300">
              <div class="col">
                <div class="hgroup text-center">
                  <h4 class="fw-bold text-azul mb-0">Shorts</h4>
                  <h2 class="fw-semibold display-4">Preserving Memories and <br> Unlocking Equity</h2>
                </div><!--Headingroup-->
              </div><!--/col-->
            </div><!--/.row-->
            <div class="row">
              <div class="col">
                <div class="card border-0">
                  <img src="img/reels/demo1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-text fw-bold">Lorem ipsum dolor sit amet consectetur.</h6>
                    <p class="card-text">1 Million Views</p>                    
                  </div>
                </div><!--/card-->
              </div><!--/col-->
              <div class="col">
                <div class="card border-0">
                  <img src="img/reels/demo2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-text fw-bold">Lorem ipsum dolor sit amet consectetur.</h6>
                    <p class="card-text">1 Million Views</p>                    
                  </div>
                </div><!--/card-->
              </div><!--/col-->
              <div class="col">
                <div class="card border-0">
                  <img src="img/reels/demo3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-text fw-bold">Lorem ipsum dolor sit amet consectetur.</h6>
                    <p class="card-text">1 Million Views</p>                    
                  </div>
                </div><!--/card-->
              </div><!--/col-->
              <div class="col">
                <div class="card border-0">
                  <img src="img/reels/demo4.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-text fw-bold">Lorem ipsum dolor sit amet consectetur.</h6>
                    <p class="card-text">1 Million Views</p>                    
                  </div>
                </div><!--/card-->
              </div><!--/col-->
              <div class="col">
                <div class="card border-0">
                  <img src="img/reels/demo5.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-text fw-bold">Lorem ipsum dolor sit amet consectetur.</h6>
                    <p class="card-text">1 Million Views</p>                    
                  </div>
                </div><!--/card-->
              </div><!--/col-->
              <div class="col">
                <div class="card border-0">
                  <img src="img/reels/demo6.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-text fw-bold">Lorem ipsum dolor sit amet consectetur.</h6>
                    <p class="card-text">1 Million Views</p>                    
                  </div>
                </div><!--/card-->
              </div><!--/col-->
            </div>
          </div><!--/container-->
        </section><!--/reels-->
        <section class="testimonials pb-5">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="hgroup text-center">
                  <h4 class="fw-bold text-azul mb-0">Customer Stories</h4>
                  <h2 class="fw-semibold display-4">Hear from those we've helped</h2>
                </div><!--Headingroup-->
              </div><!--/col-->
            </div><!--/.row--> 
            <div class="row">
              <div class="col-sm-12 col-lg-6 text-sm-center text-lg-end">
              <iframe width="315" height="560" src="https://www.youtube.com/embed/tU4xI2maNDs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="col-sm-12 col-lg-5 ">
                <div id="carouselTestimonials2" class="carouselTestimonials carousel slide justify-content-center d-grid align-items-center" style="height: 90%;"  data-bs-ride="carousel">
                  <div class="carousel-inner position-relative">
                    <div class="carousel-item active">
                      <div class="tarjeta bg-verde p-5 my-auto">
                        <div class="rate w-100 fs-5 mb-2">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div><!--/rate-->
                        <h5 class="mb-3">I wanted to have access to the equity in my house. I am already turning 70 so l am getting old. I wanted to spend the money with my adult children and wanted to stay as a tenant forever, so Sell2Rent was the best method I found.</h5>
                        <div class="name d-inline-flex gap-2">
                          <p class="fw-bold">John W.</p>
                          <p class="ps-2 border-start border-dark"> Accountant</p>
                        </div><!--/name-->                        
                      </div><!--/tarjeta-->
                    </div>
                    <div class="carousel-item">
                      <div class="tarjeta bg-verde p-5 my-auto">
                        <div class="rate w-100 fs-5 mb-2">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div><!--/rate-->
                        <h5 class="mb-3">Very patient and understanding with us, as this was a big decision. Sell2Rent's team made the entire process much easier than I imagined in my head!</h5>
                        <div class="name d-inline-flex gap-2">
                          <p class="fw-bold">Mary Richards</p>
                          <p class="ps-2 border-start border-dark"> Nursing Assistant</p>
                        </div><!--/name-->                        
                      </div><!--/tarjeta-->
                    </div><!--/carousel item -->
                    <div class="carousel-item">
                      <div class="tarjeta bg-verde p-5 my-auto">
                        <div class="rate w-100 fs-5 mb-2">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div><!--/rate-->
                        <h5 class="mb-3">I chose Sell2Rent to avoid countless people touring my home. The process was smoother with the buyers they brought, and their agents were excellent, helping me through the somewhat stressful experience of selling my house. Sell2Rent team made it a pretty good journey.</h5>
                        <div class="name d-inline-flex gap-2">
                          <p class="fw-bold">Elizabeth Clark </p>
                          <p class="ps-2 border-start border-dark"> Caregiver</p>
                        </div><!--/name-->                        
                      </div><!--/tarjeta-->
                    </div><!--/carousel item -->
                    <div class="carousel-item">
                      <div class="tarjeta bg-verde p-5 my-auto">
                        <div class="rate w-100 fs-5 mb-2">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div><!--/rate-->
                        <h5 class="mb-3">The team was amazing and the process was smooth and Sell2rent did a great job assisting me, thanks for all the hard work. </h5>
                        <div class="name d-inline-flex gap-2">
                          <p class="fw-bold">Amber Moore</p>
                          <p class="ps-2 border-start border-dark"> Stay at home mom</p>
                        </div><!--/name-->                        
                      </div><!--/tarjeta-->
                    </div><!--/carousel item -->
                  </div>
                  <div class="carousel-controls-s2r">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials2" data-bs-slide="prev">
                    <i class="fa-solid fa-arrow-left icon-arrow"></i>                      
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials2" data-bs-slide="next">
                      <i class="fa-solid fa-arrow-right icon-arrow"></i>                      
                    </button>
                  </div><!--controls-s2r --> 
                </div>
              </div>
            </div><!--/row-->
          </div><!--/container-->
        </section><!--/testimonials-->
        <section class="fees pt-5">
          <div class="container">
            <div class="row align-items-center mt-lg-5 bg-dark rounded-4 shadow-2 text-white ">
              <div class="col-sm-12 col-lg-6 offset-lg-1 ">
                <div class="inner m-5 ps-3">
                  <h2 class="fw-bold display-5">What will it cost you?</h2>
                  <h2 class="fw-bold display-5 my-3 text-verde">Our Fees</h2>
                  <p class="lead">We understand your budget matters, That's why we are transparent from the beginning</p>
                </div>
              </div><!--/col-->
              <div class="col-sm-12 col-lg-5 px-5">
                <img src="img/img-sixPercent.png" alt="Six percent fees" class="img-fluid" style="margin-top: -13%;">
              </div><!--/col-->
            </div><!--/.row-->
          </div><!--/.container-->
        </section><!--/.fees-->
        <section class="investment pb-5 position-relative">
          <div class="container">
            <div class="row my-5  pb-0 investCard investments align-items-end"   data-aos="fade-in" data-aos-delay="300">
              <div class="col-sm-12 col-lg-6 order-2 order-lg-1 d-none d-lg-block ">
                <img src="img/investment_img.png" alt="Investemtns" class="img-fluid p-5 pb-0">
              </div>
              <div class="col-sm-12 col-lg-5  py-5 order-1 order-lg-2 text-center text-md-start">
                <h2 class="text-white fs-1 mb-0">Find the</h2>
                <h2 class="fw-bold text-verde fs-1 mb-0">Right Investment</h2>
                <h3 class="fw-bold text-white fs-1">as a Sell2Rent Partner</h3>
                <p class="my-2 text-white  my-3 fs-5 lh-2">Find the best fit for your investment goals while working with homeowners who want to sell and stay.</p>
                <div class="container-fluid px-0">
                  <div class="d-grid gap-2 col-12 col-md-5">
                    <button class="btn btn-azul fw-bold btn-lg rounded-1" type="button">REGISTER <i class="fas fa-xs fa-chevron-right"></i></button>
                    <button class="btn btn-verde fw-bold btn-lg rounded-1" type="button">LEARN MORE <i class="fas fa-xs fa-chevron-right"></i></button>
                  </div>
                </div><!--/container-->
              </div><!--/col-->
            </div><!--/row-->
            <div class="row my-5 pb-0 investCard solutions align-items-end"  data-aos="fade-in" data-aos-delay="300">
              <div class="col-sm-12 col-lg-5 offset-lg-1  py-5 text-center text-md-start">
                <h2 class="text-white fs-1 mb-0">Help Homeowners</h2>
                <h2 class="fw-bold text-verde fs-1 mb-0">Sell & Stay</h2>
                <h3 class="fw-bold text-white fs-1">as a Sell2Rent Partner</h3>
                <p class="my-2 text-white my-3 fs-5 lh-2">Stand out in your market with sale-leaseback offerings that give your clients more flexibility.</p>
                <div class="container-fluid px-0">
                  <div class="d-grid gap-2 col-12 col-md-5">
                    <button class="btn btn-azul fw-bold btn-lg rounded-1" type="button">REGISTER <i class="fas fa-xs fa-chevron-right"></i></button>
                    <button class="btn btn-verde fw-bold btn-lg rounded-1" type="button">LEARN MORE <i class="fas fa-xs fa-chevron-right"></i></button>
                  </div>
                </div><!--/container-->
              </div><!--/col-->
              <div class="col-sm-12 col-lg-6 order-2 d-none d-lg-block ">
                <img src="img/solutions_img.png" alt="Investemtns" class="img-fluid p-5 pb-0">
              </div>
            </div><!--/row-->
          </div><!--/container-->
          <div class="position-absolute bottom-0 w-100 overflow-hidden" style="transform: skewY(2deg);">
            <div class="ticker-container bg-verde">
              <div class="ticker text-dark">  Sell your house, cash out, &amp; stay as a renter.  |  Sell your house, cash out, &amp; stay as a renter.  |  Sell your house, cash out, &amp; stay as a renter.  |  Sell your house, cash out, &amp; stay as a renter. | </div>
              <div class="ticker text-dark">  Sell your house, cash out, &amp; stay as a renter.  |  Sell your house, cash out, &amp; stay as a renter.  |  Sell your house, cash out, &amp; stay as a renter.  |  Sell your house, cash out, &amp; stay as a renter. | </div>
            </div><!--/ticker-container-->
          </div>
        </section><!--/investment-->
        <section class="cta py-5">
          <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
              <div class="col text-center text-md-start">
                <h2 class="fw-bold fs-1">Are you looking to sell your home?</h2>
                <p class="fs-5">Let us find the ideal investor for your home. Start now by entering your address!</p>
                <a href="#" class="btn btn-verde fw-bold btn-lg">GET STARTED <i class="fas fa-chevron-right"></i></a>
              </div>
              <div class="col">
                <div class="text-center text-lg-end mt-5">
                  <h4 class="fw-bold">Have Questions?</h4>
                  <a href="#" class="btn btn-outline-azul btn-lg fw-bold text-uppercase">Why choose us? </a>
                </div>
              </div>
            </div>
          </div>
        </section><!--/cta-->
    </main>
<?php  include('templates/footer.php'); ?>