<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use App\Models\CircuitElement;
use Illuminate\Http\Request;

class CircuitController extends Controller
{
    public function index()
    {
        $circuits = Circuit::all();
        $circuits->load('circuit_elements');
        return view('circuit.index', compact('circuits'));
    }

    public function show($id)
    {
        $circuit_elements = CircuitElement::where('circuit_id', $id)->with([
            'circuit' => [
                'point_forts'
            ]
        ])->orderBy('rang')->get();
        $circuit = Circuit::findOrFail($id);
        $circuit->load('point_forts');
        $circuits  = Circuit::all();

        return view('circuit.sow', [
            "circuit_elements" => $circuit_elements,
            "circuit" => $circuit,
            "circuits" => $circuits
        ]);
    }
}
