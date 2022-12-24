<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('store');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ['required'],
            "email" => ['required'],
            "content" => ['required']
        ]);

        Message::create($data);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Message::findOrFail($id)->delete($id);
        return redirect()->back();
    }
}
