<?php

namespace App\Controllers;

class PagesController
{
    public function home() {


        // require 'views/index.view.php';
        return view('index');
    }
    public function about() {
        // require 'views/about.view.php';
        return view('about');
    }
    public function contact() {

        // require 'views/contact.view.php';
        return view('contact');
    }
    public function culture() {
        $data = 'Sam';
        // require 'views/about-culture.view.php';
        return view('about-culture', compact('data'));
    }
}