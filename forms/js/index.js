import { __BACKEND_URL__ } from "./constants.js";

// QUERY SELECTORS ----------------------------------------------------------->>>
const querySelector = (query) => document.querySelector(query);
const querySelectorAll = (query) => document.querySelectorAll(query);
// <<<---------------------------------------------------------------------------


// LOCALSTORAGE -------------------------------------------------------------->>>
const initLocalStorage = () => {
    localStorage.getItem("s1_intention") ?? localStorage.setItem("s1_intention", "");
    localStorage.getItem("s2_segment") ?? localStorage.setItem("s2_segment", "");
    localStorage.getItem("s2_comments") ?? localStorage.setItem("s2_comments", "");
    localStorage.getItem("s2_needToSellBy") ?? localStorage.setItem("s2_needToSellBy", "");
    localStorage.getItem("s2_ownership") ?? localStorage.setItem("s2_ownership", "");
    localStorage.getItem("s3_propertyType") ?? localStorage.setItem("s3_propertyType", "");
    localStorage.getItem("s3_houseValue") ?? localStorage.setItem("s3_houseValue", "0");
    localStorage.getItem("s3_mortgage") ?? localStorage.setItem("s3_mortgage", "0");
    localStorage.getItem("s4_leaseTerm") ?? localStorage.setItem("s4_leaseTerm", "");
    localStorage.getItem("s4_rentAmount") ?? localStorage.setItem("s4_rentAmount", "0");
    localStorage.getItem("s4_creditScore") ?? localStorage.setItem("s4_creditScore", "");
    localStorage.getItem("s4_income") ?? localStorage.setItem("s4_income", "0");
    localStorage.getItem("s5_contactPreference") ?? localStorage.setItem("s5_contactPreference", "");
    localStorage.getItem("s5_firstName") ?? localStorage.setItem("s5_firstName", "");
    localStorage.getItem("s5_lastName") ?? localStorage.setItem("s5_lastName", "");
    localStorage.getItem("s5_phone") ?? localStorage.setItem("s5_phone", "");
    localStorage.getItem("s5_email") ?? localStorage.setItem("s5_email", "");
    localStorage.getItem("s5_terms") ?? localStorage.setItem("s5_terms", "");
};
const localStorageSave = (name, value) => {
    localStorage.setItem(name, value);
};
const localStorageClear = () => {
    localStorage.clear();
};
const localStorageGetAllItems = () => localStorage;

initLocalStorage();
// <<<---------------------------------------------------------------------------

// ONLOAD --------------------------------------------------------------------->>>
// Select all inputs from the form
const inputs = querySelectorAll("input");
const fields = Object.keys(localStorageGetAllItems());
const optionalFields = ["s2_comments", "s3_mortgage"];

const organicSocialNetwork = [
    'Google',
    'ContentMarketing',
    'Facebook',
    'Instagram',
    'Reddit',
    'LinkedIn',
    'YouTube',
    'TikTok',
    'Pinterest',
    'Quora',
    'Bing',
    'GoogleMaps',
    'Yelp',
    'Snapchat',
    'Yahoo',
    'DuckDuckGo',
    'Ecosia',
    'TrustPilot',
    'GoogleReviews',
    'BingMaps'
]

const isOrganic = (url) => organicSocialNetwork.some(socialNetwork => url.includes(socialNetwork.toLowerCase()));
const socialNetworkName = (url) => organicSocialNetwork.find(socialNetwork => url.includes(socialNetwork.toLowerCase()));


const rangeSlidersLabelsFormat = (name) => {
    let elem;
    let moneyValue;

    if (name !== "s4_rentAmount") {
        switch (name) {
            case "s3_houseValue":
                elem = querySelector("#s3_houseValue_span");
                break;
            case "s3_mortgage":
                elem = querySelector("#s3_mortgage_span");
                break;
            case "s4_income":
                elem = querySelector("#s4_income_span");
                break;
        }

        if (localStorage.getItem(name) == "" || localStorage.getItem(name) == "0") {
            moneyValue = "$0";
        } else if (localStorage.getItem(name) == "1000000") {
            moneyValue = "$1.0M";
        } else {
            moneyValue = "$" + localStorage.getItem(name) / 1000 + "K"
        }

        elem.innerText = moneyValue;
    } else {
        elem = querySelector("#s4_rentAmount_span");

        if (localStorage.getItem(name) == "" || localStorage.getItem(name) == "0") {
            moneyValue = "$0";
        } else if (localStorage.getItem(name) == "10000") {
            moneyValue = "$10K";
        } else {
            moneyValue = "$" + new Intl.NumberFormat().format(localStorage.getItem(name));
        }

        elem.innerText = moneyValue;
    }
}

