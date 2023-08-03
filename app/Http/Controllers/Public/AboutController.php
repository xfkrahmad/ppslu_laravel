<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $breadcrumbTitle = 'Tentang Kami';
        $employees = Employee::where('status', 1)->get();
        $employeesNum = Employee::count();
        return view('public.about', compact('breadcrumbTitle', 'employees', 'employeesNum'));
    }
}
