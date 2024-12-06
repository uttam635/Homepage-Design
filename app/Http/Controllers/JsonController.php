<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function readJson(Request $request) {
        $json = file_get_contents(public_path('data/adi.json'));

        $data = json_decode($json);
        // return response()->json($data);

        return view('Adi/adi', ['data' => $data]);
        // return view('Adi/adi', compact('data'));
    }

    public function index() {
        return view('Adi/adi');
    }
}
