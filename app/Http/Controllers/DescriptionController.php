<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    private $description;

    public function __construct(Description $description) {
        $this->description = $description;
    }

    public function getDetail($name)
    {
        $description = $this->description->whereName($name)->first();

        return view($name . '.description')->with(compact('description'));
    }

    public function updateDetail(Request $request, Description $description)
    {
        $description->detail = $request->detail;
        $description->save();

        return redirect(route('partner.index'));
    }

}