// Load all fields saved
fields.forEach((field) => {
    const element = querySelector(`input[name="${field}"]`);

    if (element) {
        if (element.type === "checkbox") {
            // for checkboxes
            element.checked = localStorage.getItem(field) === "true" ? true : false;
        } else if (element.type === "radio") {
            // for radios
            const elements = querySelectorAll(`input[name="${field}"]`);

            elements.forEach((e) => {
                e.checked = e.value === localStorage.getItem(field) ? true : false;
            });
        } else if (element.type === "range") {
            // For ranges
            element.value = localStorage.getItem(field) == "" ? 0 : localStorage.getItem(field);
            rangeSlidersLabelsFormat(field);

        } else {
            // for texts
            element.value = localStorage.getItem(field);
        }
    }
});
// <<<-----------------------------------------------------------------------------

// VALIDATIONS ------------------------------------------------------------------>>>
// Empty fields check
const checkFieldsInStep = (stepChar) => {
    let allFilled = true;
    const stepFields = fields
        .filter((field) => field.startsWith(stepChar))
        .filter((field) => !optionalFields.includes(field));

    stepFields.forEach((field) => {
        if (localStorage.getItem(field) === "0" || localStorage.getItem(field) === "") {
            allFilled = false;
        }
        if (field === "s5_terms" && localStorage.getItem(field) == "false") {
            allFilled = false;
        }
    });

    return allFilled;
};

// Empty fields warning
const showFieldsWarning = (phone = false, email = false) => {
    if (phone) {
        const warning = querySelector("#warningPhone");
        warning.innerText = "Please type a valid number";
    } else if (email) {
        const warning = querySelector("#warningEmail");
        warning.innerText = "Please type a valid email";
    } else {
        const warning = querySelector("#warningBottom");
        warning.innerText = "Please fill all of the mandatory fields";
    }
};

const removeFieldsWarning = (phone = false, email = false) => {
    let warning;
    if (phone) {
        warning = querySelector("#warningPhone");
    } else if (email) {
        warning = querySelector("#warningEmail");
    } else {
        warning = querySelector("#warningBottom");
    }
    warning.innerText = "";
};

