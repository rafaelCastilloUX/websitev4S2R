var getStartedRedirectURL =  "/forms/index.html";

function isButtonEnabled() {
    return document.querySelector('#get-started-button').disabled !== false
}

function setButtonDisabled(value) {
    document.querySelector('#get-started-button').disabled = value;
}

function initialize() {
  $(".step2").hide();
  $(".step3").hide();
  $(".step4").hide();
    setButtonDisabled(true);
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
      setButtonDisabled(false);
    });

    // Add an event listener to handle error
    document.addEventListener("batch-auto-complete-error", function (e) {
      // Here you will get error using "e.detail"
      console.log("Error while searching: ", e.detail);
      setButtonDisabled(true);
    });
  }

  function goToURL(url) {
    window.location.href = url;
  }

  function goToForms() {
    if(!isButtonEnabled()) {
        goToURL(getStartedRedirectURL);
    }
  }