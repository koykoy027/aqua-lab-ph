<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddressController extends Controller
{
    public function regions()
    {
        $regions = json_decode(Storage::get('philippine-addresses/region.json'), true);

        // Custom sorting function to sort by region name in ascending order
        usort($regions, function ($a, $b) {
            return strcmp($a['region_name'], $b['region_name']);
        });

        return response()->json($regions);
    }


    public function provinces($regionCode)
    {
        $provinces = json_decode(Storage::get('philippine-addresses/province.json'), true);

        // Filter the provinces based on the selected region_code
        $filteredProvinces = array_filter($provinces, function ($province) use ($regionCode) {
            return $province['region_code'] === $regionCode;
        });

        // Custom sorting function to sort by province name in ascending order
        usort($filteredProvinces, function ($a, $b) {
            return strcmp($a['province_name'], $b['province_name']);
        });

        return response()->json($filteredProvinces);
    }



    public function cities($provinceCode)
    {
        $cities = json_decode(Storage::get('philippine-addresses/city.json'), true);

        // Filter the cities based on the selected province_code
        $filteredCities = array_filter($cities, function ($city) use ($provinceCode) {
            return $city['province_code'] === $provinceCode;
        });

        // Custom sorting function to sort by city name in ascending order
        usort($filteredCities, function ($a, $b) {
            return strcmp($a['city_name'], $b['city_name']);
        });

        return response()->json($filteredCities);
    }



    public function barangays($cityCode)
    {
        $barangays = json_decode(Storage::get('philippine-addresses/barangay.json'), true);

        // Filter the barangays based on the selected city_code
        $filteredBarangays = array_filter($barangays, function ($barangay) use ($cityCode) {
            return $barangay['city_code'] === $cityCode;
        });

        // Custom sorting function to sort by barangay name in ascending order
        usort($filteredBarangays, function ($a, $b) {
            return strcmp($a['brgy_name'], $b['brgy_name']);
        });

        return response()->json($filteredBarangays);
    }
}