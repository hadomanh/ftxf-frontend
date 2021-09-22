<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeCarouselItemRequest;
use App\Models\HomeCarouselItem;
use Illuminate\Http\Request;

class HomeCarouselItemController extends Controller
{

    private $homeCarouselItem;

    public function __construct(HomeCarouselItem $homeCarouselItem) {
        $this->homeCarouselItem = $homeCarouselItem;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeCarouselItem = $this->homeCarouselItem->all();
        return view('homeCarouselItem.index')->with(compact('homeCarouselItem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homeCarouselItem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeCarouselItemRequest $request)
    {
        $item = new HomeCarouselItem();

        $item->thumbnail = '';
        $item->logo = '';
        $item->background = '';

        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $item->thumbnail = $request->file('thumbnail')->storeAs('carouselThumbnail', $thumbnailFileName, 'public');
        }

        if($request->hasFile('logo')){
            $logoFileName = $currentMillis . '.' . $request->file('logo')->extension();
            $item->logo = $request->file('logo')->storeAs('carouselLogo', $logoFileName, 'public');
        }

        if($request->hasFile('background')){
            $backgroundFileName = $currentMillis . '.' . $request->file('background')->extension();
            $item->background = $request->file('background')->storeAs('carouselBackground', $backgroundFileName, 'public');
        }

        $item->name = $request->name;
        $item->url = $request->url;
        $item->description = $request->description;

        $item->save();

        return redirect(route('home-carousel-item.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeCarouselItem  $homeCarouselItem
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCarouselItem $homeCarouselItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCarouselItem  $homeCarouselItem
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeCarouselItem $homeCarouselItem)
    {
        return view('homeCarouselItem.edit')->with(compact('homeCarouselItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCarouselItem  $homeCarouselItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeCarouselItem $homeCarouselItem)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $homeCarouselItem->thumbnail = $request->file('thumbnail')->storeAs('carouselThumbnail', $thumbnailFileName, 'public');
        }

        if($request->hasFile('logo')){
            $logoFileName = $currentMillis . '.' . $request->file('logo')->extension();
            $homeCarouselItem->logo = $request->file('logo')->storeAs('carouselLogo', $logoFileName, 'public');
        }

        if($request->hasFile('background')){
            $backgroundFileName = $currentMillis . '.' . $request->file('background')->extension();
            $homeCarouselItem->background = $request->file('background')->storeAs('carouselBackground', $backgroundFileName, 'public');
        }

        $homeCarouselItem->name = $request->name;
        $homeCarouselItem->url = $request->url;
        $homeCarouselItem->description = $request->description;

        $homeCarouselItem->save();
        return redirect(route('home-carousel-item.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarouselItem  $homeCarouselItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeCarouselItem $homeCarouselItem)
    {
        $homeCarouselItem->delete();
        return redirect(route('home-carousel-item.index'));
    }

    public function toggle(HomeCarouselItem $homeCarouselItem)
    {
        $homeCarouselItem->active = !$homeCarouselItem->active;
        $homeCarouselItem->save();
        return redirect(route('home-carousel-item.index'));
    }
}
