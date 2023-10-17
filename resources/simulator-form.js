function btnNextClicked(event, step) {
    event.preventDefault();
    if(step === 1) {
        if($('input[name=typeOfProperty]:checked', '#simulator-form').val() === undefined) {
            return;
        }
    }

    if(step === 2) {
        if($('input[name=propertyBuilt]:checked', '#simulator-form').val() === undefined) {
            return;
        }
    }

    if(step === 3) {
        if($('input[name=lotSize]:checked', '#simulator-form').val() === undefined) {
            return;
        }
    }

    if(step === 4) {
        if($('input[name=priceofProperty]:checked', '#simulator-form').val() === undefined) {
            return;
        }
    }

    console.log(step)
    $(".step1").hide();
    $(".step2").hide();
    $(".step3").hide();
    $(".step4").hide();
    $(".step5").hide();

    let nextStep = step+1;
    $(".step"+nextStep).fadeIn(2000)

    if(step >= 4) {
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
        if(obj.propertyBuilt === "Before 1950") {
            $('.match-or-not').html("Not a match.");
        } else {
            $('.match-or-not').html("It's a match.");
        }
    }

}

function btnBackClicked(e, step) {
    e.preventDefault();
    $(".step1").hide();
    $(".step2").hide();
    $(".step3").hide();
    $(".step4").hide();
    $(".step5").hide();
    $(".step" + step).fadeIn(2000);
}

$( document ).ready(function() {
    $('.label-btn').click(function(e) { 
        console.log(e.target);
        var el = e.target;
        $('.label-btn').removeClass('label-btn-active');
        $(el).addClass('label-btn-active');
     });

    $(".step2").hide();
    $(".step3").hide();
    $(".step4").hide();
});