<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    private $news;

    public function __construct(News $news) {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->news->all();
        
        return view('news.index')->with(compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->thumbnail = '';

        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $news->thumbnail = $request->file('thumbnail')->storeAs('newsThumbnail', $thumbnailFileName, 'public');
        }

        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->content = $request->content;

        if (!$request->filled('seo_title')) {
            $news->seo_title = $request->title;
        } else {
            $news->seo_title = $request->seo_title;
        }

        if (!$request->filled('seo_description')) {
            $news->seo_description = $request->subtitle;
        } else {
            $news->seo_description = $request->seo_description;
        }

        if (!$request->filled('seo_keyword')) {
            $news->seo_keyword = '';
        } else {
            $news->seo_keyword = $request->seo_keyword;
        }

        $news->slug = '';

        $news->save();

        $news->slug = Str::slug($request->title, '-') . '-' . $news->id;

        $news->save();

        return redirect(route('news.index'));
    }

    public function imageUpload(Request $request)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('upload')){
            $uploadFileName = $currentMillis . '.' . $request->file('upload')->extension();
            $location = 'storage/' . $request->file('upload')->storeAs('newsImage', $uploadFileName, 'public');
            $url = asset($location);
            
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit')->with(compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $news->thumbnail = $request->file('thumbnail')->storeAs('newsThumbnail', $thumbnailFileName, 'public');
        }

        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->content = $request->content;

        if (!$request->filled('seo_title')) {
            $news->seo_title = $request->title;
        } else {
            $news->seo_title = $request->seo_title;
        }

        if (!$request->filled('seo_description')) {
            $news->seo_description = $request->subtitle;
        } else {
            $news->seo_description = $request->seo_description;
        }

        if (!$request->filled('seo_keyword')) {
            $news->seo_keyword = '';
        } else {
            $news->seo_keyword = $request->seo_keyword;
        }

        $news->slug = Str::slug($request->title, '-') . '-' . $news->id;

        $news->save();

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect(route('news.index'));
    }

    public function toggle(News $news)
    {
        $news->active = !$news->active;
        $news->save();

        return redirect(route('news.index'));
    }
}
