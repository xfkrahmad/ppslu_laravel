<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {

        $data = [
            'breadcrumbTitle' => 'PPSLU Sudagaran Dalam Berita',
        ];
        return view('public.news.index-news')->with($data);
    }

    public function showNewsById($id)
    {
        return view('public.news.', ['id' => $id]);
    }
}
