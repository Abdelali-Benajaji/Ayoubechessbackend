<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index()
    {
        $archives = Archive::all();
        return response()->json($archives);
    }
}
