<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegistrationApplication;
use App\Http\Requests\StoreRegistrationApplicationRequest;
use App\Http\Requests\UpdateRegistrationApplicationRequest;
use App\Models\SystemConfiguration;

class RegistrationApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationApplicationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RegistrationApplication $registrationApplication)
    {
        $systemConf = SystemConfiguration::select('institute_photo_url', 'institute_name', 'institute_facebook_url')->first();
        return view('dashboard-admin.registration-application.show', compact('registrationApplication', 'systemConf'));
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
