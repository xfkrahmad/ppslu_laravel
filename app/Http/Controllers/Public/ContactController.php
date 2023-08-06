<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerAskingRequest;
use App\Mail\CustomerAskingMail;
use App\Models\CustomerAsking;
use App\Models\SystemConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function show()
    {

        $breadcrumbTitle = 'Hubungi Kami';
        $systemConf = SystemConfiguration::join('provinces', 'system_configurations.province_id', 'provinces.id')->join('cities', 'system_configurations.city_id', 'cities.id')->select('system_configurations.institute_name', 'system_configurations.institute_description', 'provinces.province_name', 'system_configurations.institute_email', 'system_configurations.institute_phone', 'system_configurations.institute_address', 'cities.city_name', 'system_configurations.postal_code', 'system_configurations.institute_gmaps_url')->first();
        return view('public.contact', compact('breadcrumbTitle', 'systemConf'));
    }

    public function store(CustomerAskingRequest $request)
    {
        $data = SystemConfiguration::select('institute_email')->first();
        Mail::to($data->institute_email)->send(new CustomerAskingMail($request->content, $request->subject, $request->sender, $request->sender_email));
        Session::flash('successMsg', 'Berhasil mengirim pesan');
        return redirect()->back();
    }
}
