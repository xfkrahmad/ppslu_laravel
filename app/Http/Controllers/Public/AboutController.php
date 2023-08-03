<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $data = [
            'breadcrumbTitle' => 'Tentang Kami',
        ];
        return view('public.about')->with($data);
    }
}
