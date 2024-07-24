<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Mobil;

class GuestController extends Controller
{
    public function index() {
        $mobil = Mobil::all();
        return view('/users/home', ['mobil' => $mobil]);
    }
}
