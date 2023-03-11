<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Home 
 */
class HomeController extends Controller {

    /**
     * Display the homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // afficher 
        return view(
            'home.index', 
        );
    }

}
