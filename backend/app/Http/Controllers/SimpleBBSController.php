<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleBBSController extends Controller
{
    //
    public function index() {
        $title = 'ひとこと掲示板';
        return view('bbs.index',[
            'title' => $title,
        ]);
    }
}
