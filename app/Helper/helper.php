<?php

use App\Models\Session;
use App\Models\Visiteur;

function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $data = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
    $country = $data->geoplugin_countryName;
    $date = date('Y-m');
    $visiteur = Visiteur::where('ip', $ip)->get();
    $vstr = new Visiteur();
    if ($visiteur->count() == 0) {
        $vstr->ip = $ip;
        $vstr->country = $country;
        $vstr->month = $date;
        $vstr->save();
    }
}

function getUserSession()
{
    session_start();

    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = "users";
        $date = date('Y-m');
        $session = Session::where('month', $date)->first();
        if ($session != null) {
            $count = $session->count;
            $count++;

            $session->update([
                "count" => $count
            ]);
        } else {
            Session::create([
                "month" => $date,
                "count" => 1,
            ]);
        }
    }
}
