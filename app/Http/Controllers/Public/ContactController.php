<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SystemConfiguration;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {

        $breadcrumbTitle = 'Hubungi Kami';
        $systemConf = SystemConfiguration::join('provinces', 'system_configurations.province_id', 'provinces.id')->join('cities', 'system_configurations.city_id', 'cities.id')->select('system_configurations.institute_name', 'system_configurations.institute_description', 'provinces.province_name', 'system_configurations.institute_email', 'system_configurations.institute_phone', 'system_configurations.institute_address', 'cities.city_name', 'system_configurations.postal_code', 'system_configurations.institute_gmaps_url')->first();
        return view('public.contact', compact('breadcrumbTitle', 'systemConf'));
    }
}
