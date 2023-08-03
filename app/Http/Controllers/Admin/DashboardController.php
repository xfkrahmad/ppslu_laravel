<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use App\Models\SystemConfiguration;
use GuzzleHttp\Psr7\Response;


class DashboardController extends Controller
{
    public function showSystemConf()
    {

        $pageTitle = 'Pengaturan Sistem Aplikasi';

        $systemConf = SystemConfiguration::first();
        $provinces = Province::get();
        $cities = City::get();
        // $json = compact('cities');
        // dd(response()->json($json));
        return view('dashboard-admin.system', compact('pageTitle', 'systemConf', 'provinces', 'cities'));
    }

    public function showEmployees()
    {
        $pageTitle = 'Daftar Pegawai';

        $systemConf = SystemConfiguration::first();
        // $json = compact('cities');
        // dd(response()->json($json));
        return view('dashboard-admin.employees.index', compact('pageTitle', 'systemConf'));
    }
}
