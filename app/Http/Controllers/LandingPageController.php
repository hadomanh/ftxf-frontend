<?php

namespace App\Http\Controllers;

use App\Models\Description;
use App\Models\HomeCarouselItem;
use App\Models\News;
use App\Models\Partner;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    private $homeCarouselItem;
    private $news;
    private $partner;

    public function __construct(HomeCarouselItem $homeCarouselItem, News $news, Partner $partner, Description $description) {
        $this->homeCarouselItem = $homeCarouselItem;
        $this->news = $news;
        $this->partner = $partner;
        $this->description = $description;
    }

    public function index() {
        $homeCarouselItems = $this->homeCarouselItem->where('active', true)->orderBy('position', 'ASC')->get();
        return view('home')->with(compact('homeCarouselItems'));
    }
    
    public function about() {
        $description = $this->description->whereName('about')->first();

        return view('about')->with(compact('description'));
    }
    
    public function ecosystem() {
        $description = $this->description->whereName('ecosystem')->first();

        return view('ecosystem')->with(compact('description'));
    }
    
    public function roadmap() {
        return view('roadmap');
    }
    
    public function partner() {
        $partners = $this->partner->where('active', true)->orderBy('position', 'ASC')->get();
        $description = $this->description->whereName('partner')->first();

        return view('partner')->with(compact('partners', 'description'));
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

        $relatedNews = $this->news->where('active', true)->limit(6)->get();

        return view('news-detail')->with(compact('news', 'relatedNews'));
    }
    
    public function contact() {
        $description = $this->description->whereName('contact')->first();

        return view('contact')->with(compact('description'));
    }
}
