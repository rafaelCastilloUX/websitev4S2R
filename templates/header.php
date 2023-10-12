<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sell2Rent | Sell your property and Stay as a renter</title>
  <link rel="icon" type="image/x-icon" href="img/icons/favicon.ico">
  <!--Bootstrap Core-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!--Animation Scroll PLugin-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/e5b25b5dd3.js" crossorigin="anonymous"></script>
  <!--Custom Styles-->
  <link rel="stylesheet" href="css/styles.css">
   
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NQWHB9M');</script>
  <!-- End Google Tag Manager -->
  
 
<!-- Batchdata -->
<link rel="stylesheet" href="resources/batchdataAutocomplete/dist/batch-address-auto-complete.min.css">
<script src="resources/batchdataAutocomplete/dist/batch-address-auto-complete.min.js"></script>
<script src="resources/environment.js"></script>
<script>
  function initialize() {
    console.log("init")
    console.log(env)
    // Custom Autocomplete of Batch Service
    batchAutocomplete(document.getElementById("batchAddressAutoComplete"), env.domainServer, env.apiKey);

    // Add an event listener to get value
    document.addEventListener("batch-address-auto-complete", function (e) {
      // Here you will get data what you had selected in input by using "e.detail"
      console.log('Selected item: ', e.detail);

      localStorage.setItem('street', e.detail.address);
      localStorage.setItem('city', e.detail.city);
      localStorage.setItem('state', e.detail.state);
      localStorage.setItem('zipcode', e.detail.zip);
    });

    // Add an event listener to handle error
    document.addEventListener("batch-auto-complete-error", function (e) {
      // Here you will get error using "e.detail"
      console.log("Error while searching: ", e.detail);
    });
  }

  function goToForms() {
    window.location.href = "/forms/index.html"
  }
</script>
<!-- End Batchdata -->
</head>

<body onload="initialize()">   
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQWHB9M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="">
    <nav class="navbar navbar-expand-lg fixed-top position-absolute top-0 px-lg-5 py-md-0 bg-dark" data-bs-theme="dark" style="--bs-bg-opacity: .5;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="img/s2r-logo.svg" alt="Sell2Rent Logo" class="w-100" height="45"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarStandard" aria-controls="mainNavbarStandard" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="mainNavbarStandard">
            <ul class="navbar-nav fw-bold gap-md-4 me-auto ms-md-4 text-center">
                <li class="nav-item dropdown py-3 pb-1">
                  <a class="nav-link dropdown-toggle" href="sell.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sell
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="why-choose-us.html">Why Choose Us?</a></li>
                    <li><a class="dropdown-item" href="get-started-uploading.html">Get Starteds Uploading</a></li>                  
                  </ul>
                </li>
                <li class="nav-item dropdown py-3 pb-1">
                  <a class="nav-link dropdown-toggle" href="sell.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Invest
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="invest.html">Investors</a></li>
                    <li><a class="dropdown-item" href="#">Property Marketplace</a></li>                  
                  </ul>
                </li>
                <li class="nav-item dropdown py-3 pb-1">
                  <a class="nav-link dropdown-toggle" href="sell.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Partners
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Strategic Partners</a></li>
                    <li><a class="dropdown-item" href="#">Real Estate Agents</a></li>                  
                  </ul>
                </li>   
                <li class="nav-item py-3 pb-1">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item py-3 pb-1">
                  <a class="nav-link" href="#">Resources</a>
                </li>
            </ul>
            <div class="d-xlex pt-2 py-3 pb-1">
              <a href="#" class="btn btn-verde fw-bold fs-6 px-3 w-100 text-uppercase">Get Started For Free <i class="fa-solid fa-chevron-right"></i></a>
            </div><!--/.d-flex -->
          </div><!--collapse-->
        </div><!--/container-fluid-->
    </nav>
  </header> 
  <!-- end of Navbar -->