<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
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
        $pageTitle = 'Tambah Berita';
        return view('dashboard-admin.news.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $modelInstance = News::create([
            'title' => $request->title,
            'photo_url' => 'temporary',
            'video_url' => $request->video_url,
            'content' => $request->content,
            'status' => $request->status == "1" ? 1 : 0,
        ]);
        if ($request->hasFile('photo_url')) {
            $photoPath = $request->file('photo_url')->store('photos/news/' . $modelInstance->id, 'public'); // Save the photo to the 'public/photos' directory.
            $modelInstance->update([
                'photo_url' => $photoPath
            ]);
        }
        Session::flash('successMsg', 'Berita Berhasil Ditambahkan.');
        return redirect()->route('dashboard.admin.news');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $pageTitle = 'Edit Pegawai';
        return view('dashboard-admin.news.edit', compact('pageTitle', 'news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        if ($request->hasFile('photo_url')) {
            if ($news->photo_url) {
                if (Storage::exists('public/' . $news->photo_url))
                    Storage::delete('public/' . $news->photo_url);
            }
            $photoPath = $request->file('photo_url')->store('photos/employees/' . $news->id, 'public'); // Save the photo to the 'public/photos' directory.

            $news->update([
                'title' => $request->title,
                'photo_url' => $photoPath,
                'video_url' => $request->video_url,
                'content' => $request->content,
                'status' => $request->status == "1" ? 1 : 0
            ]);
        } else {
            $news->update([
                'title' => $request->title,
                'video_url' => $request->video_url,
                'content' => $request->content,
                'status' => $request->status == "1" ? 1 : 0
            ]);
        }
        Session::flash('successMsg', 'Berita Berhasil Diubah.');
        return redirect()->route('dashboard.admin.news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->photo_url) {
            $directoryPath =
                $directoryPath = 'public/photos/news/' . $news->id;

            if (Storage::exists($directoryPath)) {
                Storage::deleteDirectory($directoryPath);
            }
        }
        $news->delete();
        Session::flash('successMsg', 'Berita Berhasil Dihapus.');
        return redirect()->route('dashboard.admin.news');
    }
}
