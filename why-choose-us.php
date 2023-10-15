<?php include('templates/header.php'); ?>

    <main>    
        <!--hero-->
        <section class="bg-sell pt-10 d-block position-relative pt-xl-40vh" >
            <div class="container position-relative">
                <div class="p-5 text-center rounded-2  text-white top-xl-25vh w-100" style="background-color: #1F262E;">
                    <h2 class="fw-medium fs-1">Why Choose Us?</h2>
                    <h1 class="fw-bold  display-1">No <span class="text-verde">Loans</span>. No <span class="text-verde">Debt</span>. </h1>
                     <p class="fw-normal fs-3">Sell your house, cash out, and stay as a renter. <br> It's the new sale leaseback option with no BS.</p>
                    <div class="container">
                        <button type="button" class="btn fw-bold btn-verde btn-lg">GET STARTED <i class="fa-solid fa-chevron-right"></i></button>
                    </div><!--/container-->
                  </div>
            </div>
        </section><!--/.Hero--> 
        <section class="content position-relative mt-3">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="card p-3" >
                            <img src="img/img-card-comparison-s2r.png" class="card-img-top" alt="Compare con S2R">
                            <div class="card-body">
                              <h5 class="card-title text-azul fw-bold">Sell<span class="text-verde">2</span>Rent</h5>
                              <form class="form-floating">
                                <input type="email" class="form-control" id="floatingS2R" placeholder="Sell And Stay" value="Sell And Stay">
                                <label for="floatingS2R" class=" text-azul">Program</label>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                      <div class="card p-3" >
                          <img src="img/img-card-comparison-cryngGuy.png" class="card-img-top" alt="Compare con S2R">
                          <div class="card-body">
                            <h5 class="card-title fw-bold">Conventional Options</h5>
                            <div class="form-floating">
                              <select class="form-select" id="floatingSelectCompare" aria-label="Floating label select example">
                                <option selected value="1">Reverse Mortgages</option>
                                <option value="2">Traditional Home Sale</option>
                                <option value="3">Personal Loans</option>
                                <option value="4">HELOCs</option>
                              </select>
                              <label for="floatingSelectCompare" class="text-azul">Choose an option</label>
                            </div>
                          </div>
                        </div>
                    </div>
                </div><!--/.row-->
                <div class="row my-5 text-center">
                    <div class="col">
                        <button onclick="setDynamicTableOption()" type="button" class="btn fw-bold btn-verde btn-lg">See The Comparison <i class="fa-solid fa-sm fa-chevron-right"></i></button>
                    </div><!--/col-->
                </div><!--/.row-->
                <div class="row">
                    <div class="col">
                        <?php include('templates/table-dynamic-compare/options.php'); ?>
                        <!--/dynamic table  -->
                    </div>
                </div><!--/.row-->
            </div><!--/container-->
            <div class="container mt-4">
              <div class="row row-cols-1 row-cols-lg-2">
                <div class="col order-2 order-md-1 mt-2">
                  <img src="img/phoneS2R.png" alt="Phone" class="img-fluid">
                </div><!--/col-->
                <div class="col order-1 order-md-2">
                  <img src="img/chat-bubble-FAQ.png" alt="" class="img-fluid">
                  <div class="contanier-fluid">
                  <div id="carouselFAQs" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="p-5 bg-azul text-white text-center text-lg-end m-3 rounded-4">
                          <p class="lead">Once the evaluation process is over, you'll receive an offer by email, typically within 5 days after we receive all of your information. The timeframe then depends on the time spent reviewing and agreeing to sale and rental terms, negotiating the final details and choosing the closing date. This can take a few weeks or more.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="p-5 bg-azul text-white text-center text-lg-end m-3 rounded-4">
                          <p class="lead">Once the evaluation process is over, you'll receive an offer by email, typically within 5 days after we receive all of your information. The timeframe then depends on the time spent reviewing and agreeing to sale and rental terms, negotiating the final details and choosing the closing date. This can take a few weeks or more.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="p-5 bg-azul text-white text-center text-lg-end m-3 rounded-4">
                          <p class="lead">Once the evaluation process is over, you'll receive an offer by email, typically within 5 days after we receive all of your information. The timeframe then depends on the time spent reviewing and agreeing to sale and rental terms, negotiating the final details and choosing the closing date. This can take a few weeks or more.</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-controls-s2r">
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselFAQs" data-bs-slide="prev">
                        <i class="fa-solid fa-arrow-left icon-arrow"></i>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselFAQs" data-bs-slide="next">
                        <i class="fa-solid fa-arrow-right icon-arrow"></i>
                      </button>
                    </div><!--controls--> 
                  </div>
                  </div>

                </div><!--/col-->
              </div>
            </div>
        </section><!--/.contenido-->
        <section class="bg-verde py-3">
          <div class="container">
            <div class="row align-items-center row-cols-1 row-cols-md-2">
              <div class="col px-md-5 text-center text-md-start order-2 order-lg-1">
                <h2 class="fw-bold display-2">Ready for the Next Step?</h2>
                <p class="fs-5">Let us find the ideal investor for your home. Start now by entering your address!</p>
                <form  class="row row-cols-1 row-cols-lg-2 g-2 align-items-center overflow-hidden rounded-1">
                  <div class="col p-2 mt-0 bg-white">
                    <label class="visually-hidden" for="inlineFormInputemail">email</label>
                    <input type="text" class="form-control form-control-lg border-0" id="inlineFormInputemail" placeholder="Enter Your Address" required>
                  </div>
                  <div class="col p-2 mt-0 bg-white">
                    <button type="submit" class="btn btn-azul btn-lg w-100 fw-bold fs-5">Get Started <i class="fa-solid fa-chevron-right"></i></button>
                  </div>
                </form>
              </div><!--/col-->
              <div class="col p-5 order-1 order-lg-2">
                <img src="img/nextStep.png" alt="next Step " class="img-fluid">
              </div><!--/col-->
            </div>
          </div>
        </section>
    </main>
    <?php include('templates/footer.php'); ?>
