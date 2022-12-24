<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use App\Models\Contact;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $contact = Contact::all()->first();
        $circuits = Circuit::all();
        $data = [];
        $count = 0;
        $data_index = 0;
        foreach ($circuits as $circuit) {
            if ($count % 3 == 0 && $count != 0) {
                $data_index++;
            }
            $data[$data_index][] = $circuit;
            $count++;
        }

        return view('welcome.index', [
            "contact" => $contact,
            "data" => $data
        ]);
    }
}
