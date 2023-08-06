<?php

namespace App\Http\Controllers;

use App\Models\RegistrationApplication;
use App\Http\Requests\StoreRegistrationApplicationRequest;
use App\Http\Requests\UpdateRegistrationApplicationRequest;
use App\Mail\RegistrationApplicationMail;
use App\Models\SystemConfiguration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegistrationApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $systemConf = SystemConfiguration::select('institute_photo_url', 'institute_name', 'institute_facebook_url')->first();
        return view('public.registration-application', compact('systemConf'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    function generateRandomRegistrationNumber()
    {
        $randomString = Str::random(4); // Generate a random string of 4 characters
        $currentDate = date('Ymd'); // Get the current date in the format 'yyyyMMdd'
        $currentTime = date('His'); // Get the current time in the format 'HHmmss'
        $registrationNumber = $currentDate . $currentTime . $randomString;
        return $registrationNumber;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationApplicationRequest $request)
    {
        if ($request->hasFile('elderly_photo_url')) {
            $randomNumber = $this->generateRandomRegistrationNumber();

            $modelInstance = RegistrationApplication::create([
                'registration_number' => $randomNumber,
                'elderly_name' => $request->elderly_name,
                'elderly_gender_name' => $request->elderly_gender_name,
                'elderly_nik_number' => $request->elderly_nik_number,
                'elderly_kk_number' => $request->elderly_kk_number,
                'elderly_kis_number' => $request->elderly_kis_number,
                'elderly_date_born' => $request->elderly_date_born,
                'elderly_religion_name' => $request->elderly_religion_name,
                'elderly_address' => $request->elderly_address,
                'elderly_domicile' => $request->elderly_domicile,
                'reporter_name' => $request->reporter_name,
                'reporter_phone_number' => $request->reporter_phone_number,
                'reporter_address' => $request->reporter_address,
                'reporter_job_name' => $request->reporter_job_name,
                'elderly_physical_condition' => $request->elderly_physical_condition,
                'elderly_psychological_condition' => $request->elderly_psychological_condition,
                'elderly_social_condition' => $request->elderly_social_condition,
                'elderly_economy_condition' => $request->elderly_economy_condition,
                'elderly_photo_url' => 'temporary'
            ]);

            $photoPath = $request->file('elderly_photo_url')->store('photos/elderlys/' . $modelInstance->id, 'public'); // Save the photo to the 'public/photos' directory.
            $modelInstance->update([
                'elderly_photo_url' => $photoPath
            ]);
            $data = SystemConfiguration::select('institute_email')->first();
            $linkRegister = 'http://localhost:8000/dashboard/admin/registeration-application/' . $modelInstance->registration_number . '/show';
            Mail::to($data->institute_email)->send(new RegistrationApplicationMail($linkRegister, $request->reporter_name, $request->reporter_address));
            Session::flash('successMsg', ['messages' => 'Pesan Berhasil Dikirim', 'registrationNumber' => $randomNumber]);
            return redirect()->route('public.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RegistrationApplication $registrationApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegistrationApplication $registrationApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationApplicationRequest $request, RegistrationApplication $registrationApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegistrationApplication $registrationApplication)
    {
        //
    }
}
