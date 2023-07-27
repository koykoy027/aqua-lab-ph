
var my_handlers = {

fill_provinces: function () {

    var region_code = $(this).val();
    $('#api_province').ph_locations('fetch_list', [{ "region_code": region_code }]);

},

fill_cities: function () {

    var province_code = $(this).val();
    $('#api_city').ph_locations('fetch_list', [{ "province_code": province_code }]);
},


fill_barangays: function () {

    var city_code = $(this).val();
    $('#api_barangay').ph_locations('fetch_list', [{ "city_code": city_code }]);
}
};

$(function () {
    $('#api_region').on('change', my_handlers.fill_provinces);
    $('#api_province').on('change', my_handlers.fill_cities);
    $('#api_city').on('change', my_handlers.fill_barangays);

    $('#api_region').ph_locations({ 'location_type': 'regions' });
    $('#api_province').ph_locations({ 'location_type': 'provinces' });
    $('#api_city').ph_locations({ 'location_type': 'cities' });
    $('#api_barangay').ph_locations({ 'location_type': 'barangays' });
    $('#api_region').ph_locations('fetch_list');

    $('#api_region').change(function(){
        $('#region').val($("#api_region option:selected").text());
    });
    $('#api_province').change(function(){
        $('#province').val($("#api_province option:selected").text());
    });
    $('#api_city').change(function(){
        $('#municipality_or_city').val($("#api_city option:selected").text());
    });
    $('#api_barangay').change(function(){
        $('#barangay_name').val($("#api_barangay option:selected").text());
    });
});




