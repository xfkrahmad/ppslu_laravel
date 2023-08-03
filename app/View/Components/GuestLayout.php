<?php

namespace App\View\Components;

use App\Models\SystemConfiguration;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $systemConf = SystemConfiguration::select('institute_photo_url', 'institute_name', 'institute_facebook_url')->first();
        return view('layouts.guest', compact('systemConf'));
    }
}
