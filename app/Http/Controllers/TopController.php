<?php

namespace App\Http\Controllers;

use App\Mokuji;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        return view('layout')
            ->with('sections', Mokuji::MOKUJI)
            ->with('current_section', "")
            ->with('current_subject', "")
            ->with('content', "ようこそ〜");
    }
}
