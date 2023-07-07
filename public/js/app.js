// can be seen in service.client.create
const marketSegment = (val) => {
    var input = document.getElementById("market_segment_others");

    if (val === "Others") {
        // actve readonly
        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in service.add-analysis-request-form
const collectionPoint = (val) => {
    var input = document.getElementById("collection_point_others");
    if (val === "Others") {
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
    if (val === "Others") {
        // actve readonly
        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in service.add-analysis-request-form
const sourceOfWaterSample = (val) => {
    var input = document.getElementById("source_of_water_sample_others");
    if (val === "Others") {
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
    if (val === "Others") {
        // actve readonly
        input.removeAttribute("readonly");
    } else {
        // disable readonly
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in laboratory.lab-acceptance-form
const remarksRejected = (radio) => {
    var input = document.getElementById("if_remarks_are_rejected");

    if (radio.checked && radio.value === "Rejected") {
        input.removeAttribute("readonly");
    } else {
        input.setAttribute("readonly", "readonly");
        input.value = "";
    }
};

// can be seen in laboratory.lab_work_order-partials
const micro1 = () => {
    var micr1_hpc_plate_a = document.querySelector(
        '[name="micr1_hpc_plate_a"]'
    ).value;
    var micr1_hpc_plate_b = document.querySelector(
        '[name="micr1_hpc_plate_b"]'
    ).value;
    var micr1_hpc_average = document.querySelector(
        '[name="micr1_hpc_average"]'
    );
    var micr1_hpc_difference = document.querySelector(
        '[name="micr1_hpc_difference"]'
    );
    var micr1_hpc_remarks = document.querySelector(
        '[name="micr1_hpc_remarks"]'
    );
    var micr1_hpc_final_result = document.querySelector(
        '[name="micr1_hpc_final_result"]'
    );

    if (micr1_hpc_plate_a.length > 0 && micr1_hpc_plate_b.length > 0) {
        // COMPUTE Average
        micr1_hpc_average.value = Math.ceil(
            (parseFloat(micr1_hpc_plate_a) + parseFloat(micr1_hpc_plate_b)) / 2
        );

        // COMPUTE Difference
        micr1_hpc_difference.value = Math.ceil(
            parseFloat(
                (
                    ((parseFloat(micr1_hpc_plate_a) -
                        parseFloat(micr1_hpc_plate_b)) /
                        ((parseFloat(micr1_hpc_plate_a) +
                            parseFloat(micr1_hpc_plate_b)) /
                            2)) *
                    100
                ).toFixed(2)
            )
        );

        if (micr1_hpc_average.value >= 499) {
            micr1_hpc_remarks.value = "FAIL";
            micr1_hpc_final_result.value = "≥ 500 est";
        } else {
            micr1_hpc_remarks.value = "PASSED";
            micr1_hpc_final_result.value = "≤ 500 est";
        }
    } else {
        micr1_hpc_average.value = "";
        micr1_hpc_difference.value = "";
        micr1_hpc_remarks.value = "";
        micr1_hpc_final_result.value = "";
    }
};

// can be seen in laboratory.lab_work_order-partials
const micro2 = () => {
    var micr2_tc_24 = document.querySelector('[name="micr2_tc_24"]').value;
    var micr2_tc_48 = document.querySelector('[name="micr2_tc_48"]').value;
    var micr2_tc_final_result = document.querySelector(
        '[name="micr2_tc_final_result"]'
    );
    var micr2_tc_remarks = document.querySelector('[name="micr2_tc_remarks"]');

    if (micr2_tc_24.length > 0 && micr2_tc_48.length > 0) {
        if (micr2_tc_24 == 0) {
            micr2_tc_final_result.value = "< 1.1";
        } else if (micr2_tc_24 == 1) {
            micr2_tc_final_result.value = "1.1";
        } else if (micr2_tc_24 == 2) {
            micr2_tc_final_result.value = "2.6";
        } else if (micr2_tc_24 == 3) {
            micr2_tc_final_result.value = "4.6";
        } else if (micr2_tc_24 == 4) {
            micr2_tc_final_result.value = "8.0";
        } else if (micr2_tc_24 >= 5) {
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

// can be seen in laboratory.lab_work_order-partials
const micro3 = () => {
    var micr3_lauryl_24 = document.querySelector(
        '[name="micr3_lauryl_24"]'
    ).value;
    var micr3_lauryl_48 = document.querySelector(
        '[name="micr3_lauryl_48"]'
    ).value;
    var micr3_brillant_24 = document.querySelector(
        '[name="micr3_brillant_24"]'
    ).value;
    var micr3_brillant_48 = document.querySelector(
        '[name="micr3_brillant_48"]'
    ).value;
    var micr3_final_result = document.querySelector(
        '[name="micr3_final_result"]'
    );
    var micr3_remarks = document.querySelector('[name="micr3_remarks"]');

    if (micr3_lauryl_48.length > 0) {
        if (micr3_lauryl_48 == 0) {
            micr3_final_result.value = "< 1.1";
        } else if (micr3_lauryl_48 == 1) {
            micr3_final_result.value = "1.1";
        } else if (micr3_lauryl_48 == 2) {
            micr3_final_result.value = "2.6";
        } else if (micr3_lauryl_48 == 3) {
            micr3_final_result.value = "4.6";
        } else if (micr3_lauryl_48 == 4) {
            micr3_final_result.value = "8.0";
        } else if (micr3_lauryl_48 >= 5) {
            micr3_final_result.value = "> 8.0";
        }

        if (micr3_final_result == "< 1.1") {
            micr3_remarks.value = "PASSED";
        } else {
            micr3_remarks.value = "FAILED";
        }
    } else {
        micr3_final_result.value = "";
        micr3_remarks.value = "";
    }
};

// can be seen in laboratory.lab_work_order-partials

// chem1

const chem1 = () => {
    var chem1_instrument_reading_1 = document.querySelector(
        '[name="chem1_instrument_reading_1"]'
    ).value;
    var chem1_instrument_reading_2 = document.querySelector(
        '[name="chem1_instrument_reading_2"]'
    ).value;
    var chem1_instrument_reading_3 = document.querySelector(
        '[name="chem1_instrument_reading_3"]'
    ).value;
    var chem1_average_instrument_reading = document.querySelector(
        '[name="chem1_average_instrument_reading"]'
    );
    var chem1_final_result = document.querySelector(
        '[name="chem1_final_result"]'
    );
    var chem1_final_result_remarks = document.querySelector(
        '[name="chem1_final_result_remarks"]'
    );

    var reading1 = parseFloat(chem1_instrument_reading_1);
    var reading2 = parseFloat(chem1_instrument_reading_2);
    var reading3 = parseFloat(chem1_instrument_reading_3);

    var averageReading = (reading1 + reading2 + reading3) / 3;

    if (averageReading.toFixed(0) < 6.5 || averageReading.toFixed(0) > 8.5) {
        chem1_final_result_remarks.value = "FAIL";
    } else {
        chem1_final_result_remarks.value = "PASS";
    }

    if (averageReading < 1.1) {
        chem1_final_result.value = averageReading.toFixed(1);
        chem1_average_instrument_reading.value = averageReading.toFixed(1);
    } else if (averageReading < 2.6) {
        chem1_final_result.value = averageReading.toFixed(1);
        chem1_average_instrument_reading.value = averageReading.toFixed(1);
    } else if (averageReading < 4.6) {
        chem1_final_result.value = averageReading.toFixed(1);
        chem1_average_instrument_reading.value = averageReading.toFixed(1);
    } else if (averageReading < 8.0) {
        chem1_final_result.value = averageReading.toFixed(1);
        chem1_average_instrument_reading.value = averageReading.toFixed(1);
    } else {
        chem1_final_result.value = averageReading.toFixed(1);
        chem1_average_instrument_reading.value = averageReading.toFixed(1);
    }
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

    chem2_final_result.value = averageReading2.toFixed(1);
    chem2_average_instrument_reading.value = averageReading2.toFixed(0);
};

// chem3

const chem3 = () => {
    var chem3_initial_wt_of_evaporating_dish_replicate_1 = parseFloat(document.querySelector('[name="chem3_initial_wt_of_evaporating_dish_replicate_1"]').value);
    var chem3_final_wt_of_evaporating_dish_replicate_1 = parseFloat(document.querySelector('[name="chem3_final_wt_of_evaporating_dish_replicate_1"]').value);
    var chem3_wt_of_residue_replicate_1 = parseFloat(document.querySelector('[name="chem3_wt_of_residue_replicate_1"]').value);
    var chem3_initial_wt_of_evaporating_dish_replicate_2 = parseFloat(document.querySelector('[name="chem3_initial_wt_of_evaporating_dish_replicate_2"]').value);
    var chem3_final_wt_of_evaporating_dish_replicate_2 = parseFloat(document.querySelector('[name="chem3_final_wt_of_evaporating_dish_replicate_2"]').value);
    var chem3_wt_of_residue_replicate_2 = parseFloat(document.querySelector('[name="chem3_wt_of_residue_replicate_2"]').value);
    var chem3_average_wt_of_residue = document.querySelector('[name="chem3_average_wt_of_residue"]');
    var chem3_final_result = document.querySelector('[name="chem3_final_result"]');
    var chem3_final_result_remarks = document.querySelector('[name="chem3_final_result_remarks"]');

    var averageReading3 = (chem3_initial_wt_of_evaporating_dish_replicate_1 + chem3_final_wt_of_evaporating_dish_replicate_1 + chem3_wt_of_residue_replicate_1 + chem3_initial_wt_of_evaporating_dish_replicate_2 + chem3_final_wt_of_evaporating_dish_replicate_2 + chem3_wt_of_residue_replicate_2) / 6;

    if (averageReading3 <= 600) {
        chem3_final_result_remarks.value = "PASS";
    } else {
        chem3_final_result_remarks.value = "FAIL";
    }

    chem3_final_result.value = averageReading3.toFixed(1);
    chem3_average_wt_of_residue.value = averageReading3.toFixed(0);
};


// chem4

const chem4 = () => {
    var chem4_instrument_reading = parseFloat(document.querySelector('[name="chem4_instrument_reading"]').value);
    var chem4_final_result = document.querySelector('[name="chem4_final_result"]');
    var chem4_final_result_remarks = document.querySelector('[name="chem4_final_result_remarks"]');

    if (chem4_instrument_reading > 1.5) {
        chem4_final_result_remarks.value = "FAIL";
    } else if (chem4_instrument_reading < 0.3) {
        chem4_final_result_remarks.value = "FAIL";
    } else {
        chem4_final_result_remarks.value = "PASS";
    }

    chem4_final_result.value = chem4_instrument_reading.toFixed(0);
};

//chem 5

const chem5 = () => {
    var chem5_instrument_reading_1 = parseFloat(document.querySelector('[name="chem5_instrument_reading_1"]').value);
    var chem5_instrument_reading_2 = parseFloat(document.querySelector('[name="chem5_instrument_reading_2"]').value);
    var chem5_instrument_reading_3 = parseFloat(document.querySelector('[name="chem5_instrument_reading_3"]').value);
    var chem5_average_instrument_reading = document.querySelector('[name="chem5_average_instrument_reading"]');
    var chem5_final_result = document.querySelector('[name="chem5_final_result"]');
    var chem5_final_result_remarks = document.querySelector('[name="chem5_final_result_remarks"]');

    var averageReading = (chem5_instrument_reading_1 + chem5_instrument_reading_2 + chem5_instrument_reading_3) / 3;

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
    var chem6_instrument_reading_1 = parseFloat(document.querySelector('[name="chem6_instrument_reading_1"]').value);
    var chem6_instrument_reading_2 = parseFloat(document.querySelector('[name="chem6_instrument_reading_2"]').value);
    var chem6_instrument_reading_3 = parseFloat(document.querySelector('[name="chem6_instrument_reading_3"]').value);
    var chem6_average_instrument_reading = document.querySelector('[name="chem6_average_instrument_reading"]');
    var chem6_final_result = document.querySelector('[name="chem6_final_result"]');
    var chem6_final_result_remarks = document.querySelector('[name="chem6_final_result_remarks"]');

    var averageReading = (chem6_instrument_reading_1 + chem6_instrument_reading_2 + chem6_instrument_reading_3)/3;

    if (averageReading <= 0.003) {
      chem6_final_result_remarks.value = "PASS";
    } else {
      chem6_final_result_remarks.value = "FAIL";
    }

    chem6_final_result.value = averageReading.toFixed(1);
    chem6_average_instrument_reading.value = averageReading.toFixed(0);
  };

//   chem 7

const chem7 = () => {
    var chem7_instrument_reading_1 = parseFloat(document.querySelector('[name="chem7_instrument_reading_1"]').value);
    var chem7_instrument_reading_2 = parseFloat(document.querySelector('[name="chem7_instrument_reading_2"]').value);
    var chem7_instrument_reading_3 = parseFloat(document.querySelector('[name="chem7_instrument_reading_3"]').value);
    var chem7_average_instrument_reading = document.querySelector('[name="chem7_average_instrument_reading"]');
    var chem7_final_result = document.querySelector('[name="chem7_final_result"]');
    var chem7_final_result_remarks = document.querySelector('[name="chem7_final_result_remarks"]');

    var averageReading = (chem7_instrument_reading_1 + chem7_instrument_reading_2 + chem7_instrument_reading_3) / 3;

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
    var chem9_instrument_reading_1 = parseFloat(document.querySelector('[name="chem9_instrument_reading_1"]').value);
    var chem9_instrument_reading_2 = parseFloat(document.querySelector('[name="chem9_instrument_reading_2"]').value);
    var chem9_instrument_reading_3 = parseFloat(document.querySelector('[name="chem9_instrument_reading_3"]').value);
    var chem9_average_instrument_reading = document.querySelector('[name="chem9_average_instrument_reading"]');
    var chem9_final_result = document.querySelector('[name="chem9_final_result"]');
    var chem9_final_result_remarks = document.querySelector('[name="chem9_final_result_remarks"]');

    var averageReading = (chem9_instrument_reading_1 + chem9_instrument_reading_2 + chem9_instrument_reading_3) / 3;

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
    var chem10_instrument_reading_1 = parseFloat(document.querySelector('[name="chem10_instrument_reading_1"]').value);
    var chem10_instrument_reading_2 = parseFloat(document.querySelector('[name="chem10_instrument_reading_2"]').value);
    var chem10_instrument_reading_3 = parseFloat(document.querySelector('[name="chem10_instrument_reading_3"]').value);
    var chem10_average_instrument_reading = document.querySelector('[name="chem10_average_instrument_reading"]');
    var chem10_final_result = document.querySelector('[name="chem10_final_result"]');
    var chem10_final_result_remarks = document.querySelector('[name="chem10_final_result_remarks"]');

    var averageReading = (chem10_instrument_reading_1 + chem10_instrument_reading_2 + chem10_instrument_reading_3) / 3;

    if (averageReading <= 0.4) {
        chem10_final_result_remarks.value = "PASS";
    } else {
        chem10_final_result_remarks.value = "FAIL";
    }

    chem10_final_result.value = averageReading.toFixed(1);
    chem10_average_instrument_reading.value = averageReading.toFixed(0);
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
