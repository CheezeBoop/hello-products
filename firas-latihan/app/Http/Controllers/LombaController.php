<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function submit(Request $request)
    {
        $path = $request->file('lomba_photo')->store('lomba_photos','public');

        $data = $request->only(['nama', 'kelas', 'judul_poster']);
        $data['photo_path'] = $path;

        return view('lomba-result', ['data' => $data]);
    }
}