// email + phone validations
const validateEmail = (value) => {
    const validRegex =
        /^(?=.{1,256}$)[a-zA-Z0-9]+(?:[._%+-][a-zA-Z0-9]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/;

    return value.match(validRegex);
};

const formatMobile = (number) => {
    number = number.slice(0, 10);
    let finalFormat = number.slice(0, 3);
    if (number.length > 6 && number.length < 11) {
        finalFormat =
            finalFormat + "-" + number.slice(3, 6) + "-" + number.slice(6, 10);
    } else if (number.length > 3 && number.length < 7) {
        finalFormat = finalFormat + "-" + number.slice(3, 6);
    }
    return finalFormat;
};

const validateMobile = (number) => {
    if (isNaN(number) || number.length < 10 || number.startsWith("+")) {
        return false;
    }
    return true;
};

// Prequalification
let prequalifyResult;
const prequalify = async () => {
    try {
        const response = await axios.post(
            `${__BACKEND_URL__}/api/preQualificationsRoutes/newPrequalification`,
            {
                address: localStorage.getItem("street"),
                city: localStorage.getItem("city"),
                state: localStorage.getItem("state"),
                zip: parseInt(localStorage.getItem("zipcode")),
                mortgage: localStorage.getItem("s3_mortgage"),
                ownerHouseValue: localStorage.getItem("s3_houseValue"),
                propertyType: localStorage.getItem("s3_propertyType"),
            }, {
            headers: { 'Content-Type': 'application/json' },
        }
        );

        prequalifyResult = `Prequalification result: ${JSON.stringify(response.data)}`;
        return response.data; // Retorna los datos recibidos en la respuesta
    } catch (error) {
        console.error("Error in prequalification:", error);
        throw error; // Lanza el error para que sea manejado más arriba si es necesario
    }
};

// Create Lead in Zoho
const createLead = async (failed_form = false, failed_property = false) => {
    const storedSource = localStorage.getItem("utmSource");
    const storedMedium = localStorage.getItem("utmMedium");
    const storedCampaign = localStorage.getItem("utmCampaign");
    const storedContent = localStorage.getItem("utmContent");
    const storedGclid = localStorage.getItem("utmGclid");
    const referreredUrl = localStorage.getItem("adGroup");

    const lead_data = {
        // Step1
        Transaction_Type: localStorage.getItem("s1_intention"),

        // Step2
        Situation_Category: localStorage.getItem("s2_segment"),
        Comments: localStorage.getItem("s2_comments"),
        How_soon_need_to_sell: localStorage.getItem("s2_needToSellBy"),
        Lead_Origination: localStorage.getItem("s2_ownership"),

        // Step3
        Type_of_Property: localStorage.getItem("s3_propertyType"),
        How_much_do_you_think_your_house_is_worth: parseInt(
            localStorage.getItem("s3_houseValue")
        ),
        How_much_do_you_owe_on_your_mortgage: parseInt(
            localStorage.getItem("s3_mortgage")
        ),

        // Step4
        Desired_Lease_Period_Months: parseInt(localStorage.getItem("s4_leaseTerm")),
        Owner_Estimation_Rent: parseInt(localStorage.getItem("s4_rentAmount")),
        Credit_Score_Level: localStorage.getItem("s4_creditScore"),
        Annual_income: parseInt(localStorage.getItem("s4_income")),

        // Step5
        Scheduled_Meeting_At: localStorage.getItem("s5_contactPreference"),
        First_Name: localStorage.getItem("s5_firstName"),
        Last_Name: localStorage.getItem("s5_lastName"),
        Email: localStorage.getItem("s5_email"),
        Phone: localStorage.getItem("s5_phone").replaceAll("-", ""),
        Mobile: localStorage.getItem("s5_phone").replaceAll("-", ""),

        // Mandatory
        Street: localStorage.getItem("street"),
        City: localStorage.getItem("city"),
        State: localStorage.getItem("state"),
        Zip_Code: localStorage.getItem("zipcode"),


        campaign: storedCampaign ? storedCampaign : isOrganic(referreredUrl) ? "Organic" : "direct website",
        Lead_Source: storedSource ? storedSource : isOrganic(referreredUrl) ? "Organic" : "direct website",
        Campaigns_Source: storedSource ? storedSource : isOrganic(referreredUrl) ? "Organic" : "direct website",
        Campaign_Medium: storedMedium ? storedMedium : socialNetworkName(referreredUrl) ? socialNetworkName(referreredUrl) : "direct website",

        content: storedGclid,
        Intake_Form_or_Source: "sell2rent.com",
        Referrer: referreredUrl ?? "",
    };

    if (failed_form) {
        if (failed_property) {
            lead_data.Lead_Status = "Referral";
        } else {
            lead_data.Lead_Status = "Future Contact";
        }
        lead_data.Standby_Reason = failed_property.reasonForFailure;
        lead_data.Reason_for_Failure_Details = failed_property.details;
    } else {
        lead_data.Lead_Status = "New Lead";
    }


    try {
        await axios.post(`${__BACKEND_URL__}/api/zohoApiRoutes/`, lead_data, { headers: { 'Content-Type': 'application/json' } })
        console.log("Lead created");
    } catch (error) {
        console.error("Error in creating lead:", error);
        throw error; // Lanza el error para que sea manejado más arriba si es necesario
    }
};

// Get URL params
function getUrlParameters(url) {
    const queryString = url.split("?")[1]; // Obtén la parte de la URL después del "?"
    const paramsArray = queryString.split("&"); // Divide los parámetros en un array

    const paramsObject = {}; // Objeto para almacenar los parámetros

    paramsArray.forEach((param) => {
        const [key, value] = param.split("="); // Divide el parámetro en clave y valor
        paramsObject[key] = decodeURIComponent(value); // Decodifica el valor y almacénalo en el objeto
    });

    return paramsObject;
}
// <<<-------------------------------------------------------------------------------

// CURRENT PROCESS --------------------------------------------------------------->>>
// Skip from step 4 to 5 if sell & move out
const url = window.location.href;
const filename = url.split("/").pop();

let step = "";

if (filename.includes("index.html") || filename === "") {
    step = "s1";
}

if (filename === "step2.html") {
    step = "s2";
}

if (filename === "step3.html") {
    step = "s3";
    // Get the first choice to see if lease information is needed.
    const goal = localStorage.getItem("s1_intention");
    const anchor = querySelector('a[href="step4.html"]');

    if (goal === "Sell and Move Out") {
        anchor.setAttribute("href", "step5.html");
    }
}

if (filename === "step4.html") {
    step = "s4";
    // } else {
    optionalFields.push('s4_leaseTerm', 's4_rentAmount', 's4_creditScore', 's4_income');
}

if (filename === "step5.html") {
    step = "s5";

    // Get the first choice to see if lease information is needed.
    const goal = localStorage.getItem("s1_intention");
    const anchor = querySelector('a[href="step4.html"]');

    if (goal === "Sell and Move Out") {
        anchor.setAttribute("href", "step3.html");
    }
}

// Create onChange event for each input and store value in localStorage
inputs.forEach((input) => {
    input.addEventListener("change", (e) => {
        const { name, type } = e.target;

        const value = type === "checkbox" ? e.target.checked : e.target.value;

        localStorageSave(name, value);

        // Check if all fields are filled
        const fieldsChecked = checkFieldsInStep(step);

        if (!fieldsChecked) {
            showFieldsWarning();
        } else {
            removeFieldsWarning();
        }
    });

    if (input.name === "s5_phone") {
        input.addEventListener("input", (e) => {
            let unformattedPhone = e.target.value;
            unformattedPhone = unformattedPhone.replaceAll("-", "");
            if (isNaN(unformattedPhone)) unformattedPhone = "";

            input.value = formatMobile(unformattedPhone);

            localStorageSave(e.target.name, e.target.value);

            if (
                !validateMobile(localStorage.getItem(e.target.name).replaceAll("-", ""))
            ) {
                showFieldsWarning(true);
            } else {
                removeFieldsWarning(true);
            }
        });
    }

    if (input.name === "s5_email") {
        input.addEventListener("input", (e) => {
            localStorageSave(e.target.name, e.target.value);

            if (!validateEmail(localStorage.getItem(e.target.name))) {
                showFieldsWarning(false, true);
            } else {
                removeFieldsWarning(false, true);
            }
        });
    }

    if (input.type === "range") {
        input.addEventListener("input", (e) => {
            localStorageSave(e.target.name, e.target.value);
            rangeSlidersLabelsFormat(input.name);
        });
    }
});

// Event listener to handle Next step
const nextButton = querySelector(".nextBtn");
if (nextButton) {
    nextButton.addEventListener("click", (e) => {
        e.preventDefault();

        const fieldsChecked = checkFieldsInStep(step);
        if (!fieldsChecked) {
            showFieldsWarning();
        } else {
            removeFieldsWarning();
            window.location.href = nextButton.getAttribute("href");
        }
    });
}

// Event listener to handle submit
const submitButton = querySelector(".submitBtn");
if (submitButton) {
    submitButton.addEventListener("click", (e) => {
        e.preventDefault();

        const fieldsChecked = checkFieldsInStep(step);
        const emailChecked = validateEmail(
            querySelector('[name="s5_email"]').value
        );
        const phoneChecked = validateMobile(
            localStorage.getItem("s5_phone").replaceAll("-", "")
        );

        emailChecked ? removeFieldsWarning(false, true) : showFieldsWarning(false, true);
        phoneChecked ? removeFieldsWarning(true) : showFieldsWarning(true);
        if (!fieldsChecked || !emailChecked || !phoneChecked) {
            showFieldsWarning();
        } else {
            // Remove Warnings
            removeFieldsWarning();

            // Show Spinner
            submitButton.setAttribute("disabled", "true");
            querySelector('.spinner-border').removeAttribute('hidden');

            prequalify()
                .then((data) => {
                    console.log("Prequalification successful:", data);

                    if (data.qualified) {
                        createLead().then(() => {
                            localStorageClear();
                            localStorage.setItem("preqResult", prequalifyResult);
                            window.location.href = "/forms/success.html";
                        }).catch((error) => {
                            console.error("An error occurred on createLead:", error);
                        });
                    } else if (!data.qualified && data?.details) {
                        createLead(true, data).then(() => {
                            localStorageClear();
                            localStorage.setItem("preqResult", prequalifyResult);
                            window.location.href = "/forms/unsuccess.html";
                        }).catch((error) => {
                            console.error("An error occurred on createLead:", error);
                        });
                    } else {
                        createLead(true, false).then(() => {
                            localStorageClear();
                            localStorage.setItem("preqResult", prequalifyResult);
                            window.location.href = "/forms/unsuccess.html";
                        }).catch((error) => {
                            console.error("An error occurred on createLead:", error);
                        });
                    }
                })
                .catch((error) => {
                    console.error("An error occurred:", error);
                });
        }
    });
}
// <<<-----------------------------------------------------------------------------------
