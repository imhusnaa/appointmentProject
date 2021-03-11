<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To iCare';
        //return view('pages.index', compact('title'));
        //to add multiple values
        return view('pages.index')->with('title', $title);
    }
    public function test(){
        $title = 'DASS Test';
        return view('pages.test')->with('title', $title);
    }
    public function booking(){
        $data = array(
            'title' => 'Counsellors',
            'counsellor' => ['Ms Nur Ain', 'Mr Adamu', 'Ms Linda']
        );
        
        return view('pages.booking')->with($data);
    }
    public function contact(){
        $title = 'Contact Us';
        return view('pages.test')->with('title', $title);
    }

}
