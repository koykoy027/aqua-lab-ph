// can be seen in service.client.create
const SampleSegment = (val) => {
    var input = document.getElementById('Sample_segment_others');

    if (val === "Others") {
        // actve readonly
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
const collectionPoint = (val) => {
    var input = document.getElementById('collection_point_others');
    if (val === "Others") {
        // actve readonly

        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
const samplingLocationAddress = (val) => {
    var input = document.getElementById('sampling_location_address_others');
    if (val === "Others") {
        // actve readonly
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
const sourceOfWaterSample = (val) => {
    var input = document.getElementById('source_of_water_sample_others');
    if (val === "Others") {
        // actve readonly
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
const waterPurpose = (val) => {
    var input = document.getElementById('water_purpose_others');
    if (val === "Others") {
        // actve readonly
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in laboratory.lab-acceptance-form
const remarksRejected = (radio) => {
    var input = document.getElementById('if_remarks_are_rejected');

    if (radio.checked && radio.value === 'Rejected') {
        input.removeAttribute('readonly');
    } else {
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in laboratory.lab_work_order-partials
const micro1 = () => {
    var micr1_hpc_plate_a = document.querySelector('[name="micr1_hpc_plate_a"]').value;
    var micr1_hpc_plate_b = document.querySelector('[name="micr1_hpc_plate_b"]').value;
    var micr1_hpc_average = document.querySelector('[name="micr1_hpc_average"]');
    var micr1_hpc_difference = document.querySelector('[name="micr1_hpc_difference"]');
    var micr1_hpc_remarks = document.querySelector('[name="micr1_hpc_remarks"]');
    var micr1_hpc_final_result = document.querySelector('[name="micr1_hpc_final_result"]');

    if (micr1_hpc_plate_a.length > 0 && micr1_hpc_plate_b.length > 0) {
        // COMPUTE Average
        micr1_hpc_average.value = Math.ceil((parseFloat(micr1_hpc_plate_a) + parseFloat(micr1_hpc_plate_b)) / 2);

        // COMPUTE Difference
        micr1_hpc_difference.value = Math.ceil(parseFloat(((parseFloat(micr1_hpc_plate_a) - parseFloat(micr1_hpc_plate_b)) /
            ((parseFloat(micr1_hpc_plate_a) + parseFloat(micr1_hpc_plate_b)) / 2) * 100).toFixed(2)));

        if (micr1_hpc_average.value >= 499) {
            micr1_hpc_remarks.value = 'FAIL';
            micr1_hpc_final_result.value = '≥ 500 est';
        } else {
            micr1_hpc_remarks.value = 'PASSED';
            micr1_hpc_final_result.value = '≤ 500 est';
        }
    } else {
        micr1_hpc_average.value = '';
        micr1_hpc_difference.value = '';
        micr1_hpc_remarks.value = '';
        micr1_hpc_final_result.value = '';
    }
}

// can be seen in laboratory.lab_work_order-partials
const micro2 = () => {
    var micr2_tc_24 = document.querySelector('[name="micr2_tc_24"]').value;
    var micr2_tc_48 = document.querySelector('[name="micr2_tc_48"]').value;
    var micr2_tc_final_result = document.querySelector('[name="micr2_tc_final_result"]');
    var micr2_tc_remarks = document.querySelector('[name="micr2_tc_remarks"]');

    if (micr2_tc_24.length > 0 && micr2_tc_48.length > 0) {
        if (micr2_tc_24 == 0) {
            micr2_tc_final_result.value = '< 1.1';
        } else if (micr2_tc_24 == 1) {
            micr2_tc_final_result.value = '1.1';
        } else if (micr2_tc_24 == 2) {
            micr2_tc_final_result.value = '2.6';
        } else if (micr2_tc_24 == 3) {
            micr2_tc_final_result.value = '4.6';
        } else if (micr2_tc_24 == 4) {
            micr2_tc_final_result.value = '8.0';
        } else if (micr2_tc_24 >= 5) {
            micr2_tc_final_result.value = '> 8.0';
        }

        if (micr2_tc_final_result.value == '< 1.1') {
            micr2_tc_remarks.value = 'PASSED';
        } else {
            micr2_tc_remarks.value = 'FAILED';
        }
    } else {
        micr2_tc_final_result.value = '';
        micr2_tc_remarks.value = '';
    }
}

// can be seen in laboratory.lab_work_order-partials
const micro3 = () => {

    var micr3_lauryl_24 = document.querySelector('[name="micr3_lauryl_24"]').value;
    var micr3_lauryl_48 = document.querySelector('[name="micr3_lauryl_48"]').value;
    var micr3_brillant_24 = document.querySelector('[name="micr3_brillant_24"]').value;
    var micr3_brillant_48 = document.querySelector('[name="micr3_brillant_48"]').value;
    var micr3_final_result = document.querySelector('[name="micr3_final_result"]');
    var micr3_remarks = document.querySelector('[name="micr3_remarks"]');


    if (micr3_lauryl_48.length > 0) {

        if (micr3_lauryl_48 == 0) {
            micr3_final_result.value = '< 1.1';
        }
        else if (micr3_lauryl_48 == 1) {
            micr3_final_result.value = '1.1';

        }
        else if (micr3_lauryl_48 == 2) {
            micr3_final_result.value = '2.6';

        }
        else if (micr3_lauryl_48 == 3) {
            micr3_final_result.value = '4.6';

        } else if (micr3_lauryl_48 == 4) {
            micr3_final_result.value = '8.0';

        } else if (micr3_lauryl_48 >= 5) {
            micr3_final_result.value = '> 8.0';
        }

        if (micr3_final_result == '< 1.1') {
            micr3_remarks.value = 'PASSED';
        } else {
            micr3_remarks.value = 'FAILED';
        }

    } else {
        micr3_final_result.value = '';
        micr3_remarks.value = '';
    }

}



const handleCategoryClick = (category, selector) => {
    const buttons = document.querySelectorAll('.category-button');
    buttons.forEach((button) => {
        button.classList.remove('text-blue-500', 'border-b-2', 'border-blue-500');
    });

    const clickedButton = document.querySelector(selector);
    clickedButton.classList.add('text-blue-500', 'border-b-2', 'border-blue-500');

    const categories = document.querySelectorAll('.category');
    categories.forEach((categoryElement) => {
        if (categoryElement.classList.contains(category)) {
            categoryElement.style.display = 'block';
        } else {
            categoryElement.style.display = 'none';
        }
    });
};

const categoryClientInformation = () => {
    handleCategoryClick('categoryClientInformation', '[onclick="categoryClientInformation()"]');
};

const categoryAnalysisRequest = () => {
    handleCategoryClick('categoryAnalysisRequest', '[onclick="categoryAnalysisRequest()"]');
};

const categoryLabAcceptance = () => {
    handleCategoryClick('categoryLabAcceptance', '[onclick="categoryLabAcceptance()"]');
};

const categoryRawData = () => {
    handleCategoryClick('categoryRawData', '[onclick="categoryRawData()"]');
};



// chart 1

const chart = () => {
    const labels = ["Caloocan","Muntinlupa","Baguio","Samar","cagayan"];
const data = {
  labels: labels,
  datasets: [
    {
      label: "Samples per Sample/Municipality",
      backgroundColor: "#06b6d4",
      borderColor: '#06b6d4',
      data: [0, 10, 5, 2, 20, 30, 45,50,12,45,11,90],
      fill: false,
    },
  ],
};

const configLineChart = {
  type: "line",
  data,
  options: {},
};

var chartLine = new Chart(
  document.getElementById("chartLine"),
  configLineChart
);
};

// chart 2
const chart_2 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
            label: "No. of Samples per Market Segment",
            backgroundColor: "#06b6d4",
            borderColor: '#06b6d4',
            data: [0, 10, 5, 2, 20, 30, 45,50,12,45,11,90],
            fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_2 = new Chart(
      document.getElementById("chartLine_2"),
      configLineChart
    );
  };

// chart3

const chart_3 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Micro Samples per Sample/Municipality",
          backgroundColor: "#06b6d4",
      borderColor: '#06b6d4',
          data: [15, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_3 = new Chart(
      document.getElementById("chartLine_3"),
      configLineChart
    );
  };

//   chart 4

const chart_4 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
            label: "No. of Micro Samples per Market Segment",
            backgroundColor: "#06b6d4",
            borderColor: '#06b6d4',
            data: [0, 10, 5, 2, 20, 30, 45,50,12,45,11,90],
            fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_4 = new Chart(
      document.getElementById("chartLine_4"),
      configLineChart
    );
  };

//   chart 5

const chart_5 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Phy-Chem Samples per City/Municipality",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [15, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_5 = new Chart(
      document.getElementById("chartLine_5"),
      configLineChart
    );
  };

//   chart_6

const chart_6 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Phy-Chem Samples per Sample Segment",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [5, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_6 = new Chart(
      document.getElementById("chartLine_6"),
      configLineChart
    );
  };

//   chart 7

const chart_7 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Samples per FSR",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [5, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_7 = new Chart(
      document.getElementById("chartLine_7"),
      configLineChart
    );
  };

//   chart 8

const chart_8 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Micro Samples per FSR",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [5, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_8 = new Chart(
      document.getElementById("chartLine_8"),
      configLineChart
    );
  };

//   chart 9

const chart_9 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Phy-Chem Samples per FSR",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [5, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_9 = new Chart(
      document.getElementById("chartLine_9"),
      configLineChart
    );
  };

//   chart 10

const chart_10 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Phy-Chem Samples per FSR",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [5, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_10 = new Chart(
      document.getElementById("chartLine_10"),
      configLineChart
    );
  };

//   chart 11

const chart_11 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Phy-Chem Samples per FSR",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [5, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_11 = new Chart(
      document.getElementById("chartLine_11"),
      configLineChart
    );
  };

//   chart 12

const chart_12 = () => {
    const labels = ["Sample A", "Sample B", "Sample C", "Sample D", "Sample E"];
    const data = {
      labels: labels,
      datasets: [
        {
          label: "No. of Phy-Chem Samples per FSR",
          backgroundColor: "#06b6d4",
          borderColor: '#06b6d4',
          data: [5, 8, 20, 12, 6],
          fill: false,
        },
      ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine_12 = new Chart(
      document.getElementById("chartLine_12"),
      configLineChart
    );
  };
