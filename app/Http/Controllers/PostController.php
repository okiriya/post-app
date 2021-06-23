<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.post');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'post' => 'required'
        ]); 
        
        return view('pages.post');
    }
}
