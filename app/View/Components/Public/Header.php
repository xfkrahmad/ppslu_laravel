<?php

namespace App\View\Components\Public;

use App\Models\SystemConfiguration;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $systemConf = SystemConfiguration::select('institute_photo_url')->first();

        return view('layouts.public.header', compact('systemConf'));
    }
}
