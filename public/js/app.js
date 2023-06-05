// can be seen in service.client.create
function marketSegment(val) {

    if (val === "Others") {
        // actve readonly
        var input = document.getElementById('market_segment_others');
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        var input = document.getElementById('market_segment_others');
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
function collectionPoint(val) {

    if (val === "Others") {
        // actve readonly
        var input = document.getElementById('collection_point_others');
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        var input = document.getElementById('collection_point_others');
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
function samplingLocationAddress(val) {

    if (val === "Others") {
        // actve readonly
        var input = document.getElementById('sampling_location_address_others');
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        var input = document.getElementById('sampling_location_address_others');
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
function sourceOfWaterSample(val) {

    if (val === "Others") {
        // actve readonly
        var input = document.getElementById('source_of_water_sample_others');
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        var input = document.getElementById('source_of_water_sample_others');
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in service.add-analysis-request-form
function waterPurpose(val) {

    if (val === "Others") {
        // actve readonly
        var input = document.getElementById('water_purpose_others');
        input.removeAttribute('readonly');
    }
    else {
        // disable readonly
        var input = document.getElementById('water_purpose_others');
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}

// can be seen in laboratory.lab-acceptance-form
function remarksRejected(radio) {
    var input = document.getElementById('if_remarks_are_rejected');

    if (radio.checked && radio.value === 'Rejected') {
        input.removeAttribute('readonly');
    } else {
        input.setAttribute('readonly', 'readonly');
        input.value = '';
    }
}


