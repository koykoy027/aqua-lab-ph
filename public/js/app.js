// const toggleTestParameters = (val) => {
//     var micro = document.querySelector(".micro");
//     var pychem = document.querySelector(".pychem");

//     if (val == "micro") {
//         micro.classList.remove("hidden");
//         pychem.classList.add("hidden");

//         // Clear PyChem checkboxes
//         var pychemCheckboxes = pychem.querySelectorAll(
//             'input[type="checkbox"]'
//         );
//         pychemCheckboxes.forEach(function (checkbox) {
//             checkbox.checked = false;
//         });
//     }

//     if (val == "pychem") {
//         micro.classList.add("hidden");
//         pychem.classList.remove("hidden");

//         // Clear Micro checkboxes
//         var microCheckboxes = micro.querySelectorAll('input[type="checkbox"]');
//         microCheckboxes.forEach(function (checkbox) {
//             checkbox.checked = false;
//         });
//     }
// };

function toggleTestParameters(selectedValue, selectElement) {
    
    // get text instead of value in dropdown
    var test_parameters_type = document.getElementById("test_parameters_type");
    var selectedText = selectElement.options[selectElement.selectedIndex].text;
    test_parameters_type.value = selectedText;

    
    var divMicrox = document.getElementById("microx");
    var divChemx = document.getElementById("chemx");
    var divPhch = document.getElementById("phch");

    // Check the selected value and toggle the visibility of each div accordingly.
    if (selectedValue == "12") {
        divMicrox.classList.remove("hidden");
        divChemx.classList.add("hidden");
        divPhch.classList.add("hidden");
    } else if (selectedValue == "58") {
        divMicrox.classList.add("hidden");
        divChemx.classList.remove("hidden");
        divPhch.classList.add("hidden");
    } else if (selectedValue == "61") {
        divMicrox.classList.add("hidden");
        divChemx.classList.add("hidden");
        divPhch.classList.remove("hidden");
    } else {
        // If the selectedValue is something else, hide all divs.
        divMicrox.classList.add("hidden");
        divChemx.classList.add("hidden");
        divPhch.classList.add("hidden");
    }

    // Clear Micro checkboxes
    var microCheckboxes = divMicrox.querySelectorAll('input[type="checkbox"]');
    microCheckboxes.forEach(function (checkbox) {
        checkbox.checked = false;
    });

    var microCheckboxes = divChemx.querySelectorAll('input[type="checkbox"]');
    microCheckboxes.forEach(function (checkbox) {
        checkbox.checked = false;
    });

    var microCheckboxes = divPhch.querySelectorAll('input[type="checkbox"]');
    microCheckboxes.forEach(function (checkbox) {
        checkbox.checked = false;
    });
}

// can be seen in service.client.create
const marketSegment = (val) => {
    var input = document.getElementById("market_segment_others");
    var marketSegmentInput = document.getElementById("client_id");

    if (val == "Others") {
        // actve readonly
        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }

    let zipCode = document.getElementById("zip_code").value;
    let areaCode = zipCode.slice(0, 2);
    let municipalityOrCity = document.getElementById(
        "municipality_or_city"
    ).value;
    let currentAccountNumber = document.getElementById(
        "currentAccountNumber"
    ).value;
    let twoLetterOfTheCity = municipalityOrCity.substr(0, 2).toUpperCase();
    let currentDate = new Date();
    let currentMonth = (currentDate.getMonth() + 1).toString().padStart(2, "0");
    let currentYear = currentDate.getFullYear().toString().slice(-2);

    if (val == "0001 - Water Refilling Station") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "WRS0001" +
            currentAccountNumber;
    } else if (val == "002A - Food and Beverages (Service)") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "FBS002A" +
            currentAccountNumber;
    } else if (val == "002B - Food and Beverages (Manufacturer)") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "FBM002B" +
            currentAccountNumber;
    } else if (val == "003 - Hospitality Industry") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "HI003" +
            currentAccountNumber;
    } else if (val == "004A - Healthcare (Dialysis)") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "HD004A" +
            currentAccountNumber;
    } else if (val == "004B - Healthcare (Lying-in)") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "HL004B" +
            currentAccountNumber;
    } else if (val == "004C - Healthcare (Hospital)") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "HH004C" +
            currentAccountNumber;
    } else if (val == "005 - Water Service Provider") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "WSP005" +
            currentAccountNumber;
    } else if (val == "006 - Residential") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "RE006" +
            currentAccountNumber;
    } else if (val == "007 - Academe") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "AC007" +
            currentAccountNumber;
    } else if (val == "008 - Industries") {
        marketSegmentInput.value =
            areaCode +
            twoLetterOfTheCity +
            currentMonth +
            currentYear +
            "IN008" +
            currentAccountNumber;
    } else {
        marketSegmentInput.value = "";
    }
};

