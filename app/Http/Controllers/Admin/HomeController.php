<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
class HomeController
{
    public function index()
    {
        dd(Storage::disk('rackspace'));
        return view('home');
    }
}
