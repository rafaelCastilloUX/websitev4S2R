const tableOptions = {
    "Sales Value": [
        "between 100% of retail and 80% depending on market rents and required investor yields",
        "Appraised Value",
        "Market Value that can be affected by the speed at which the homeowner wants to sell the property",
        "Appraised Value",
        "Appraised Value"
    ],
    "Need for Repairs": [
        "No need top repair before sale. Investor can repairs the property",
        "Property stays as-is",
        "Need to beautify and repair the property to obtain market price, otherwise it will trade at a discount",
        "Property stays as-is",
        "Property stays as-is"
    ],
    "Ownership": [
        "Transfer Ownership",
        "Retain Ownership",
        "Transfer ownership",
        "Retain Ownership",
        "Retain Ownership"
    ],
    "Equity Release": [
        "Receive full property value minus mortgages and fees",
        "somewhere between 40% to 60% of  the home's appraised value",
        "Receive full property value minus mortgages and fees",
        "difference between current mortgage, fees and other liens  and 80%-85% of property appraised value.",
        "difference between current mortgage, fees and other liens  and 80%-85% of property appraised value."
    ],
    "Flexibility": [
        "Flexible living arrangements",
        "Limited flexibility, potential displacement",
        "Move out after sale",
        "Limited flexibility",
        "Limited flexibility"
    ],
    "Costs & Fees": [
        "Regular closings costs + intermediation fee of about 6%",
        "Loan Closing costs, interest applicable.  Then closing fees and 6% to sell the home when paying the mortgage",
        "Closing costs + agent fees",
        "Loan Closing costs, interest applicable.  Then closing fees and 6% to sell the home when paying the mortgage",
        "Loan Closing costs, interest applicable.  Then closing fees and 6% to sell the home when paying the mortgage"
    ],
    "Maintenance and Taxes and Insurance": [
        "None",
        "Keeps on paying Taxes, insurance and responsible for all ongoing maintenance and major capital expenses such as roofs, appliances and air conditioners",
        "None",
        "Keeps on paying Taxes, insurance and responsible for all ongoing maintenance and major capital expenses such as roofs, appliances and air conditioners",
        "Keeps on paying Taxes, insurance and responsible for all ongoing maintenance and major capital expenses such as roofs, appliances and air conditioners"
    ],
    "Adds Debt": [
        "No added debt. Potential to reduce debt by cashing out and paying high interest debt",
        "Adds debt, reduces equity, adds personal liability",
        "No added debt. Potential to reduce debt by cashing out and paying high interest debt",
        "Adds debt, reduces equity, adds personal liability",
        "Adds debt, reduces equity, adds personal liability"
    ],
    "Moving Costs": [
        "N/A",
        "N/A",
        "Estimated  moving costs $2,000-3,000+ Time spent moving",
        "N/A",
        "N/A",
    ]
}

function setDynamicTableOption() {
    let selectedTableOption = $('#floatingSelectCompare').val();
    let items = "";
    let keys = Object.keys(tableOptions);
    for (let i = 0; i < keys.length; i++) {
        items += `<div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-${keys[i].replace(/\s/g, '')}" aria-expanded="true" aria-controls="collapseOne-${keys[i].replace(/\s/g, '')}">
                ${keys[i]}
            </button>
            </h2>
            <div id="collapseOne-${keys[i].replace(/\s/g, '')}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container-fluid">
                <div class="row">
                    <div class="col">
                    <p class="p-2 bg-light">${tableOptions[keys[i]][0]}</p>
                    </div>
                    <div class="col">
                    <strong>${tableOptions[keys[i]][selectedTableOption]}</strong>
                    </div>
                </div>
                </div>
                
            </div>
            </div>
        </div`;
    }
    $('#accordionExample').html(items);
}