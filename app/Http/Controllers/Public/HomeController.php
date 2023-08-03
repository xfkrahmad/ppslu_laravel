<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SystemConfiguration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {

        $systemConf = SystemConfiguration::join('provinces', 'system_configurations.province_id', 'provinces.id')->select('system_configurations.institute_name', 'system_configurations.institute_description', 'provinces.province_name')->first();
        return view('public.home', compact('systemConf'));
    }
}
