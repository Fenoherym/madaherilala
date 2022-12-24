<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Circuit;
use App\Models\CircuitElement;
use Illuminate\Http\Request;

class CircuitElementController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index($id)
    {
        $circuit_elements = CircuitElement::where('circuit_id', $id)->orderBy('rang')->get();
        $circuit_elements->load('circuit');
        $circuit = Circuit::findOrFail($id);
        $circuit->load('point_forts');

        return view('admin.circuit.element.index', [
            "circuit_elements" => $circuit_elements,
            "circuit" => $circuit
        ]);
    }

    public function create($id)
    {
        $circuit = Circuit::findOrFail($id);

        return view('admin.circuit.element.create', compact('circuit'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => ['required'],
            "description" => ['required'],
            "rang" => ['required'],
            "circuit_id" => ['required']
        ]);

        CircuitElement::create($data);

        return redirect()->back()->with('success', "Element ajouté avec succès");
    }

    public function edit($id)
    {
        $circuit_element = CircuitElement::findOrFail($id);

        return view('admin.circuit.element.edit', compact('circuit_element'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "title" => ['required'],
            "description" => ['required'],
            "rang" => ['required'],
        ]);
        CircuitElement::findOrFail($id)->update($data);

        return redirect()->back()->with('success', "Element modifié avec succès");
    }

    public function destroy($id)
    {
        CircuitElement::findOrFail($id)->delete();

        return redirect()->back()->with('success', "Element supprimé avec succès");
    }
}
