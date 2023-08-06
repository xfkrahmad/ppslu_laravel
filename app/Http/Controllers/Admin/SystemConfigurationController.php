<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SystemConfiguration;
use App\Http\Requests\StoreSystemConfigurationRequest;
use App\Http\Requests\UpdateSystemConfigurationRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SystemConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSystemConfigurationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemConfiguration $systemConfiguration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemConfiguration $systemConfiguration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemConfigurationRequest $request, SystemConfiguration $systemConfiguration)
    {

        if ($request->hasFile('user-photo')) {
            $modelInstance = SystemConfiguration::first();
            if ($modelInstance->institute_photo_url) {
                if (Storage::exists('public/' . $modelInstance->institute_photo_url))
                    Storage::delete('public/' . $modelInstance->institute_photo_url);
            }
            $photoPath = $request->file('user-photo')->store('photos/logo', 'public'); // Save the photo to the 'public/photos' directory.
            $modelInstance->update([
                'institute_name' => $request->institute_name,
                'institute_name_detail' => $request->institute_name_detail,
                'institute_description' => $request->institute_description,
                'institute_instagram_url' => $request->institute_instagram_url,
                'institute_facebook_url' => $request->institute_facebook_url,
                'institute_twitter_url' => $request->institute_twitter_url,
                'institute_photo_url' => $photoPath,
                'institute_phone' => $request->institute_phone,
                'institute_email' => $request->institute_email,
                'institute_address' => $request->institute_address,
                'province_id' => $request->province_id,
                'city_id' => $request->city_id,
                'postal_code' => $request->postal_code
            ]);
            // Additional logic to associate the photo with the user or store photo information in the database, if needed.
        } else {
            $modelInstance = SystemConfiguration::where('id', 1)->update([
                'institute_name' => $request->institute_name,
                'institute_name_detail' => $request->institute_name_detail,
                'institute_description' => $request->institute_description,
                'institute_instagram_url' => $request->institute_instagram_url,
                'institute_facebook_url' => $request->institute_facebook_url,
                'institute_twitter_url' => $request->institute_twitter_url,
                'institute_phone' => $request->institute_phone,
                'institute_email' => $request->institute_email,
                'institute_address' => $request->institute_address,
                'province_id' => $request->province_id,
                'city_id' => $request->city_id,
                'postal_code' => $request->postal_code
            ]);
            Session::flash('successMsg', 'Data Berhasil Dirubah.');
            return redirect()->route('dashboard.admin.system');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemConfiguration $systemConfiguration)
    {
        //
    }
}
