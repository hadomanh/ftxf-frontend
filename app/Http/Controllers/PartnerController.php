<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{

    private $partner;

    public function __construct(Partner $partner) {
        $this->partner = $partner;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = $this->partner->orderBy('position', 'ASC')->get();
        return view('partner.index')->with(compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new Partner();
        $partner->logo = '';

        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('logo')){
            $logoFileName = $currentMillis . '.' . $request->file('logo')->extension();
            $partner->logo = $request->file('logo')->storeAs('partnerLogo', $logoFileName, 'public');
        }

        $partner->name = $request->name;
        $partner->url = $request->url;
        $partner->position = $this->partner->count() + 1;

        $partner->save();
        return redirect(route('partner.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('partner.edit')->with(compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('logo')){
            $logoFileName = $currentMillis . '.' . $request->file('logo')->extension();
            $partner->logo = $request->file('logo')->storeAs('partnerLogo', $logoFileName, 'public');
        }

        $partner->name = $request->name;
        $partner->url = $request->url;
        $partner->position = $request->position;

        $partner->save();
        return redirect(route('partner.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        return redirect(route('partner.index'));
    }

    public function toggle(Partner $partner)
    {
        $partner->active = !$partner->active;
        $partner->save();

        return redirect(route('partner.index'));
    }
}
