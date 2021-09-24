<?php

namespace App\Http\Controllers;

use App\Models\HomeCarouselItem;
use App\Models\News;
use App\Models\Partner;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    private $homeCarouselItem;
    private $news;
    private $partner;

    public function __construct(HomeCarouselItem $homeCarouselItem, News $news, Partner $partner) {
        $this->homeCarouselItem = $homeCarouselItem;
        $this->news = $news;
        $this->partner = $partner;
    }

    public function index() {
        $homeCarouselItems = $this->homeCarouselItem->where('active', true)->orderBy('position', 'ASC')->get();
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
        $partners = $this->partner->where('active', true)->orderBy('position', 'ASC')->get();
        return view('partner')->with(compact('partners'));
    }
    
    public function news() {
        $news = $this->news->where('active', true)->get();
        return view('news')->with(compact('news'));
    }
    
    public function newsDetail($slug)
    {
        $elements = explode('-', $slug);
        $newsId = $elements[count($elements) - 1];
        $news = $this->news->find($newsId);

        $allNews = $this->news->where('active', true)->get();

        return view('news-detail')->with(compact('news', 'allNews'));
    }
    
    public function contact() {
        return view('contact');
    }
}
