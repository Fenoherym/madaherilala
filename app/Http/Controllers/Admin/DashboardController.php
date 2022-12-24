<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Session;
use App\Models\Visiteur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::all();
        $visiteurs = Visiteur::all();
        $visiteur_mois = Visiteur::where('month', \Date("Y-m"))->get();
        $sessions = Session::where('month', \Date("Y-m"))->get();
        $last_visiteurs = Visiteur::paginate(10);

        return view('admin.dashboard.index', [
            "messages" => $messages,
            "visiteurs" => $visiteurs,
            "visiteur_mois" => $visiteur_mois,
            "sessions" => $sessions,
            "last_visiteurs" => $last_visiteurs
        ]);
    }

    public function reset()
    {
        $messages = Message::all();
        $visiteurs = Visiteur::all();
        $sessions = Session::all();

        foreach ($visiteurs as $visiteur) {
            $visiteur->delete();
        }
        foreach ($messages as $message) {
            $message->delete();
        }
        foreach ($sessions as $session) {
            $session->delete();
        }

        return redirect()->back()->with('success', "Remise des compteurs à 0 réussi");
    }
}
