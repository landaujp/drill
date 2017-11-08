<?php

namespace App\Http\Controllers;

use App\Mokuji;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        return view('layout')
            ->with('mokuji', Mokuji::MOKUJI);
            ->with('content', "ようこそ〜");
    }
}
