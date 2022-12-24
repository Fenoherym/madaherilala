<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Circuit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CircuitController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $circuits = Circuit::all();
        $circuits->load('circuit_elements');

        return view('admin.circuit.index', compact('circuits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ['required'],
            'photoUrl' => ['image', 'required']
        ]);
        $file_name = time() . '.' . $request->photoUrl->extension();
        $path = $request->photoUrl->storeAs(
            'circuits',
            $file_name,
            'public'
        );
        Circuit::create([
            "name" => $request->name,
            "photoUrl" => $path
        ]);

        return redirect()->back()->with('success', "Circuit créé avec succès");
    }

    public function update(Request $request)
    {
        $request->validate([
            "name" => ['required'],
            'photoUrl' => ['image']
        ]);

        $circuit =  Circuit::findOrFail($request->id);
        if ($request->photoUrl != "") {
            $file_name = time() . '.' . $request->photoUrl->extension();
            $path = $request->photoUrl->storeAs(
                'circuits',
                $file_name,
                'public'
            );
        } else {
            $path = $circuit->photoUrl;
        }
        Storage::disk('public')->delete($circuit->photoUrl);
        $circuit->update([
            "name" => $request->name,
            "photoUrl" => $path
        ]);

        return redirect()->back()->with('success', "Modification réussi");
    }

    public function destroy($id)
    {
        Circuit::findOrFail($id)->delete();
        return redirect()->back()->with('success', "Circuit supprimé avec succès");
    }
}
