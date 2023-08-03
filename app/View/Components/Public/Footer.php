<?php

namespace App\View\Components\Public;

use App\Models\SystemConfiguration;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $systemConf = SystemConfiguration::select('institute_instagram_url', 'institute_facebook_url', 'institute_twitter_url', 'institute_name_detail')->first();
        return view('layouts.public.footer', compact('systemConf'));
    }
}
