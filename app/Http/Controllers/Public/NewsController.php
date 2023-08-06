<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        $breadcrumbTitle = 'PPSLU Sudagaran Dalam Berita';

        $news = News::where('status', 1)->paginate(4);
        return view('public.news.index', compact('breadcrumbTitle', 'news'));
    }

    public function showNewsById(News $news)
    {
        $breadcrumbTitle = $news->title;
        $randomNews = News::whereNotIn('id', [$news->id])->inRandomOrdeR()->take(2)->get();
        $countNews = News::count();
        return view('public.news.detail', compact('breadcrumbTitle', 'news', 'randomNews', 'countNews'));
    }
}
