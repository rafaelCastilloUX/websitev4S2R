function btnNextClicked(event, step) {
    event.preventDefault();
    console.log(step)
    $(".step1").hide();
    $(".step2").hide();
    $(".step3").hide();
    $(".step4").hide();

    let nextStep = step+1;
    $(".step"+nextStep).fadeIn(3000)

    if(step === 4) {
        let formData = $("#simulator-form").serializeArray();
        let typeOfProperty = formData[0].value;
        let propertyBuilt = formData[1].value;
        let lotSize = formData[2].value;
        let priceOfProperty = formData[3].value;

        let obj = {
            typeOfProperty,
            propertyBuilt,
            lotSize,
            priceOfProperty
        }

        console.log(obj)
    }

}