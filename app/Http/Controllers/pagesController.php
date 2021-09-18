<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    // midoshriks
    public function index(){
        $title = 'Welcome laravel';

        // return 'INDEX';
        // var_dump('test');

        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About Us';

        // return view('pages.about');
        return view('pages.about')->with('title', $title);

    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Dising', 'progrmming', 'SEO']
        );
        // return view('pages.services');
        return view('pages.services')->with($data);

    }
}