// can be seen in service.add-analysis-request-form
const collectionPoint = (val) => {
    var input = document.getElementById("collection_point_others");
    if (val == "Others") {
        // actve readonly

        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in service.add-analysis-request-form
const samplingLocationAddress = (val) => {
    var input = document.getElementById("sampling_location_address_others");
    var unit_no_floor_bldg_name = document.getElementById(
        "unit_no_floor_bldg_name"
    ).value;
    var street_name_or_subdivision = document.getElementById(
        "street_name_or_subdivision"
    ).value;
    var region = document.getElementById("region").value;
    var municipality_or_city = document.getElementById(
        "municipality_or_city"
    ).value;
    var barangay_name = document.getElementById("barangay_name").value;
    var zip_code = document.getElementById("zip_code").value;

    if (val == "SAME AS ADDRESS") {
        input.setAttribute("readonly", "readonly");
        input.value =
            unit_no_floor_bldg_name +
            " " +
            street_name_or_subdivision +
            " " +
            street_name_or_subdivision +
            " " +
            region +
            " " +
            municipality_or_city +
            " " +
            barangay_name +
            " " +
            zip_code;
    } else {
        input.removeAttribute("readonly");
        input.value = "";
    }
};

// can be seen in service.add-analysis-request-form
const sourceOfWaterSample = (val) => {
    var input = document.getElementById("source_of_water_sample_others");
    if (val == "Others") {
        // actve readonly
        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in service.add-analysis-request-form
const typeOfWater = (val) => {
    var input = document.getElementById("type_of_water_others");
    if (val == "Others") {
        // actve readonly
        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in service.add-analysis-request-form
const waterPurpose = (val) => {
    var input = document.getElementById("water_purpose_others");
    if (val == "Others") {
        // actve readonly
        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in laboratory.lab-acceptance-form
const test = (val) => {
    var inputFields = document.querySelector("#if_remarks_are_rejected");

    if (val == "Rejected") {
        inputFields.removeAttribute("readonly");
    } else {
        inputFields.setAttribute("readonly", true);
        inputFields.value = "";
    }
};

// can be seen in laboratory.lab_work_order-partials
const micro1 = () => {

    // variables
    var water_purpose = document.querySelector('[name="water_purpose"]');
    var micr1_hpc_plate_a = parseFloat(document.querySelector('[name="micr1_hpc_plate_a"]').value);
    var micr1_hpc_plate_b = parseFloat(document.querySelector('[name="micr1_hpc_plate_b"]').value);
    var micr1_hpc_average = document.querySelector('[name="micr1_hpc_average"]');
    var micr1_hpc_difference = document.querySelector('[name="micr1_hpc_difference"]');
    var micr1_hpc_final_result = document.querySelector('[name="micr1_hpc_final_result"]');
    var micr1_hpc_remarks = document.querySelector('[name="micr1_hpc_remarks"]');

    watersample = water_purpose.value; // Drinking | Dialysis | Others

    // computation
    var microvalues = micr1_hpc_plate_a + micr1_hpc_plate_b;
    var averagecolony = microvalues / 2;
    var roundedAverage = Math.ceil(averagecolony);
    var microdifference = Math.abs(micr1_hpc_plate_a - micr1_hpc_plate_b) / microvalues / 2;
    var roundedNumber = Math.round(roundedAverage / 10) * 10;

    if (watersample == "Dialysis"){ // DIALYSIS - IF THE roundedAverage IS >200 REMARKS WILL STILL BE "FAIL"
        micr1_hpc_remarks.value = roundedAverage >= 200 ? 'FAIL' : 'PASS';
    } else { // IF [Final Result] >= 500, [Final Result Remarks] = FAIL
        micr1_hpc_remarks.value = roundedAverage >= 500 ? 'FAIL' : 'PASS';
    }

    // global
    micr1_hpc_average.value = roundedAverage;
    micr1_hpc_difference.value = microdifference.toFixed(3);

    if (micr1_hpc_average.value >= 500) {
        micr1_hpc_final_result.value = ">500 est";
    }
    else if (micr1_hpc_average.value <= 0) {
        micr1_hpc_final_result.value = "<1.0";
    }
    else {
        micr1_hpc_final_result.value = roundedNumber.toFixed(0);
    }
    
};

// can be seen in laboratory.lab_work_order-partials
const micro2 = () => {
    var micr2_ec_24 = document.querySelector('[name="micr2_ec_24"]').value;
    var micr2_tc_final_result = document.querySelector(
        '[name="micr2_tc_final_result"]'
    );
    var micr2_tc_remarks = document.querySelector('[name="micr2_tc_remarks"]');

    if (micr2_ec_24.length > 0 && micr2_ec_24.length > 0) {
        if (micr2_ec_24 == 0) {
            micr2_tc_final_result.value = "< 1.1";
        } else if (micr2_ec_24 == 1) {
            micr2_tc_final_result.value = "1.1";
        } else if (micr2_ec_24 == 2) {
            micr2_tc_final_result.value = "2.6";
        } else if (micr2_ec_24 == 3) {
            micr2_tc_final_result.value = "4.6";
        } else if (micr2_ec_24 == 4) {
            micr2_tc_final_result.value = "8.0";
        } else if (micr2_ec_24 >= 5) {
            micr2_tc_final_result.value = "> 8.0";
        }

        if (micr2_tc_final_result.value == "< 1.1") {
            micr2_tc_remarks.value = "PASSED";
        } else {
            micr2_tc_remarks.value = "FAILED";
        }
    } else {
        micr2_tc_final_result.value = "";
        micr2_tc_remarks.value = "";
    }
};

const micro3 = () => {
    var micr3_brillant_48 = parseFloat(
        document.querySelector('[name="micr3_brillant_48"]').value
    );
    var micr3_final_result = document.querySelector(
        '[name="micr3_final_result"]'
    );
    var micr3_remarks = document.querySelector('[name="micr3_remarks"]');

    if (micr3_brillant_48 >= 0) {
        if (micr3_brillant_48 == 0) {
            micr3_final_result.value = "<1.1";
        } else if (micr3_brillant_48 == 1) {
            micr3_final_result.value = "1.1";
        } else if (micr3_brillant_48 == 2) {
            micr3_final_result.value = "2.6";
        } else if (micr3_brillant_48 == 3) {
            micr3_final_result.value = "4.6";
        } else if (micr3_brillant_48 == 4) {
            micr3_final_result.value = "8.0";
        } else if (micr3_brillant_48 >= 5) {
            micr3_final_result.value = ">8.0";
        }
        if (micr3_final_result.value == "<1.1") {
            micr3_remarks.value = "PASSED";
        } else {
            micr3_remarks.value = "FAILED";
        }
    } else {
        micr3_final_result.value = "";
        micr3_remarks.value = "";
    }
};

// micro 4

const micro4 = () => {
    var micr4_color_of_the_sample = document.querySelector('[name="micr4_color_of_the_sample"]');
    var micr4_fluorescence = document.querySelector('[name="micr4_fluorescence"]').value;
    var micr4_final_result = document.querySelector('[name="micr4_final_result"]');
    var micr4_final_result_remark = document.querySelector('[name="micr4_final_result_remark"]');

    // if Fluorescence = NON-FLUORESCENT = ABSENT = PASS
    micr4_final_result.value = micr4_fluorescence == 'Non-Fluorescence' ? 'Absent' : 'Present';
    micr4_final_result_remark.value = micr4_final_result.value == 'Absent' ? 'Pass' : 'Fail';
};

// can be seen in laboratory.lab_work_order-partials
// chem1
const chem1 = () => {
    var chem1_instrument_reading_1 = document.querySelector('[name="chem1_instrument_reading_1"]').value;
    var chem1_instrument_reading_2 = document.querySelector('[name="chem1_instrument_reading_2"]').value;
    var chem1_instrument_reading_3 = document.querySelector('[name="chem1_instrument_reading_3"]').value;
    var chem1_average_instrument_reading = document.querySelector('[name="chem1_average_instrument_reading"]');
    var chem1_final_result = document.querySelector('[name="chem1_final_result"]');
    var chem1_final_result_remarks = document.querySelector('[name="chem1_final_result_remarks"]');

    var reading1 = parseFloat(chem1_instrument_reading_1);
    var reading2 = parseFloat(chem1_instrument_reading_2);
    var reading3 = parseFloat(chem1_instrument_reading_3);

    var averageReading = (reading1 + reading2 + reading3) / 3;

    if (averageReading < 6.5 || averageReading > 8.5) {
        chem1_final_result_remarks.value = "FAIL";
    } else {
        chem1_final_result_remarks.value = "PASS";
    }

    chem1_average_instrument_reading.value = averageReading.toFixed(2); // eg. 5.33
    chem1_final_result.value = Math.round(averageReading); // eg. 5
};

// chem2

const chem2 = () => {
    var chem2_instrument_reading_1 = parseFloat(document.querySelector('[name="chem2_instrument_reading_1"]').value);
    var chem2_instrument_reading_2 = parseFloat(document.querySelector('[name="chem2_instrument_reading_2"]').value);
    var chem2_instrument_reading_3 = parseFloat(document.querySelector('[name="chem2_instrument_reading_3"]').value);
    var chem2_average_instrument_reading = document.querySelector('[name="chem2_average_instrument_reading"]');
    var chem2_final_result = document.querySelector('[name="chem2_final_result"]');
    var chem2_final_result_remarks = document.querySelector('[name="chem2_final_result_remarks"]');

    var averageReading2 = (chem2_instrument_reading_1 + chem2_instrument_reading_2 + chem2_instrument_reading_3) / 3;

    if (averageReading2 <= 50.0) {
        chem2_final_result_remarks.value = "PASS";
    } else {
        chem2_final_result_remarks.value = "FAIL";
    }
    chem2_average_instrument_reading.value = averageReading2.toFixed(2);
    chem2_final_result.value = averageReading2.toFixed(0);
};

// chem3

const chem3 = () => {
    var chem3_initial_wt_of_evaporating_dish_replicate_1 = parseFloat(document.querySelector(
            '[name="chem3_initial_wt_of_evaporating_dish_replicate_1"]'
        ).value
    );
    var chem3_final_wt_of_evaporating_dish_replicate_1 = parseFloat(
        document.querySelector(
            '[name="chem3_final_wt_of_evaporating_dish_replicate_1"]'
        ).value
    );
    var chem3_wt_of_residue_replicate_1 = parseFloat(
        document.querySelector('[name="chem3_wt_of_residue_replicate_1"]').value
    );
    var chem3_initial_wt_of_evaporating_dish_replicate_2 = parseFloat(
        document.querySelector(
            '[name="chem3_initial_wt_of_evaporating_dish_replicate_2"]'
        ).value
    );
    var chem3_final_wt_of_evaporating_dish_replicate_2 = parseFloat(
        document.querySelector(
            '[name="chem3_final_wt_of_evaporating_dish_replicate_2"]'
        ).value
    );
    var chem3_wt_of_residue_replicate_2 = parseFloat(
        document.querySelector('[name="chem3_wt_of_residue_replicate_2"]').value
    );
    var chem3_average_wt_of_residue = document.querySelector(
        '[name="chem3_average_wt_of_residue"]'
    );
    var chem3_final_result = document.querySelector(
        '[name="chem3_final_result"]'
    );
    var chem3_final_result_remarks = document.querySelector(
        '[name="chem3_final_result_remarks"]'
    );

    var averageReading3 =
        (chem3_initial_wt_of_evaporating_dish_replicate_1 +
            chem3_final_wt_of_evaporating_dish_replicate_1 +
            chem3_wt_of_residue_replicate_1 +
            chem3_initial_wt_of_evaporating_dish_replicate_2 +
            chem3_final_wt_of_evaporating_dish_replicate_2 +
            chem3_wt_of_residue_replicate_2) /
        6;

    if (averageReading3 <= 600) {
        chem3_final_result_remarks.value = "PASS";
    } else {
        chem3_final_result_remarks.value = "FAIL";
    }

    chem3_average_wt_of_residue.value = averageReading3.toFixed(2);
    chem3_final_result.value = averageReading3.toFixed(0);
};

// chem4

const chem4 = () => {
    var chem4_instrument_reading = parseFloat(
        document.querySelector('[name="chem4_instrument_reading"]').value
    );
    var chem4_final_result = document.querySelector(
        '[name="chem4_final_result"]'
    );
    var chem4_final_result_remarks = document.querySelector(
        '[name="chem4_final_result_remarks"]'
    );

    if (chem4_instrument_reading >= 1.5) {
        chem4_final_result_remarks.value = "FAIL";
    } else if (chem4_instrument_reading <= 0.3) {
        chem4_final_result_remarks.value = "FAIL";
    } else {
        chem4_final_result_remarks.value = "PASS";
    }

    chem4_final_result.value = chem4_instrument_reading.toFixed(0);
};

//chem 5

const chem5 = () => {
    var chem5_instrument_reading_1 = parseFloat(
        document.querySelector('[name="chem5_instrument_reading_1"]').value
    );
    var chem5_instrument_reading_2 = parseFloat(
        document.querySelector('[name="chem5_instrument_reading_2"]').value
    );
    var chem5_instrument_reading_3 = parseFloat(
        document.querySelector('[name="chem5_instrument_reading_3"]').value
    );
    var chem5_average_instrument_reading = document.querySelector(
        '[name="chem5_average_instrument_reading"]'
    );
    var chem5_final_result = document.querySelector(
        '[name="chem5_final_result"]'
    );
    var chem5_final_result_remarks = document.querySelector(
        '[name="chem5_final_result_remarks"]'
    );

    var averageReading =
        (chem5_instrument_reading_1 +
            chem5_instrument_reading_2 +
            chem5_instrument_reading_3) /
        3;

    if (averageReading <= 0.01) {
        chem5_final_result_remarks.value = "PASS";
    } else {
        chem5_final_result_remarks.value = "FAIL";
    }

    chem5_final_result.value = averageReading.toFixed(2);
    chem5_average_instrument_reading.value = averageReading.toFixed(0);
};

// chem 6

const chem6 = () => {
    var chem6_instrument_reading_1 = parseFloat(
        document.querySelector('[name="chem6_instrument_reading_1"]').value
    );
    var chem6_instrument_reading_2 = parseFloat(
        document.querySelector('[name="chem6_instrument_reading_2"]').value
    );
    var chem6_instrument_reading_3 = parseFloat(
        document.querySelector('[name="chem6_instrument_reading_3"]').value
    );
    var chem6_average_instrument_reading = document.querySelector(
        '[name="chem6_average_instrument_reading"]'
    );
    var chem6_final_result = document.querySelector(
        '[name="chem6_final_result"]'
    );
    var chem6_final_result_remarks = document.querySelector(
        '[name="chem6_final_result_remarks"]'
    );

    var averageReading =
        (chem6_instrument_reading_1 +
            chem6_instrument_reading_2 +
            chem6_instrument_reading_3) /
        3;

    chem6_average_instrument_reading.value = averageReading.toFixed(3);

    finalresult = chem6_average_instrument_reading.value;

    chem6_final_result.value = finalresult;

    if (finalresult <= 0.003) {
        chem6_final_result_remarks.value = "PASS";
    } else {
        chem6_final_result_remarks.value = "FAIL";
    }
};

//   chem 7

const chem7 = () => {
    var chem7_instrument_reading_1 = parseFloat(
        document.querySelector('[name="chem7_instrument_reading_1"]').value
    );
    var chem7_instrument_reading_2 = parseFloat(
        document.querySelector('[name="chem7_instrument_reading_2"]').value
    );
    var chem7_instrument_reading_3 = parseFloat(
        document.querySelector('[name="chem7_instrument_reading_3"]').value
    );
    var chem7_average_instrument_reading = document.querySelector(
        '[name="chem7_average_instrument_reading"]'
    );
    var chem7_final_result = document.querySelector(
        '[name="chem7_final_result"]'
    );
    var chem7_final_result_remarks = document.querySelector(
        '[name="chem7_final_result_remarks"]'
    );

    var averageReading =
        (chem7_instrument_reading_1 +
            chem7_instrument_reading_2 +
            chem7_instrument_reading_3) /
        3;

    if (averageReading <= 0.01) {
        chem7_final_result_remarks.value = "PASS";
    } else {
        chem7_final_result_remarks.value = "FAIL";
    }

    chem7_final_result.value = averageReading.toFixed(1);
    chem7_average_instrument_reading.value = averageReading.toFixed(0);
};

// chem 9

const chem9 = () => {
    var chem9_instrument_reading_1 = parseFloat(
        document.querySelector('[name="chem9_instrument_reading_1"]').value
    );
    var chem9_instrument_reading_2 = parseFloat(
        document.querySelector('[name="chem9_instrument_reading_2"]').value
    );
    var chem9_instrument_reading_3 = parseFloat(
        document.querySelector('[name="chem9_instrument_reading_3"]').value
    );
    var chem9_average_instrument_reading = document.querySelector(
        '[name="chem9_average_instrument_reading"]'
    );
    var chem9_final_result = document.querySelector(
        '[name="chem9_final_result"]'
    );
    var chem9_final_result_remarks = document.querySelector(
        '[name="chem9_final_result_remarks"]'
    );

    var averageReading =
        (chem9_instrument_reading_1 +
            chem9_instrument_reading_2 +
            chem9_instrument_reading_3) /
        3;

    if (averageReading <= 1.0) {
        chem9_final_result_remarks.value = "PASS";
    } else {
        chem9_final_result_remarks.value = "FAIL";
    }

    chem9_final_result.value = averageReading.toFixed(1);
    chem9_average_instrument_reading.value = averageReading.toFixed(0);
};

// chem 10

const chem10 = () => {
    var chem10_instrument_reading_1 = parseFloat(
        document.querySelector('[name="chem10_instrument_reading_1"]').value
    );
    var chem10_instrument_reading_2 = parseFloat(
        document.querySelector('[name="chem10_instrument_reading_2"]').value
    );
    var chem10_instrument_reading_3 = parseFloat(
        document.querySelector('[name="chem10_instrument_reading_3"]').value
    );
    var chem10_average_instrument_reading = document.querySelector(
        '[name="chem10_average_instrument_reading"]'
    );
    var chem10_final_result = document.querySelector(
        '[name="chem10_final_result"]'
    );
    var chem10_final_result_remarks = document.querySelector(
        '[name="chem10_final_result_remarks"]'
    );

    var averageReading =
        (chem10_instrument_reading_1 +
            chem10_instrument_reading_2 +
            chem10_instrument_reading_3) /
        3;

    chem10_average_instrument_reading.value = averageReading.toFixed(1);

    finalresult = chem10_average_instrument_reading.value;

    chem10_final_result.value = finalresult;

    if (finalresult <= 0.4) {
        chem10_final_result_remarks.value = "PASS";
    } else {
        chem10_final_result_remarks.value = "FAIL";
    }
};

// phychem 1

const phy1 = () => {
    var phys1_observation = document.querySelector(
        '[name="phys1_observation"]'
    ).value;
    var phys1_final_result = document.querySelector(
        '[name="phys1_final_result"]'
    );
    var phys1_final_result_remarks = document.querySelector(
        '[name="phys1_final_result_remarks"]'
    );

    if (phys1_observation == "Color without objectionable color") {
        phys1_final_result.value = phys1_observation;
        if (phys1_final_result.value == "Color without objectionable color") {
            phys1_final_result_remarks.value = "PASS";
        } else {
            phys1_final_result_remarks.value = "FAIL";
        }
    } else {
        phys1_final_result.value = "Not clear and with objectionable color";
        phys1_final_result_remarks.value = "FAIL";
    }
};

// phychem2

const phy2 = () => {
    var phys2_observation = document.querySelector(
        '[name="phys2_observation"]'
    ).value;
    var phys2_final_result = document.querySelector(
        '[name="phys2_final_result"]'
    );
    var phys2_final_result_remarks = document.querySelector(
        '[name="phys2_final_result_remarks"]'
    );

    if (phys2_observation == "No without objectionable color") {
        phys2_final_result.value = phys2_observation;
        if (phys2_final_result.value == "No without objectionable color") {
            phys2_final_result_remarks.value = "PASS";
        } else {
            phys2_final_result_remarks.value = "FAIL";
        }
    } else {
        phys2_final_result.value = "With objectionable color";
        phys2_final_result_remarks.value = "FAIL";
    }
};

// phychem3

// update

const phy3 = () => {
    var phys3_concentration_of_comparable_color_standard =
        document.querySelector(
            '[name="phys3_concentration_of_comparable_color_standard"]'
        ).value;
    var phys3_final_result = document.querySelector(
        '[name="phys3_final_result"]'
    );
    var phys3_final_result_remarks = document.querySelector(
        '[name="phys3_final_result_remarks"]'
    );

    var finalResultValue = phys3_concentration_of_comparable_color_standard;

    phys3_final_result.value = phys3_concentration_of_comparable_color_standard;
    if (finalResultValue == 10) {
        phys3_final_result_remarks.value = "PASS";
    } else {
        phys3_final_result_remarks.value = "FAIL";
    }
};

// phychem4

const phy4 = () => {
    var phys4_instrument_reading_1 = parseFloat(
        document.querySelector('[name="phys4_instrument_reading_1"]').value
    );
    var phys4_instrument_reading_2 = parseFloat(
        document.querySelector('[name="phys4_instrument_reading_2"]').value
    );
    var phys4_instrument_reading_3 = parseFloat(
        document.querySelector('[name="phys4_instrument_reading_3"]').value
    );
    var phys4_average_instrument_reading = document.querySelector(
        '[name="phys4_average_instrument_reading"]'
    );
    var phys4_final_result = document.querySelector(
        '[name="phys4_final_result"]'
    );
    var phys4_final_result_remarks = document.querySelector(
        '[name="phys4_final_result_remarks"]'
    );

    var averageReading =
        (phys4_instrument_reading_1 +
            phys4_instrument_reading_2 +
            phys4_instrument_reading_3) /
        3;

    if (averageReading <= 5) {
        phys4_final_result_remarks.value = "PASS";
    } else {
        phys4_final_result_remarks.value = "FAIL";
    }

    phys4_final_result.value = averageReading.toFixed(0);
    phys4_average_instrument_reading.value = averageReading.toFixed(0);
};

const handleCategoryClick = (category, selector) => {
    const buttons = document.querySelectorAll(".category-button");
    buttons.forEach((button) => {
        button.classList.remove(
            "text-blue-500",
            "border-b-2",
            "border-blue-500"
        );
    });

    const clickedButton = document.querySelector(selector);
    clickedButton.classList.add(
        "text-blue-500",
        "border-b-2",
        "border-blue-500"
    );

    const categories = document.querySelectorAll(".category");
    categories.forEach((categoryElement) => {
        if (categoryElement.classList.contains(category)) {
            categoryElement.style.display = "block";
        } else {
            categoryElement.style.display = "none";
        }
    });
};

const categoryClientInformation = () => {
    handleCategoryClick(
        "categoryClientInformation",
        '[onclick="categoryClientInformation()"]'
    );
};

const categoryAnalysisRequest = () => {
    handleCategoryClick(
        "categoryAnalysisRequest",
        '[onclick="categoryAnalysisRequest()"]'
    );
};

const categoryLabAcceptance = () => {
    handleCategoryClick(
        "categoryLabAcceptance",
        '[onclick="categoryLabAcceptance()"]'
    );
};

const categoryRawData = () => {
    handleCategoryClick("categoryRawData", '[onclick="categoryRawData()"]');
};

// generate random data
const getRandomData = (count) => {
    const data = [];
    for (let i = 0; i < count; i++) {
        data.push(Math.floor(Math.random() * 100));
    }
    return data;
};

const widgetsPerCityMunicipality = (val) => {
    var samplesPerCityMunicipality = document.querySelector(
        "#samplesPerCityMunicipality"
    );
    var microSamplesPerCityMunicipality = document.querySelector(
        "#microSamplesPerCityMunicipality"
    );
    var phyChemSamplesPerCityMunicipality = document.querySelector(
        "#phyChemSamplesPerCityMunicipality"
    );
    var phyChemSamplesPerMarketSegment = document.querySelector(
        "#samplphyChemSsPerMarketSegment"
    );
    var failedHPCSamplesPerCityMunicipality = document.querySelector(
        "#failedHPCSamplesPerCityMunicipality"
    );
    var totalColiformSamplesPerCityMunicipality = document.querySelector(
        "#totalColiformSamplesPerCityMunicipality"
    );
    var failedFecalColiformSamplesPerCityMunicipality = document.querySelector(
        "#failedFecalColiformSamplesPerCityMunicipality"
    );

    if (val == "No. of Samples per City/Municipality") {
        console.log(val);
        samplesPerCityMunicipality.classList.remove("hidden");
        microSamplesPerCityMunicipality.classList.add("hidden");
        phyChemSamplesPerCityMunicipality.classList.add("hidden");
        phyChemSamplesPerMarketSegment.classList.add("hidden");
        failedHPCSamplesPerCityMunicipality.classList.add("hidden");
        totalColiformSamplesPerCityMunicipality.classList.add("hidden");
        failedFecalColiformSamplesPerCityMunicipality.classList.add("hidden");
    } else if (val == "No. of Micro Samples per City/Municipality") {
        console.log(val);
        samplesPerCityMunicipality.classList.add("hidden");
        microSamplesPerCityMunicipality.classList.remove("hidden");
        phyChemSamplesPerCityMunicipality.classList.add("hidden");
        phyChemSamplesPerMarketSegment.classList.add("hidden");
        failedHPCSamplesPerCityMunicipality.classList.add("hidden");
        totalColiformSamplesPerCityMunicipality.classList.add("hidden");
        failedFecalColiformSamplesPerCityMunicipality.classList.add("hidden");
    } else if (val == "No. of Phy-Chem Samples per City/Municipality") {
        console.log(val);
        samplesPerCityMunicipality.classList.add("hidden");
        microSamplesPerCityMunicipality.classList.add("hidden");
        phyChemSamplesPerCityMunicipality.classList.remove("hidden");
        phyChemSamplesPerMarketSegment.classList.add("hidden");
        failedHPCSamplesPerCityMunicipality.classList.add("hidden");
        totalColiformSamplesPerCityMunicipality.classList.add("hidden");
        failedFecalColiformSamplesPerCityMunicipality.classList.add("hidden");
    }
};

// Market segment

function MarketSegmenthandleSelectChange(value) {
    // Hide all the div elements initially
    document.getElementById("TotalSamplesPersegment").style.display = "none";
    document.getElementById("TotalMicroSamplespersegment").style.display =
        "none";
    document.getElementById("TotalPychemSamplespersegment").style.display =
        "none";

    // Show the selected div based on the value
    if (value == "Total Samples Per segment") {
        document.getElementById("TotalSamplesPersegment").style.display =
            "block";
    } else if (value == "Total Micro Samples per segment") {
        document.getElementById("TotalMicroSamplespersegment").style.display =
            "block";
    } else if (value == "Total Pychem Samples per segment") {
        document.getElementById("TotalPychemSamplespersegment").style.display =
            "block";
    }
}
