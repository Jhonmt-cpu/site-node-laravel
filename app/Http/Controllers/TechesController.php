<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use Illuminate\Http\Request;

class TechesController extends Controller
{
    public function findAll()
    {
        $data= Tech::all();
        return view('site.frameworks', ['data'=>$data]);
    }

    public function store(Request $request)
    {
        Tech::create([
            'name' => $request->name,
            'description' => $request->description,
            'photo_url' => $request->photo_url,
        ]);

        return view('dashboard', ['success'=>true]);
    }
}
