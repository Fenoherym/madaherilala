<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PointFort;
use Illuminate\Http\Request;

class PointFortController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ['required'],
        ]);

        PointFort::create([
            "name" => $request->name,
            "circuit_id" => $request->circuit_id
        ]);

        return redirect()->back()->with('success', "Point fort ajouté avec succès");
    }

    public function destroy($id)
    {
        PointFort::findOrFail($id)->delete();

        return redirect()->back()->with('success', "Point fort supprimé avec succès");
    }
}
