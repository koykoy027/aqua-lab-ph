$(document).ready(function () {
    // Fetch regions and populate the "region" dropdown
    $.ajax({
        url: "/regions",
        type: "GET",
        success: function (data) {
            var regionDropdown = $("#api_region");
            $.each(data, function (key, value) {
                regionDropdown.append(
                    $("<option>", {
                        value: value.region_code,
                        text: value.region_name,
                    })
                );
            });
        },
    });
});

$(document).ready(function () {
    $("#api_region").change(function () {
        var regionCode = $(this).val();
        if (regionCode) {
            $.get("/provinces/" + regionCode, function (data) {
                $("#api_province").empty();
                $("#api_city").empty();
                $("#api_barangay").empty();
                $("#api_province").append(
                    '<option value="">Select Province</option>'
                );
                $("#api_city").append('<option value="">Select City</option>');
                $("#api_barangay").append(
                    '<option value="">Select Barangay</option>'
                );

                $.each(data, function (key, value) {
                    $("#api_province").append(
                        '<option value="' +
                            value.province_code +
                            '">' +
                            value.province_name +
                            "</option>"
                    );
                });
            });
        } else {
            $("#api_province").empty();
            $("#api_city").empty();
            $("#api_barangay").empty();
        }
    });

    $("#api_province").change(function () {
        var provinceCode = $(this).val();
        if (provinceCode) {
            $.get("/cities/" + provinceCode, function (data) {
                $("#api_city").empty();
                $("#api_barangay").empty();
                $("#api_city").append('<option value="">Select City</option>');
                $("#api_barangay").append(
                    '<option value="">Select Barangay</option>'
                );
                $.each(data, function (key, value) {
                    $("#api_city").append(
                        '<option value="' +
                            value.city_code +
                            '">' +
                            value.city_name +
                            "</option>"
                    );
                });
            });
        } else {
            $("#api_city").empty();
            $("#api_barangay").empty();
        }
    });

    $("#api_city").change(function () {
        var cityCode = $(this).val();
        if (cityCode) {
            $.get("/barangays/" + cityCode, function (data) {
                $("#api_barangay").empty();
                $("#api_barangay").append(
                    '<option value="">Select Barangay</option>'
                );
                $.each(data, function (key, value) {
                    $("#api_barangay").append(
                        '<option value="' +
                            value.brgy_code +
                            '">' +
                            value.brgy_name +
                            "</option>"
                    );
                });
            });
        } else {
            $("#api_barangay").empty();
        }
    });

    // get value of selected in dropdown so we can get the text value and save in database
    $("#api_region").change(function () {
        $("#region").val($("#api_region option:selected").text());
    });
    $("#api_province").change(function () {
        $("#province").val($("#api_province option:selected").text());
    });
    $("#api_city").change(function () {
        $("#municipality_or_city").val($("#api_city option:selected").text());
    });
    $("#api_barangay").change(function () {
        $("#barangay_name").val($("#api_barangay option:selected").text());
    });
});
