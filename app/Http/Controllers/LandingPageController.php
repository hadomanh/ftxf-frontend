<?php

namespace App\Http\Controllers;

use App\Models\HomeCarouselItem;
use App\Models\News;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    private $homeCarouselItem;
    private $news;

    public function __construct(HomeCarouselItem $homeCarouselItem, News $news) {
        $this->homeCarouselItem = $homeCarouselItem;
        $this->news = $news;
    }

    public function index() {
        $homeCarouselItems = $this->homeCarouselItem->where('active', true)->get();
        return view('home')->with(compact('homeCarouselItems'));
    }
    
    public function about() {
        return view('about');
    }
    
    public function ecosystem() {
        return view('ecosystem');
    }
    
    public function roadmap() {
        return view('roadmap');
    }
    
    public function partner() {
        return view('partner');
    }
    
    public function news() {
        $news = $this->news->where('active', true)->get();
        return view('news')->with(compact('news'));
    }
    
    public function newsDetail(News $news)
    {
        $allNews = $this->news->where('active', true)->get();
        return view('news-detail')->with(compact('news', 'allNews'));
    }
    
    public function contact() {
        return view('contact');
    }
}
