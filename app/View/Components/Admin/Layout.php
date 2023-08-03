<?php

namespace App\View\Components\Admin;

use App\Models\SystemConfiguration;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $pageTitle = ''
    ) {
        $this->pageTitle = $pageTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $systemConf = SystemConfiguration::select('institute_photo_url', 'institute_name', 'institute_facebook_url')->first();
        return view('layouts.dashboard-admin.layout', compact('systemConf'));
    }
}
