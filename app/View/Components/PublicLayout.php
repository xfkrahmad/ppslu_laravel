<?php

namespace App\View\Components;

use App\Models\SystemConfiguration;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PublicLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $breadcrumbTitle = '',
    ) {
        $this->breadcrumbTitle = $breadcrumbTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $systemConf = SystemConfiguration::select('institute_photo_url', 'institute_name', 'institute_facebook_url')->first();
        return view('layouts.public.layout', compact('systemConf'));
    }
}
