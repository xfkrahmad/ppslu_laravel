<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use DragonCode\Support\Facades\Filesystem\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
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
        $pageTitle = 'Tambah Pegawai';
        return view('dashboard-admin.employees.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $modelInstance = Employee::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'title_name' => $request->title_name,
            'photo_url' => 'temporary',
            'position_name' => $request->position_name,
            'motto_description' => $request->motto_description,
            'status' => $request->status == "1" ? 1 : 0
        ]);

        if ($request->hasFile('photo_url')) {
            $photoPath = $request->file('photo_url')->store('photos/employees/' . $modelInstance->id, 'public'); // Save the photo to the 'public/photos' directory.
            $modelInstance->update([
                'photo_url' => $photoPath
            ]);
        }
        Session::flash('successMsg', 'Pegawai Berhasil Ditambahkan.');
        return redirect()->route('dashboard.admin.employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $pageTitle = 'Edit Pegawai';
        return view('dashboard-admin.employees.edit', compact('pageTitle', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {

        if ($request->hasFile('photo_url')) {
            if ($employee->photo_url) {
                Storage::delete('public/' . $employee->photo_url);
            }
            $photoPath = $request->file('photo_url')->store('photos/employees/' . $employee->id, 'public'); // Save the photo to the 'public/photos' directory.

            $employee->update([
                'nip' => $request->nip,
                'name' => $request->name,
                'title_name' => $request->title_name,
                'photo_url' => $photoPath,
                'position_name' => $request->position_name,
                'motto_description' => $request->motto_description,
                'status' => $request->status == "1" ? 1 : 0
            ]);
        } else {
            $employee->update([
                'nip' => $request->nip,
                'name' => $request->name,
                'title_name' => $request->title_name,
                'position_name' => $request->position_name,
                'motto_description' => $request->motto_description,
                'status' => $request->status == "1" ? 1 : 0
            ]);
        }
        Session::flash('successMsg', 'Pegawai Berhasil Diubah.');
        return redirect()->route('dashboard.admin.employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        if ($employee->photo_url) {
            $directoryPath =
                $directoryPath = 'public/photos/employees/' . $employee->id;

            if (Storage::exists($directoryPath)) {
                Storage::deleteDirectory($directoryPath);
            }
        }
        $employee->delete();
        Session::flash('successMsg', 'Pegawai Berhasil Dihapus.');
        return redirect()->route('dashboard.admin.employees');
    }
}
